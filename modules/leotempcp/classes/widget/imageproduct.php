<?php 
/******************************************************
 *  Leo Prestashop Theme Framework for Prestashop 1.5.x
 *
 * @package   leotempcp
 * @version   3.0
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
 * ******************************************************/

class LeoWidgetImageProduct extends LeoWidgetBase {

		public $name = 'imageproduct';
		public $for_module = 'all';
		
		public function getWidgetInfo(){
			return array('label' => $this->l('Images Gallery Product'), 'explain' => 'Create Images Mini Generalallery From Product' );
		}


		public function renderForm( $args, $data ){
			//echo($this -> getImagesByCategory('4,8',(int) Context::getContext()->language->id));die;
			$helper = $this->getFormHelper();
		 	$soption = array(
	            array(
	                'id' => 'active_on',
	                'value' => 1,
	                'label' => $this->l('Enabled')
	            ),
	            array(
	                'id' => 'active_off',
	                'value' => 0,
	                'label' => $this->l('Disabled')
	            )
	        );
		 	$source = array(
			  array(
				'value' => 'ip_pcategories',                 // The value of the 'value' attribute of the <option> tag.
				'name' 	=> 	$this->l('Category')             // The value of the text content of the  <option> tag.
			  ),
			  array(
				'value' => 'ip_pproductids',
				'name' 	=> $this->l('Product Ids')
			  ));
		 	$pimagetypes = $this->getImageTypes();
		 	$selected_cat = array();
			if($data){
				if($data['params'] &&  isset($data['params']['categories']) && $data['params']['categories'])
					$selected_cat = $data['params']['categories'];
			}

		 	$this->fields_form[1]['form'] = array(
	            'legend' => array(
	                'title' => $this->l('Widget Form.'),
	            ),
	           	'input' => array(
	                array(
		                'type' => 'html',
		                'html_content' => 'Please access <a href="http://apollotheme.com/" target="_blank" title="apollo site">Apollotheme.com</a> to buy professional version to use this ',
		            ),
		            array(
		                'type' => 'html',
		                'html_content' => '<a target="_blank" href="http://apollotheme.com/how-to-buy-pro-version/" target="_blank" title="How to buy">How to buy Professional Version</a>',
		            ),
		            array(
		                'type' => 'html',
		                'html_content' => '<a target="_blank" href="http://apollotheme.com/different-between-free-pro-version/" target="_blank" title="Why should use">Why should use Professional Version</a>',
		            )
	            ),
                        'buttons' => array(
                            array(
                                'title' => $this->l('Save And Stay'),
                                'icon' => 'process-icon-save',
                                'class' => 'pull-right',
                                'type' => 'submit',
                                'name' => 'saveandstayleotempcp'
                            ),
                            array(
                                'title' => $this->l('Save'),
                                'icon' => 'process-icon-save',
                                'class' => 'pull-right',
                                'type' => 'submit',
                                'name' => 'saveleotempcp'
                            ),
                        )
	        );

		 	$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
			
			$helper->tpl_vars = array(
	                'fields_value' => $this->getConfigFieldsValues( $data ),
	                'languages' => Context::getContext()->controller->getLanguages(),
	                'id_language' => $default_lang
        	);  


			return  $helper->generateForm( $this->fields_form );

		}
 
