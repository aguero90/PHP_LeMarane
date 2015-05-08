<?php /* Smarty version Smarty-3.1.17, created on 2015-05-08 09:47:12
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\front\Outline.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28729554c6a004b58f3-26603842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '996542f014898edc0c62d6394a5085e0df9b07f8' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\front\\Outline.tpl',
      1 => 1430751777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28729554c6a004b58f3-26603842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_name' => 0,
    'menu' => 0,
    'logo' => 0,
    'contentTemplate' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_554c6a0068a4f0_61672151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c6a0068a4f0_61672151')) {function content_554c6a0068a4f0_61672151($_smarty_tpl) {?><!DOCTYPE html>
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
        <link rel="stylesheet" type="text/css" href="view/lib/animate/animate.css"/>
        <link rel="stylesheet" type="text/css" href="view/lib/fontAwsome/css/font-awesome.css"/>
        <link rel="stylesheet" type="text/css" href="view/css/front.css"/>
    </head>
    <body>


        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['menu']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <!-- BODY -->
        <div id="outlineBody">
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['logo']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['contentTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>

        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




        <!-- JAVASCRIPT
        ==================================================================== -->
        <script type="text/javascript" src="view/lib/jQuery/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="view/lib/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="view/js/MyCarousel.js"></script>
        <script type="text/javascript" src="view/js/MySlider.js"></script>

        <script>



            window.addEventListener("load", function () {

                var slider = document.getElementById("mySliderWrap");

                if (slider) {

                    slider.mySlider();
                }
            });
        </script>
    </body>
</html><?php }} ?>
