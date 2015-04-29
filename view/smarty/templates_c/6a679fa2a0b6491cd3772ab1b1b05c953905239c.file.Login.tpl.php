<?php /* Smarty version Smarty-3.1.17, created on 2015-04-28 21:58:23
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\back\Login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13097553fe65fe5dbc2-62465361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a679fa2a0b6491cd3772ab1b1b05c953905239c' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\back\\Login.tpl',
      1 => 1430123632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13097553fe65fe5dbc2-62465361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_553fe65fedabc5_89577795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553fe65fedabc5_89577795')) {function content_553fe65fedabc5_89577795($_smarty_tpl) {?><!DOCTYPE html>
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
        <link rel="stylesheet" type="text/css" href="view/lib/myFormFramework/main.min.css"/>
        <link rel="stylesheet" type="text/css" href="view/css/front.css"/>
    </head>
    <body>

        <!-- BODY
        ==================================================================== -->
        <div id="outlineBody">

            <form class="form-horizontal" id="login" action="Admin.php" method="POST">

                <input type="hidden" name="sid" value="0" />

                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="required" autofocus="autofocus">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="handlebarsButton">Sign in</button>
                    </div>
                </div>

            </form>

        </div>


        <!-- JAVASCRIPT
        ==================================================================== -->
        <script type="text/javascript" src="view/lib/jQuery/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="view/lib/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="view/lib/myFormFramework/myFormFramework.min.js"></script>
    </body>
</html><?php }} ?>
