<?php /* Smarty version Smarty-3.1.17, created on 2015-05-02 16:05:52
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\front\Body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:293575544d9c079f793-62804250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '216cecf57b3dd72eb49f897aafa30fed33cc36ca' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\front\\Body.tpl',
      1 => 1430574648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293575544d9c079f793-62804250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo' => 0,
    'contentTemplate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5544d9c0830038_93091661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544d9c0830038_93091661')) {function content_5544d9c0830038_93091661($_smarty_tpl) {?>
<!-- BODY
============================================================================ -->
<div id="outlineBody">
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['logo']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['contentTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><?php }} ?>
