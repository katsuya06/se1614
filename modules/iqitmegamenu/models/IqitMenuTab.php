<?php
/*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class IqitMenuTab extends ObjectModel
{
	public $menu_type;
	public $active;
	public $active_label;
	public $position;
	public $url_type;	
	public $id_url;
	public $icon_type;
	public $icon_class;
	public $icon;
	public $legend_icon;
	public $new_window;
	public $float;

	//submenu
	public $submenu_type;
	public $submenu_width;
	public $submenu_bg_color;
	public $submenu_image;
	public $submenu_repeat;
	public $submenu_bg_position;
	public $submenu_link_color;
	public $submenu_hover_color;
	public $submenu_content;

	public $submenu_title_color;
	public $submenu_title_colorh;
	public $submenu_titleb_color;
	public $submenu_border_t;
	public $submenu_border_r;
	public $submenu_border_b;
	public $submenu_border_l;
	public $submenu_border_i;

	//lang
	public $title;
	public $label;
	public $url;
	
	//colors
	public $bg_color;
	public $txt_color;
	public $h_bg_color;
	public $h_txt_color;
	public $labelbg_color;
	public $labeltxt_color;

	
	

	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'iqitmegamenu_tabs',
		'primary' => 'id_tab',
		'multilang' => true,
		'fields' => array(
			'menu_type'	=>		array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
			'active' 	=>		array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
			'active_label' 	=>		array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
			'position'	=>		array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
			'url_type'	=>		array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
			'id_url'	=>		array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'icon_type'	=>		array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
			'icon_class'	=>		array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'legend_icon'	=>		array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'icon' 		=>		array('type' => self::TYPE_STRING,  'validate' => 'isCleanHtml', 'size' => 255),
			'new_window' =>		array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
			'float' =>			array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),

			//submenu
			'submenu_content' => array('type' => self::TYPE_STRING),
			'submenu_type' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
			'submenu_width' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
			'submenu_bg_color'		=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'submenu_image'		=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'submenu_repeat'		=>	array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
			'submenu_bg_position'		=>	array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
			'submenu_link_color'		=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'submenu_hover_color'		=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),

			'submenu_title_color'		=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'submenu_title_colorh'		=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'submenu_titleb_color'		=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'submenu_border_t'		=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'submenu_border_r'		=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'submenu_border_b'		=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'submenu_border_l'		=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'submenu_border_i'		=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),

			// colors
			'bg_color'		=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'txt_color'		=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'h_bg_color'		=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'h_txt_color'		=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'labelbg_color'	=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			'labeltxt_color'=>	array('type' => self::TYPE_STRING, 'validate' => 'isString'),
			
			// Lang fields
			'title' =>			array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'required' => true, 'size' => 255),
			'label' =>			array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 255),
			'url' 	=>			array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isUrl', 'size' => 255),
			
		)
	);

	public	function __construct($id_menu = null, $id_lang = null, $id_shop = null, Context $context = null)
	{
		parent::__construct($id_menu, $id_lang, $id_shop);
	}

	public function add($autodate = true, $null_values = false)
	{
		
		$context = Context::getContext();
		$id_shop = $context->shop->id;

		$res = parent::add($autodate, $null_values);
		$res &= Db::getInstance()->execute('
			INSERT INTO `'._DB_PREFIX_.'iqitmegamenu` (`id_shop`, `id_tab`)
			VALUES('.(int)$id_shop.', '.(int)$this->id.')'
		);
		return $res;
	
	}

	public function delete()
	{
		
		$res = true;

		$tab = new IqitMenuTab((int)$this->id);

		$res &= $this->reOrderPositions($tab->menu_type);

		$res &= Db::getInstance()->execute('
			DELETE FROM `'._DB_PREFIX_.'iqitmegamenu`
			WHERE `id_tab` = '.(int)$this->id
		);

		$res &= parent::delete();
		return $res;
	}

	public function associateToShop($id_shops)
	{
		if (!$this->id)
			return;
		if (!is_array($id_shops))
			$id_shops = array($id_shops);
		$data = array();
		foreach ($id_shops as $id_shop)
		{	
				$data[] = array(
					$this->def['primary'] => (int)$this->id,
					'id_shop' => (int)$id_shop,
				);
		}
		if ($data)
			return Db::getInstance()->insert('iqitmegamenu', $data);
		return true;
	}



	public static function getTabs($menu_type)
	{
		$context = Context::getContext();
		$id_shop = $context->shop->id;
		$id_lang = $context->language->id;

		return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT hs.`id_tab` as id_tab, hssl.`title`, hss.`position`
			FROM '._DB_PREFIX_.'iqitmegamenu hs
			LEFT JOIN '._DB_PREFIX_.'iqitmegamenu_tabs hss ON (hs.id_tab = hss.id_tab)
			LEFT JOIN '._DB_PREFIX_.'iqitmegamenu_tabs_lang hssl ON (hss.id_tab = hssl.id_tab)
			WHERE id_shop = '.(int)$id_shop.' AND menu_type = '.(int)$menu_type.'
			AND hssl.id_lang = '.(int)$id_lang.'
			ORDER BY hss.position'
		);
	}

	public static function getTabsFrontend($menu_type, $css_generator)
	{
		$context = Context::getContext();
		$id_shop = $context->shop->id;
		$id_lang = $context->language->id;



		return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT hs.`id_tab` as id_tab, hssl.`title`, hssl.`label`, hssl.`url`,
			hss.`position`,  hss.`active_label`, hss.`url_type`, hss.`id_url`, hss.`icon_type`, hss.`icon_class`, hss.`icon`, hss.`legend_icon`,
			hss.`new_window`, hss.`float`, hss.`submenu_type`, hss.`submenu_content`, hss.`submenu_width` 
			'.($css_generator ? ', hss.`bg_color`, hss.`txt_color`,  hss.`h_bg_color`, hss.`h_txt_color`, hss.`labelbg_color`, hss.`labeltxt_color`, hss.`submenu_bg_color`, hss.`submenu_image`, hss.`submenu_repeat`, hss.`submenu_bg_position`,
			hss.`submenu_link_color`, hss.`submenu_hover_color`, hss.`submenu_link_color`, hss.`submenu_hover_color`, hss.`submenu_title_color`, hss.`submenu_title_colorh`, hss.`submenu_titleb_color`, hss.`submenu_border_t`, hss.`submenu_border_r`, hss.`submenu_border_b`, hss.`submenu_border_l`, hss.`submenu_border_i` ' : '').'
			FROM '._DB_PREFIX_.'iqitmegamenu hs
			LEFT JOIN '._DB_PREFIX_.'iqitmegamenu_tabs hss ON (hs.id_tab = hss.id_tab)
			LEFT JOIN '._DB_PREFIX_.'iqitmegamenu_tabs_lang hssl ON (hss.id_tab = hssl.id_tab)
			WHERE id_shop = '.(int)$id_shop.' AND menu_type = '.(int)$menu_type.' AND active = 1
			AND hssl.id_lang = '.(int)$id_lang.'
			ORDER BY hss.position'
		);
	}

	public static function getNextPosition($menu_type)
	{	
		$context = Context::getContext();
		$id_shop = $context->shop->id;

		$row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('
			SELECT MAX(hss.`position`) AS `next_position`
			FROM `'._DB_PREFIX_.'iqitmegamenu_tabs` hss, `'._DB_PREFIX_.'iqitmegamenu` hs
			WHERE hss.`id_tab` = hs.`id_tab` AND hss.`menu_type` = '.(int)$menu_type.' AND hs.`id_shop` = '.(int)$id_shop
		);

		return (++$row['next_position']);
	}

	public static function tabExists($id_tab)
	{
		$req = 'SELECT hs.`id_tab` as id_tab
				FROM `'._DB_PREFIX_.'iqitmegamenu` hs
				WHERE hs.`id_tab` = '.(int)$id_tab;
		$row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($req);

		return ($row);
	}

	public function reOrderPositions($menu_type)
	{
		$id_tab = $this->id;
		$context = Context::getContext();
		$id_shop = $context->shop->id;

		$max = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT MAX(hss.`position`) as position
			FROM `'._DB_PREFIX_.'iqitmegamenu_tabs` hss, `'._DB_PREFIX_.'iqitmegamenu` hs
			WHERE hss.`id_tab` = hs.`id_tab` AND hss.`menu_type` = '.(int)$menu_type.' AND hs.`id_shop` = '.(int)$id_shop
		);

		if ((int)$max == (int)$id_tab)
			return true;

		$rows = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT hss.`position` as position, hss.`id_tab` as id_tab
			FROM `'._DB_PREFIX_.'iqitmegamenu_tabs` hss
			LEFT JOIN `'._DB_PREFIX_.'iqitmegamenu` hs ON (hss.`id_tab` = hs.`id_tab`)
			WHERE hs.`id_shop` = '.(int)$id_shop.' AND hss.`menu_type` = '.(int)$menu_type.' AND hss.`position` > '.(int)$this->position
		);

		foreach ($rows as $row)
		{
			$current_tab = new IqitMenuTab($row['id_tab']);
			--$current_tab->position;
			$current_tab->update();
			unset($current_tab);
		}

		return true;
	}




}
