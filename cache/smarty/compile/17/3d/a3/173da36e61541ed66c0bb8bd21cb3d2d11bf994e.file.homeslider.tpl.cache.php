<?php /* Smarty version Smarty-3.1.19, created on 2016-03-10 18:05:02
         compiled from "T:\home\stamp-expert.ru\www\themes\theme948\modules\homeslider\homeslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1935856e17f0d687bc1-54926358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '173da36e61541ed66c0bb8bd21cb3d2d11bf994e' => 
    array (
      0 => 'T:\\home\\stamp-expert.ru\\www\\themes\\theme948\\modules\\homeslider\\homeslider.tpl',
      1 => 1457301367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1935856e17f0d687bc1-54926358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'homeslider_slides' => 0,
    'slide' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56e17f0d819ad1_27373728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e17f0d819ad1_27373728')) {function content_56e17f0d819ad1_27373728($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
    <!-- Module HomeSlider -->
    <?php if (isset($_smarty_tpl->tpl_vars['homeslider_slides']->value)) {?>
        <div id="homepage-slider">
            <ul id="homeslider">
                <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['slide']->value['active']) {?>
                        <li class="homeslider-container ">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)@constant('_MODULE_DIR_'))."homeslider/images/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
"<?php if (isset($_smarty_tpl->tpl_vars['slide']->value['size'])&&$_smarty_tpl->tpl_vars['slide']->value['size']) {?> <?php echo $_smarty_tpl->tpl_vars['slide']->value['size'];?>
<?php } else { ?> width="100%" height="100%"<?php }?> alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
                            </a>
                            <?php if (isset($_smarty_tpl->tpl_vars['slide']->value['description'])&&trim($_smarty_tpl->tpl_vars['slide']->value['description'])!='') {?>
                                <div class="homeslider-description "><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div>
                            <?php }?>
                        </li>
                    <?php }?>
                <?php } ?>
            </ul>
        </div>
    <?php }?>
    <!-- /Module HomeSlider -->
<?php }?><?php }} ?>
