<?php /* Smarty version Smarty-3.1.17, created on 2015-04-25 21:59:02
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\front\Post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31456553bf2068e9665-85206268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e85460206801581e2f57fa06cdfb6caa09766dcc' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\front\\Post.tpl',
      1 => 1429817080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31456553bf2068e9665-85206268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_553bf206ac20e6_06281862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553bf206ac20e6_06281862')) {function content_553bf206ac20e6_06281862($_smarty_tpl) {?>
<!-- LOGO
============================================================================ -->
<div id="logo" class="container-fluid not-mobile">
    <div class="row">
        <img src="uploads/logo.jpg" alt="logo" />
    </div>
</div>




<!-- POST
============================================================================ -->
<div class="container-fluid no-padding">
    <div id="postCardContainer" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div id="postCard">
            <header class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="hooked"><?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
</h1>
                </div>
            </header>
            <div class="postContent">
                <div class="row postImage">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="uploads/logo.jpg" alt="img" />
                    </div>
                </div>
                <div class="mobilePostContent">
                    <div class="row postCardText">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <p><?php echo $_smarty_tpl->tpl_vars['post']->value->getText();?>
</p>
                        </div>
                    </div>
                    <footer class="row">
                        <div class="postCardDate col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <p class="flag"><?php echo $_smarty_tpl->tpl_vars['post']->value->getDate()->getDayOfMonth();?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->getDate()->getMonth();?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->getDate()->getYear();?>
</p>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
