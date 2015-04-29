<?php /* Smarty version Smarty-3.1.17, created on 2015-04-26 20:53:02
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\back\Dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9424553d340e1c9819-13205266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23d7713d287b2d7e87a411c542bac67f144b90d4' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\back\\Dashboard.tpl',
      1 => 1429988808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9424553d340e1c9819-13205266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'news' => 0,
    'images' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_553d340e28cd19_43477991',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d340e28cd19_43477991')) {function content_553d340e28cd19_43477991($_smarty_tpl) {?>
<!-- DASHBOARD
============================================================================ -->
<div class="container-fluid no-padding">
    <div class="row">

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="newsCount">
                <p>
                    News <span><?php echo count($_smarty_tpl->tpl_vars['news']->value);?>
</span>
                </p>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="imagesCount">
                Immagini <span><?php echo count($_smarty_tpl->tpl_vars['images']->value);?>
</span>
            </div>
        </div>

    </div>
</div><?php }} ?>
