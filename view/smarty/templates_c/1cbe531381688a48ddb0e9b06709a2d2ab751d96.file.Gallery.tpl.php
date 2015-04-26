<?php /* Smarty version Smarty-3.1.17, created on 2015-04-25 21:59:14
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\front\Gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15454553bf212223353-35051115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cbe531381688a48ddb0e9b06709a2d2ab751d96' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\front\\Gallery.tpl',
      1 => 1429820292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15454553bf212223353-35051115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_553bf2123405e1_73590584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553bf2123405e1_73590584')) {function content_553bf2123405e1_73590584($_smarty_tpl) {?>
<!-- LOGO
============================================================================ -->
<div id="logo" class="container-fluid not-mobile">
    <div class="row">
        <img src="uploads/logo.jpg" alt="logo" />
    </div>
</div>




<!-- GALLERY
============================================================================ -->
<div class="container-fluid no-padding">
    <div class="row sectionTitle only-mobile">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="hooked">Galleria</h1>
        </div>
    </div>
    <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
        <div class="imageContainer col-xs-3 col-sm-3 col-md-3 col-lg-2">
            <div class="image">
                <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->getURL();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->getName();?>
" />
            </div>
        </div>
    <?php } ?>
</div><?php }} ?>
