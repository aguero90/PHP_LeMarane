<?php /* Smarty version Smarty-3.1.17, created on 2015-04-20 21:43:12
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\front\Post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25575553556d0b21ab5-61463887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e85460206801581e2f57fa06cdfb6caa09766dcc' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\front\\Post.tpl',
      1 => 1429516932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25575553556d0b21ab5-61463887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_553556d0e2b041_30228808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553556d0e2b041_30228808')) {function content_553556d0e2b041_30228808($_smarty_tpl) {?>Post.tpl

<div id="postCard">
    <header>
        <h1><?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
</h1>
    </header>
    <div>
        <p><?php echo $_smarty_tpl->tpl_vars['post']->value->getText();?>
</p>
    </div>
    <footer>
        <p><?php echo $_smarty_tpl->tpl_vars['post']->value->getDate()->toString();?>
</p>
    </footer>
</div>

<div id="comments">
    <header>
        <h1>Commenti</h1>
    </header>

    <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value->getComments(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
        <div class="post">
            <header>
                <h1><?php echo $_smarty_tpl->tpl_vars['comment']->value->getAuthor();?>
</h1>
            </header>
            <div>
                <p><?php echo $_smarty_tpl->tpl_vars['comment']->value->getText();?>
</p>
            </div>
            <footer>
                <p><?php echo $_smarty_tpl->tpl_vars['comment']->value->getDate()->toString();?>
</p>
            </footer>
        </div>
    <?php } ?>
</div>

<div id="insertComment">
    Form inserimento commento
</div><?php }} ?>
