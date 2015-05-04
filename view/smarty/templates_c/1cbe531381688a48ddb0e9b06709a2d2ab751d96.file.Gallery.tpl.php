<?php /* Smarty version Smarty-3.1.17, created on 2015-05-02 15:42:01
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\front\Gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131565544d429b2a5d0-62757633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cbe531381688a48ddb0e9b06709a2d2ab751d96' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\front\\Gallery.tpl',
      1 => 1430569877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131565544d429b2a5d0-62757633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'numberOfPages' => 0,
    'i' => 0,
    'itemsForPage' => 0,
    'j' => 0,
    'images' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5544d42b293784_98457992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544d42b293784_98457992')) {function content_5544d42b293784_98457992($_smarty_tpl) {?>
<!-- LOGO
============================================================================ -->
<div id="logo" class="container-fluid not-mobile">
    <div class="row">
        <img src="uploads/logo.jpg" alt="logo" />
    </div>
</div>




<!-- GALLERY
============================================================================ -->
<div class="container-fluid no-padding">
    <div class="row sectionTitle only-mobile">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 class="hooked">Galleria</h1>
        </div>
    </div>

    <div id="galleryCarousel">

        <div id="carouselSlider">

            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? ($_smarty_tpl->tpl_vars['numberOfPages']->value-1)+1 - (0) : 0-(($_smarty_tpl->tpl_vars['numberOfPages']->value-1))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>

                <div id="page<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
" class="page" data-number="<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
">

                    <div class="galleryColumn colonna1 col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <?php $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? ($_smarty_tpl->tpl_vars['itemsForPage']->value-1)+1 - (0) : 0-(($_smarty_tpl->tpl_vars['itemsForPage']->value-1))+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 0, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?>
                            <?php if (($_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value)<sizeof($_smarty_tpl->tpl_vars['images']->value)&&($_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value)%4===1) {?>
                                <div class="imageContainer" >
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value]->getFakeName();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value]->getRealName();?>
" />
                                    <div class="description not-mobile">
                                        <p>
                                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                                            clicca per ingrandire
                                        </p>
                                    </div>
                                </div>
                            <?php }?>
                        <?php }} ?>
                    </div> <!-- /.colonna1 -->

                    <div class="galleryColumn colonna2 col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <?php $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? ($_smarty_tpl->tpl_vars['itemsForPage']->value-1)+1 - (0) : 0-(($_smarty_tpl->tpl_vars['itemsForPage']->value-1))+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 0, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?>
                            <?php if (($_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value)<sizeof($_smarty_tpl->tpl_vars['images']->value)&&($_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value)%4===2) {?>
                                <div class="imageContainer" >
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value]->getFakeName();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value]->getRealName();?>
" />
                                    <div class="description not-mobile">
                                        <p>
                                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                                            clicca per ingrandire
                                        </p>
                                    </div>
                                </div>
                            <?php }?>
                        <?php }} ?>
                    </div> <!-- /.colonna2 -->

                    <div class="galleryColumn colonna3 col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <?php $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? ($_smarty_tpl->tpl_vars['itemsForPage']->value-1)+1 - (0) : 0-(($_smarty_tpl->tpl_vars['itemsForPage']->value-1))+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 0, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?>
                            <?php if (($_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value)<sizeof($_smarty_tpl->tpl_vars['images']->value)&&($_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value)%4===3) {?>
                                <div class="imageContainer" >
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value]->getFakeName();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value]->getRealName();?>
" />
                                    <div class="description not-mobile">
                                        <p>
                                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                                            clicca per ingrandire
                                        </p>
                                    </div>
                                </div>
                            <?php }?>
                        <?php }} ?>
                    </div> <!-- /.colonna3 -->

                    <div class="galleryColumn colonna4 col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <?php $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? ($_smarty_tpl->tpl_vars['itemsForPage']->value-1)+1 - (0) : 0-(($_smarty_tpl->tpl_vars['itemsForPage']->value-1))+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 0, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?>
                            <?php if (($_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value)<sizeof($_smarty_tpl->tpl_vars['images']->value)&&($_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value)%4===0) {?>
                                <div class="imageContainer" >
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value]->getFakeName();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['images']->value[$_smarty_tpl->tpl_vars['i']->value*$_smarty_tpl->tpl_vars['itemsForPage']->value+$_smarty_tpl->tpl_vars['j']->value]->getRealName();?>
" />
                                    <div class="description not-mobile">
                                        <p>
                                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                                            clicca per ingrandire
                                        </p>
                                    </div>
                                </div>
                            <?php }?>
                        <?php }} ?>
                    </div> <!-- /.colonna4 -->
                </div> <!-- /.page -->
            <?php }} ?>


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


    </div> <!-- /#galleryCarousel -->
</div>


<!-- TEMPLATE PER IMMAGINE FULLSCREEN -->
<div id="JS_fullScreenContainer" class="not-mobile">
    <span id="JS_fullScreenCloseButton" data-toggle="tooltip" data-placement="left" title="Chiudi fullscreen" class="closeFullScreen glyphicon glyphicon-remove" aria-hidden="true"></span>
    <img id="JS_fullScreenImage" />
</div>

<script>

    window.addEventListener("load", function (e) {


        if (window.innerWidth < 768) {

            // se siamo su mobile non dobbiamo mettere nulla full-screen
            // perciò non carichiamo nulla
            return;
        }




        if (document.getElementById("paginationContainer")) {

            // se non esiste la paginazione è inutile avviare lo script
            // "sparagnamo" xD
            document.getElementById("galleryCarousel").myCarousel();
        }

        // TOOLTIP
        // =====================================================================

        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

        // FULLSCREEN
        // =====================================================================

        var containers = document.querySelectorAll(".imageContainer");

        var fullScreen = {
            container: document.getElementById("JS_fullScreenContainer"),
            closeButton: document.getElementById("JS_fullScreenCloseButton"),
            image: document.getElementById("JS_fullScreenImage")
        };

        for (var i = 0; i < containers.length; i++) {

            containers[i].addEventListener("click", showImageFullScreen);
        }

        fullScreen.closeButton.addEventListener("click", closeImageFullScreen);

        function showImageFullScreen(e) {

            fullScreen.image.setAttribute("src", this.firstElementChild.getAttribute("src"));
            fullScreen.image.setAttribute("alt", this.firstElementChild.getAttribute("alt"));
            fullScreen.container.addClass("showFullScreen");
        }

        function closeImageFullScreen(e) {

            setTimeout(clearImageData, 500);
            fullScreen.container.removeClass("showFullScreen");
        }


        function clearImageData() {
            fullScreen.image.removeAttribute("src");
            fullScreen.image.removeAttribute("alt");
        }

    });

</script><?php }} ?>