		public function renderContent( $args, $setting ){
			$link = new Link();
			$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	        $url = Tools::htmlentitiesutf8($protocol . $_SERVER['HTTP_HOST'] . __PS_BASE_URI__) ;
			$smallimage = ($setting['smallimage']) ? ($setting['smallimage']) : 'small_default';

			$thickimage = ($setting['thickimage']) ? ($setting['thickimage']) : 'thickbox_default';
			switch ( $setting['ip_source'] ) {					
				case 'ip_pproductids':
						if(empty($setting['ip_pproductids'])){
							return false;
						}
						if($pproductids = $setting['ip_pproductids']){
							$results = $this->getImagesByProductId($pproductids, 0, $setting['ip_limit'], (int) Context::getContext()->language->id);
							$setting['images'] = $results;
						}
				 break;
				 
				 case 'ip_pcategories':		
						$catids = (isset($setting['categories']) && $setting['categories']) ? ($setting['categories']) : array();
						if($catids){
							$categories = implode(",",$catids);
							$results = $this->getImagesByCategory($categories, 0, $setting['ip_limit'],(int) Context::getContext()->language->id);
							$setting['images'] = $results;
						}
				 break;
			}
				 $setting['thickimage'] = $thickimage;
				 $setting['smallimage'] = $smallimage;

				 $output = array('type'=>'imageproduct','data' => $setting );

	      		 return $output;
		}
		//them
		public function getImageTypes(){
			$pimagetypes = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT tp.`id_image_type`,tp.`name`
			FROM `'._DB_PREFIX_.'image_type` tp
			WHERE tp.`products` = 1
			ORDER BY tp.`name` ASC');
			return $pimagetypes;
		}
		public function getImagesByProductId($productids, $start, $limit, $id_lang){
			$sql = 	'SELECT
			 					i.`id_image`,
								pl.`link_rewrite`
			 				FROM
			 					`'._DB_PREFIX_.'image` i
			 				LEFT JOIN `'._DB_PREFIX_.'image_lang` il ON(i.`id_image` = il.`id_image`)
			 				LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON(
			 					i.`id_product` = pl.`id_product`)';

			$sql .=			' WHERE
								i.`id_product` IN ('.$productids.')
			 				  AND il.`id_lang` =' .$id_lang.
							' AND pl.`id_lang` =' .$id_lang.
							' AND i.cover = 1
			 				  ORDER BY
								i.`position` ASC'
								.($limit > 0 ? ' LIMIT '.(int)$start.','.(int)$limit : '');
			 $results = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
			 return $results;

		}
		public static function getImagesByCategory($categories, $start, $limit, $id_lang, Context $context = null)
		{
			if (!$context)
				$context = Context::getContext();

			$front = true;
			if (!in_array($context->controller->controller_type, array('front', 'modulefront')))
				$front = false;			
			if (Group::isFeatureActive())
			{
				$groups = FrontController::getCurrentCustomerGroups();
				$sql_groups = 'AND cg.`id_group` '.(count($groups) ? 'IN ('.implode(',', $groups).')' : '= 1');
			}			
			$sql = 'SELECT
							i.`id_image`,
							pl.`link_rewrite`
					FROM
							`'._DB_PREFIX_.'image` i 
					INNER JOIN `'._DB_PREFIX_.'image_lang` il ON(i.`id_image` = il.`id_image`)
			 		INNER JOIN `'._DB_PREFIX_.'product_lang` pl ON(
			 					i.`id_product` = pl.`id_product`)
					INNER JOIN `'._DB_PREFIX_.'image_shop` ish ON (i.`id_image` = ish.`id_image`)';
			$sql .=	'WHERE
							i.`id_product` IN (	SELECT cp.`id_product`
												FROM `'._DB_PREFIX_.'category_product` cp
												'.(Group::isFeatureActive() ? 'INNER JOIN `'._DB_PREFIX_.'category_group` cg ON cp.`id_category` = cg.`id_category`' : '').'
												INNER JOIN `'._DB_PREFIX_.'category` c ON cp.`id_category` = c.`id_category`
												INNER JOIN `'._DB_PREFIX_.'product` p ON cp.`id_product` = p.`id_product`
												'.Shop::addSqlAssociation('product', 'p', false).'
												LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (p.`id_product` = pl.`id_product` '.Shop::addSqlRestrictionOnLang('pl').')
												WHERE c.`active` = 1
												AND product_shop.`active` = 1
												'.($front ? ' AND product_shop.`visibility` IN ("both", "catalog")' : '').'
												
												'.$sql_groups .
												' AND cp.id_category in ('.$categories . ')'.
												' AND pl.id_lang ='.$id_lang
												.')
			 		AND   il.`id_lang` =' .$id_lang.
						' AND pl.id_lang = '.$id_lang. 
						' AND pl.id_shop = '.$context->shop->id.
						' AND ish.id_shop = '.$context->shop->id.
			 			' AND ish.cover = 1
			 			  ORDER BY 
						i.`position` ASC' .($limit > 0 ? ' LIMIT '.(int)$start.','.(int)$limit : '') ;
			return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
		}

	}
?>