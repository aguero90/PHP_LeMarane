<?php /* Smarty version Smarty-3.1.17, created on 2015-05-04 20:53:18
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\front\Menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:324375547c01e258425-92452301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '422dc0c7f9862e1e89c9be6941c235131541c319' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\front\\Menu.tpl',
      1 => 1430745903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324375547c01e258425-92452301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5547c01e3e6b28_72786795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5547c01e3e6b28_72786795')) {function content_5547c01e3e6b28_72786795($_smarty_tpl) {?>
<!-- MENU'
============================================================================ -->
<nav id="outlineMenu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <span id="brandIcon" class="fa fa-html5 fa-2x"></span>
        </div>

        <div class="collapse navbar-collapse" id="bs-navbar-collapse">

            <ul class="nav navbar-nav">
                <li <?php if (isset($_smarty_tpl->tpl_vars['sid']->value)&&$_smarty_tpl->tpl_vars['sid']->value==1) {?>class="active"<?php }?> >
                    <a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                </li>
                <li <?php if (isset($_smarty_tpl->tpl_vars['sid']->value)&&$_smarty_tpl->tpl_vars['sid']->value==2) {?>class="active"<?php }?> >
                    <a href="index.php?sid=3"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Gallery</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div> <!-- /container -->
</nav><?php }} ?>
