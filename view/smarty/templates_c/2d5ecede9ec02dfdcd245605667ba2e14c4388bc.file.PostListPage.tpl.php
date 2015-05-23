<?php /* Smarty version Smarty-3.1.17, created on 2015-05-23 10:54:09
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\front\PostListPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24153556040316a8b85-86621284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d5ecede9ec02dfdcd245605667ba2e14c4388bc' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\front\\PostListPage.tpl',
      1 => 1431878012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24153556040316a8b85-86621284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'itemsForPage' => 0,
    'postStructure' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55604031ac7682_48196381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55604031ac7682_48196381')) {function content_55604031ac7682_48196381($_smarty_tpl) {?>
<!-- NEWS LIST
============================================================================ -->
<div id="postListContainer" class="container-fluid no-padding with-margin">

    <div class="row sectionTitle only-mobile">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="hooked">Lista news</h1>
        </div>
    </div>

    <?php if (count($_smarty_tpl->tpl_vars['posts']->value)>0) {?>

        <div id="myCarousel" class="postListCarousel">
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

                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['postStructure']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <?php if ($_smarty_tpl->tpl_vars['post']->iteration%$_smarty_tpl->tpl_vars['itemsForPage']->value===0||$_smarty_tpl->tpl_vars['post']->last) {?>
                            <!-- Se ho appena stampato l'ultima riga, chiudo la tabella -->
                        </div>
                    <?php }?>
                <?php } ?>
            </div> <!-- /#carouselSlider -->
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['pagination']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div><!-- /#newsCarousel -->

    <?php } else { ?>
        <div class="noContentFront">
            <p>
                <span>Oops...</span>
                In questo momento non sono presenti news :(
            </p>
        </div>
    <?php }?>


</div>


<script>
    window.addEventListener("load", function () {

        if (document.getElementById("paginationContainer")) {

            // se non esiste la paginazione è inutile avviare lo script
            // "sparagnamo" xD
            document.getElementById("myCarousel").myCarousel();
        }


    });
</script>





<?php }} ?>
