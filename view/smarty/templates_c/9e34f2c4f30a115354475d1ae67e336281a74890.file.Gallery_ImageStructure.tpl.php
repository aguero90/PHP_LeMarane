<?php /* Smarty version Smarty-3.1.17, created on 2015-05-04 19:55:53
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\front\Gallery_ImageStructure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:274855547b2a9ee5b10-71397035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e34f2c4f30a115354475d1ae67e336281a74890' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\front\\Gallery_ImageStructure.tpl',
      1 => 1430574963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274855547b2a9ee5b10-71397035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'i' => 0,
    'itemsForPage' => 0,
    'j' => 0,
    'images' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5547b2aa151210_38070635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5547b2aa151210_38070635')) {function content_5547b2aa151210_38070635($_smarty_tpl) {?>
<div class="imageContainer" >
    <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value]->getFakeName();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value]->getRealName();?>
" />
    <div class="description not-mobile">
        <p>
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            clicca per ingrandire
        </p>
    </div>
</div><?php }} ?>
