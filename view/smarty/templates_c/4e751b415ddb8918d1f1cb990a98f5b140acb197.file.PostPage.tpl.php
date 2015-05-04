<?php /* Smarty version Smarty-3.1.17, created on 2015-05-04 20:53:18
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\front\PostPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:288595547c01e45be22-21588668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e751b415ddb8918d1f1cb990a98f5b140acb197' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\front\\PostPage.tpl',
      1 => 1430762451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288595547c01e45be22-21588668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5547c01e778c34_25819800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5547c01e778c34_25819800')) {function content_5547c01e778c34_25819800($_smarty_tpl) {?>
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
            <div class="row postImage">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value->getImage()->getFakeName();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value->getImage()->getRealName();?>
" />
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
</div><?php }} ?>
