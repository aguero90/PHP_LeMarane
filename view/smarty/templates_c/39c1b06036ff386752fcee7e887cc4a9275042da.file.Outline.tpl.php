<?php /* Smarty version Smarty-3.1.17, created on 2015-05-22 16:01:25
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\back\Outline.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15397555f36b55bcb30-43258718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39c1b06036ff386752fcee7e887cc4a9275042da' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\back\\Outline.tpl',
      1 => 1431932065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15397555f36b55bcb30-43258718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_name' => 0,
    'sid' => 0,
    'contentTemplate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_555f36b5666af7_07720813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555f36b5666af7_07720813')) {function content_555f36b5666af7_07720813($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <!-- NOTA: bootstrap include già normalize.css quindi non c'è bisogno del reset -->
    <head>
        <!-- To ensure proper rendering and touch zooming -->
        <!-- maximum-scale=1, user-scalable=no <-- per far sì che l'utente non possa zoomare -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset=UTF-8>
        <title><?php echo $_smarty_tpl->tpl_vars['app_name']->value;?>
</title>

        <link rel="stylesheet" type="text/css" href="view/lib/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="view/lib/bootstrap/css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" type="text/css" href="view/lib/summernote/summernote.css"/>
        <link rel="stylesheet" type="text/css" href="view/lib/fontAwsome/css/font-awesome.css"/>
        <link rel="stylesheet" type="text/css" href="view/css/front.css"/>
    </head>
    <body>


        <div class="fillTheContainer container-fluid no-padding">
            <div class=" fullHeight row">

                <!-- LEFT COL
                ==================================================================== -->

                <div id="leftCol" class="col-xs-3 col-sm-2 col-md-2 col-lg-2">

                    <ul class="nav nav-pills nav-stacked">
                        <li <?php if (isset($_smarty_tpl->tpl_vars['sid']->value)&&$_smarty_tpl->tpl_vars['sid']->value==1) {?> class="active" <?php }?>><a href="?sid=1">News</a></li>
                        <li <?php if (isset($_smarty_tpl->tpl_vars['sid']->value)&&$_smarty_tpl->tpl_vars['sid']->value==2) {?> class="active" <?php }?>><a href="?sid=2">Immagini</a></li>
                        <li <?php if (isset($_smarty_tpl->tpl_vars['sid']->value)&&$_smarty_tpl->tpl_vars['sid']->value==3) {?> class="active" <?php }?>><a href="?sid=3">Amministratori</a></li>
                        <li><a href="index.php">Sito</a></li>
                    </ul>
                </div>




                <!-- BODY
                ==================================================================== -->
                <div id="outlineBodyBack" class="col-xs-9 col-sm-10 col-md-10 col-lg-10">
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['contentTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>

            </div>
        </div>


        <!-- JAVASCRIPT
        ==================================================================== -->
        <script type="text/javascript" src="view/lib/jQuery/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="view/lib/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="view/lib/summernote/summernote.js"></script>
        <script type="text/javascript" src="view/lib/summernote/summernote-it-IT.js"></script>
        <script type="text/javascript" src="view/js/MyCarousel.js"></script>
    </body>
</html><?php }} ?>
