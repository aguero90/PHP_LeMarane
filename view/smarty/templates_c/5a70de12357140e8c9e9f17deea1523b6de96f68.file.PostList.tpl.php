<?php /* Smarty version Smarty-3.1.17, created on 2015-04-26 08:25:16
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\front\PostList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8799553c84cc15d767-26350293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a70de12357140e8c9e9f17deea1523b6de96f68' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\front\\PostList.tpl',
      1 => 1429991423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8799553c84cc15d767-26350293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_553c84cc6a1329_29167845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553c84cc6a1329_29167845')) {function content_553c84cc6a1329_29167845($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\PHP_LeMarane\\lib\\Smarty-3.1.17\\libs\\plugins\\modifier.truncate.php';
?>
<!-- LOGO
============================================================================ -->
<div id="logo" class="container-fluid">
    <div class="row">
        <img src="uploads/logo.jpg" alt="logo" />
    </div>
</div>


<!-- NEWS LIST
============================================================================ -->
<div class="container-fluid no-padding with-margin">
    <div class="row sectionTitle only-mobile">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="hooked">Lista news</h1>
        </div>
    </div>
    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
        <div class="postContainer col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="post">
                <span class="only-mobile"><a href="index.php?sid=1&pid=<?php echo $_smarty_tpl->tpl_vars['post']->value->getID();?>
"></a></span>
                <header class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1 class="flag"><?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
</h1>
                    </div>
                </header>
                <div class="row postImage">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="uploads/logo.jpg" alt="img" />
                    </div>
                </div>
                <div class="row postText">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value->getText(),512," ... ");?>
</p>
                    </div>
                </div>
                <footer class="row">
                    <div class="postDate col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <p class="flag"><?php echo $_smarty_tpl->tpl_vars['post']->value->getDate()->getDayOfMonth();?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->getDate()->getMonth();?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->getDate()->getYear();?>
</p>
                    </div>
                    <div class="goToPost col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <a href="index.php?sid=1&pid=<?php echo $_smarty_tpl->tpl_vars['post']->value->getID();?>
" class="handlebarsButton">Leggi</a>
                    </div>
                </footer>
            </div>
        </div>
    <?php } ?>
</div>





<?php }} ?>
