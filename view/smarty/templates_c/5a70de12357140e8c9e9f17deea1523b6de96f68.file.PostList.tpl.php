<?php /* Smarty version Smarty-3.1.17, created on 2015-05-02 15:42:04
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\front\PostList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211225544d42c284113-15802493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a70de12357140e8c9e9f17deea1523b6de96f68' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\front\\PostList.tpl',
      1 => 1430569839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211225544d42c284113-15802493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'itemsForPage' => 0,
    'post' => 0,
    'numberOfPages' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5544d42caae072_04555126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544d42caae072_04555126')) {function content_5544d42caae072_04555126($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\PHP_LeMarane\\lib\\Smarty-3.1.17\\libs\\plugins\\modifier.truncate.php';
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
<div id="postListContainer" class="container-fluid no-padding with-margin">
    <div class="row sectionTitle only-mobile">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="hooked">Lista news</h1>
        </div>
    </div>

    <div id="newsCarousel">

        <div id="carouselSlider">

            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['post']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['post']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['post']->iteration++;
 $_smarty_tpl->tpl_vars['post']->last = $_smarty_tpl->tpl_vars['post']->iteration === $_smarty_tpl->tpl_vars['post']->total;
?>

                <?php if ($_smarty_tpl->tpl_vars['post']->iteration%$_smarty_tpl->tpl_vars['itemsForPage']->value===1) {?>
                    <!-- Se è il primo della nuova pagina, ricreo la tabella -->

                    <div id="page<?php echo (($_smarty_tpl->tpl_vars['post']->iteration-1)/$_smarty_tpl->tpl_vars['itemsForPage']->value)+1;?>
" class="page" data-number="<?php echo (($_smarty_tpl->tpl_vars['post']->iteration-1)/$_smarty_tpl->tpl_vars['itemsForPage']->value)+1;?>
">

                    <?php }?>

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
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['post']->value->getImage()->getFakeName();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value->getImage()->getRealName();?>
" />
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

                    <?php if ($_smarty_tpl->tpl_vars['post']->iteration%$_smarty_tpl->tpl_vars['itemsForPage']->value===0||$_smarty_tpl->tpl_vars['post']->last) {?>
                        <!-- Se ho appena stampato l'ultima riga, chiudo la tabella -->
                    </div>
                <?php }?>
            <?php } ?>

        </div> <!-- /#carouselSlider -->

        <!-- PAGINAZIONE -->
        <?php if ($_smarty_tpl->tpl_vars['numberOfPages']->value>1) {?>
            <div class="row not-mobile">
                <nav id="paginationContainer">
                    <ul class="pagination">
                        <li id="goToPreviousPage">
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>

                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['numberOfPages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['numberOfPages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>

                            <li class="paginationItem <?php if ($_smarty_tpl->tpl_vars['i']->value===1) {?>active<?php }?>" data-number="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                <a href="#" ><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                            </li>

                        <?php }} ?>

                        <li id="goToNextPage">
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        <?php }?>

    </div><!-- /#newsCarousel -->
</div>


<script>
    window.addEventListener("load", function () {

        if (document.getElementById("paginationContainer")) {

            // se non esiste la paginazione è inutile avviare lo script
            // "sparagnamo" xD
            document.getElementById("newsCarousel").myCarousel();
        }


    });
</script>





<?php }} ?>
