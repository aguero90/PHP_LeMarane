<?php /* Smarty version Smarty-3.1.17, created on 2015-04-20 21:43:09
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\front\PostList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29255553556b5c74f17-13621342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a70de12357140e8c9e9f17deea1523b6de96f68' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\front\\PostList.tpl',
      1 => 1429558987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29255553556b5c74f17-13621342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_553556b5e88312_90778164',
  'variables' => 
  array (
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553556b5e88312_90778164')) {function content_553556b5e88312_90778164($_smarty_tpl) {?>
<!-- LOGO
============================================================================ -->
<div id="logo" class="container-fluid">
    <div class="row">
        <img src="uploads/logo.jpg" alt="logo" />
    </div>
</div>


<!-- NEWS LIST
============================================================================ -->
<div class="container-fluid no-padding">
    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
        <div class="post col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <span class="only-mobile"><a href="index.php?sid=1&pid=<?php echo $_smarty_tpl->tpl_vars['post']->value->getID();?>
"></a></span>
            <header class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1><?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
</h1>
                </div>
            </header>
            <div class="row postText">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p><?php echo $_smarty_tpl->tpl_vars['post']->value->getText();?>
</p>
                </div>
            </div>
            <footer class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p><?php echo $_smarty_tpl->tpl_vars['post']->value->getDate()->toString();?>
</p>
                </div>
                <div class="goToPost col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <a href="index.php?sid=1&pid=<?php echo $_smarty_tpl->tpl_vars['post']->value->getID();?>
">Leggi</a>
                </div>
            </footer>
        </div>
    <?php } ?>
</div>





<?php }} ?>
