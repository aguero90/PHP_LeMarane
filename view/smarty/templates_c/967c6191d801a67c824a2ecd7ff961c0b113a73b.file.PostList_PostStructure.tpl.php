<?php /* Smarty version Smarty-3.1.17, created on 2015-05-08 09:47:12
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\front\PostList_PostStructure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22261554c6a00c7dbf3-47878105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '967c6191d801a67c824a2ecd7ff961c0b113a73b' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\front\\PostList_PostStructure.tpl',
      1 => 1431014485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22261554c6a00c7dbf3-47878105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_554c6a011cf606_59410521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c6a011cf606_59410521')) {function content_554c6a011cf606_59410521($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\PHP_LeMarane\\lib\\smarty\\libs\\plugins\\modifier.truncate.php';
?>
<div class="postContainer col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <div class="post">
        <span class="only-mobile">
            <a href="index.php?sid=1&pid=<?php echo $_smarty_tpl->tpl_vars['post']->value->getID();?>
">
                <span class="fa fa-angle-right"></span>
            </a>
        </span>
        <header class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1 class="flag"><?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
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
        <div class="row postText">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div><?php echo smarty_modifier_truncate(mb_convert_encoding($_smarty_tpl->tpl_vars['post']->value->getText(), 'UTF-8', 'HTML-ENTITIES'),512," ... ");?>
</div>
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
</div><?php }} ?>
