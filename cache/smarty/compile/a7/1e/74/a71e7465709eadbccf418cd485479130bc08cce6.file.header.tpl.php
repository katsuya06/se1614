<?php /* Smarty version Smarty-3.1.19, created on 2016-02-21 21:46:29
         compiled from "T:\home\stamp-expert.ru\www\themes\warehouse\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1613856c9f7f69a2c26-22377195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a71e7465709eadbccf418cd485479130bc08cce6' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\warehouse\\header.tpl',
      1 => 1456073975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1613856c9f7f69a2c26-22377195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_code' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'js_defer' => 0,
    'js_files' => 0,
    'js_def' => 0,
    'js_uri' => 0,
    'HOOK_HEADER' => 0,
    'warehouse_vars' => 0,
    'font' => 0,
    'shop_name' => 0,
    'page_name' => 0,
    'have_image' => 0,
    'product' => 0,
    'cover' => 0,
    'link' => 0,
    'img_ps_dir' => 0,
    'body_classes' => 0,
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'content_only' => 0,
    'lang_iso' => 0,
    'is_logged' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'HOOK_TOP' => 0,
    'left_column_size' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'right_column_size' => 0,
    'cols' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56c9f7f7a726a8_55992634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56c9f7f7a726a8_55992634')) {function content_56c9f7f7a726a8_55992634($_smarty_tpl) {?><?php if (!is_callable('smarty_function_implode')) include 'T:\\home\\stamp-expert.ru\\www\\tools\\smarty\\plugins\\function.implode.php';
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7"<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8"<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9"<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<html<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
	<head>
		<meta charset="utf-8" />
		<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
		<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value) {?>
			<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value) {?>
			<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php }?>
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)) {?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value) {?>no<?php }?>follow" />
		<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
		<meta name="apple-mobile-web-app-capable" content="yes" /> 
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
				<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['css_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['media']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			<?php } ?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['js_defer']->value)&&!$_smarty_tpl->tpl_vars['js_defer']->value&&isset($_smarty_tpl->tpl_vars['js_files']->value)&&isset($_smarty_tpl->tpl_vars['js_def']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['js_def']->value;?>

			<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
			<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"></script>
			<?php } ?>
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>


		<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['font_include'])) {?>
			<?php  $_smarty_tpl->tpl_vars['font'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['font']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warehouse_vars']->value['font_include']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['font']->key => $_smarty_tpl->tpl_vars['font']->value) {
$_smarty_tpl->tpl_vars['font']->_loop = true;
?>
				<link rel="stylesheet" href="http<?php if (Tools::usingSecureMode()) {?>s<?php }?>://<?php echo $_smarty_tpl->tpl_vars['font']->value;?>
" type="text/css" media="all" />
			<?php } ?>
		<?php }?>

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<meta property="og:title" content="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
		<meta property="og:url" content="http://<?php echo $_SERVER['HTTP_HOST'];?>
<?php echo $_SERVER['REQUEST_URI'];?>
"/>
		<meta property="og:site_name" content="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
		
		<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
		<meta property="og:type" content="product">
		<?php if (isset($_smarty_tpl->tpl_vars['have_image']->value)) {?>
		<?php if ($_smarty_tpl->tpl_vars['have_image']->value[0]) {?><meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default');?>
"><?php }?>
		<?php } else { ?>
		<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
logo.jpg" />
		<?php }?>
		<?php } else { ?>
		<meta property="og:type" content="website">
		<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
logo.jpg" />
		<?php }?>
	</head>
	<body<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="<?php if (!isset($_smarty_tpl->tpl_vars['page_name']->value)||(isset($_smarty_tpl->tpl_vars['page_name']->value)&&$_smarty_tpl->tpl_vars['page_name']->value!='index')) {?>not-index <?php }?><?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['body_classes']->value)&&count($_smarty_tpl->tpl_vars['body_classes']->value)) {?> <?php echo smarty_function_implode(array('value'=>$_smarty_tpl->tpl_vars['body_classes']->value,'separator'=>' '),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value) {?> hide-left-column<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value) {?> hide-right-column<?php }?><?php if (!$_smarty_tpl->tpl_vars['hide_left_column']->value) {?> show-left-column<?php }?><?php if (!$_smarty_tpl->tpl_vars['hide_right_column']->value) {?> show-right-column<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['content_only']->value)&&$_smarty_tpl->tpl_vars['content_only']->value) {?> content_only<?php }?> lang_<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
  <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['is_rtl'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['is_rtl']) {?> is_rtl<?php }?> 	<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?> isLogged<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style']==1) {?> is-sidebar-header<?php }?>">
	<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['preloader'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['preloader']) {?>
	<div id="preloader">
	<div id="status">&nbsp;</div>
	</div>
	<?php }?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'freeFblock'),$_smarty_tpl);?>

	<?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value) {?>
	<div id="restricted-country">
		<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['geolocation_country']->value)&&$_smarty_tpl->tpl_vars['geolocation_country']->value) {?> <span class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['geolocation_country']->value, ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></p>
	</div>
	<?php }?>

	<div id="page">
		<div class="header-container<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style'])) {?><?php if ($_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style']==1) {?> sidebar-header<?php } elseif ($_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style']==2) {?> inline-header<?php }?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['cart_style'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['cart_style']==1) {?> alt-cart<?php }?>">
			<header id="header">
		
			
						<div class="banner">
					<div class="container">
						<div class="row">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBanner"),$_smarty_tpl);?>

						</div>
					</div>
				</div>
					<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['top_width'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['top_width']==1&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['top_bar']) {?>
				<div class="nav">
					<div class="container">
						<div class="row">
							<nav>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayNav"),$_smarty_tpl);?>

								<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

								<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlist'),$_smarty_tpl);?>
" class="wishlist_top_link pull-right"><i class="icon-heart-empty"></i>  <?php echo smartyTranslate(array('s'=>'My wishlist'),$_smarty_tpl);?>
</a>
							</nav>
						</div>
					</div>
				</div>
				<?php }?>
				<div>
					<div class="container container-header">
										<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['top_width'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['top_width']==0&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['top_bar']) {?>
				<div class="nav">
						<div class="row">
							<nav>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayNav"),$_smarty_tpl);?>

								<?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

								<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlist'),$_smarty_tpl);?>
" class="wishlist_top_link pull-right"><i class="icon-heart-empty"></i>  <?php echo smartyTranslate(array('s'=>'My wishlist'),$_smarty_tpl);?>
</a>
							</nav>
						</div>
					
				</div>
				<?php }?>
			
					<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style']==2) {?>
					<div class="row">
					<div class="inline-table">
					<div class="inline-row">
					<div id="header_logo" class="col-xs-12 inline-cell">

						<a href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
							<img class="logo img-responsive replace-2xlogo" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['retina_logo'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['retina_logo']) {?>data-retinalogo="<?php echo $_smarty_tpl->tpl_vars['warehouse_vars']->value['retina_logo'];?>
" <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['logo_image_width']->value)&&$_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['logo_image_height']->value)&&$_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?> alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
						</a>
					</div> 
					<div class="inline-cell display-menu">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'iqitMegaMenu'),$_smarty_tpl);?>

					</div>
					<div class="displayTop inline-cell">
						<?php if (isset($_smarty_tpl->tpl_vars['HOOK_TOP']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>
<?php }?>
					</div>
					</div>
					</div>
					</div>
					<?php } else { ?>
					<div class="row">
					<div id="header_logo" class="col-xs-12 col-sm-<?php echo 4+$_smarty_tpl->tpl_vars['warehouse_vars']->value['logo_width'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['logo_position'])&&!$_smarty_tpl->tpl_vars['warehouse_vars']->value['logo_position']) {?> col-sm-push-<?php echo 4-$_smarty_tpl->tpl_vars['warehouse_vars']->value['logo_width']/2;?>
 centered-logo  <?php }?>">

						<a href="<?php if ($_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
							<img class="logo img-responsive replace-2xlogo" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['retina_logo'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['retina_logo']) {?>data-retinalogo="<?php echo $_smarty_tpl->tpl_vars['warehouse_vars']->value['retina_logo'];?>
" <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['logo_image_width']->value)&&$_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['logo_image_height']->value)&&$_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?> alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
						</a>
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['HOOK_TOP']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>
<?php }?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'iqitMegaMenu'),$_smarty_tpl);?>

					</div>
					<?php }?>

				
					</div>
				</div>
				<div class="fw-pseudo-wrapper"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'maxHeader'),$_smarty_tpl);?>
 	</div>
			<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['header_style']==1) {?>
				<div class="sidebar-footer">
				<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['footer_img_src'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['footer_img_src']) {?><div class="paymants_logos col-xs-12"><img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['warehouse_vars']->value['image_path']), ENT_QUOTES, 'UTF-8', true);?>
" alt="footerlogo" /></div><?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['copyright_text'])) {?><div class="col-xs-12 cpr-txt"> <?php echo $_smarty_tpl->tpl_vars['warehouse_vars']->value['copyright_text'];?>
  </div><?php }?>
             		 
             	</div>
             <?php }?>

			</header>

			<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
			<div class="fw-pseudo-wrapper fw-pseudo-wrapper-slider">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayTopColumn"),$_smarty_tpl);?>

			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'maxSlideshow'),$_smarty_tpl);?>
 
		</div>
			<?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='pagenotfound') {?><?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['breadcrumb_width'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['breadcrumb_width']==0) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php }?>
		<div class="columns-container">
			<div id="columns" class="container">


				
				<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='pagenotfound') {?>
				<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['breadcrumb_width'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['breadcrumb_width']==1) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
				<?php }?>
								<div class="fw-pseudo-wrapper">
				<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'maxInfos'),$_smarty_tpl);?>
 
				<?php }?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'maxInfos2'),$_smarty_tpl);?>
 
				
					</div>
				<div class="row content-inner">
					<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['left_on_phones'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['left_on_phones']==0) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['left_column_size']->value)) {?>
					<div id="left_column" class="column col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['left_column_size']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>
</div>
					<?php }?>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&isset($_smarty_tpl->tpl_vars['right_column_size']->value)) {?><?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable((12-$_smarty_tpl->tpl_vars['left_column_size']->value-$_smarty_tpl->tpl_vars['right_column_size']->value), null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable(12, null, 0);?><?php }?>
					<div id="center_column" class="center_column col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['cols']->value);?>
 <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['left_on_phones'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['left_on_phones']==1) {?> col-sm-push-<?php echo intval($_smarty_tpl->tpl_vars['left_column_size']->value);?>
<?php }?>">
						<?php }?><?php }} ?>
