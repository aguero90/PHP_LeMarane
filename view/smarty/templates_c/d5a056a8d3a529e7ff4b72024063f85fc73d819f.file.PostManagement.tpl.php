<?php /* Smarty version Smarty-3.1.17, created on 2015-05-08 12:55:26
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\back\PostManagement.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25682554c961e945e18-64208358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5a056a8d3a529e7ff4b72024063f85fc73d819f' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\back\\PostManagement.tpl',
      1 => 1431012529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25682554c961e945e18-64208358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'itemsForPage' => 0,
    'post' => 0,
    'pagination' => 0,
    'images' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_554c961f64c2b7_55409552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c961f64c2b7_55409552')) {function content_554c961f64c2b7_55409552($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\PHP_LeMarane\\lib\\smarty\\libs\\plugins\\modifier.truncate.php';
?>
<!-- TABELLA NEWS
============================================================================ -->

<div id="myCarousel">


    <div id="carouselSlider">

        <!-- TABELLE -->
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
" class="tableManagement table-responsive page" data-number="<?php echo (($_smarty_tpl->tpl_vars['post']->iteration-1)/$_smarty_tpl->tpl_vars['itemsForPage']->value)+1;?>
">
                    <table class="table table-striped table-hover table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titolo</th>
                                <th>Immagine</th>
                                <th>Testo</th>
                                <th>Data</th>
                                <th>Autore</th>
                                <th>Azioni</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php }?>



                        <tr id="JS_relativeRow<?php echo $_smarty_tpl->tpl_vars['post']->value->getID();?>
">
                            <td><?php echo $_smarty_tpl->tpl_vars['post']->iteration;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
</td>
                            <td data-fakeName="<?php echo $_smarty_tpl->tpl_vars['post']->value->getImage()->getFakeName();?>
" data-description="<?php echo $_smarty_tpl->tpl_vars['post']->value->getImage()->getDescription();?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['post']->value->getImage()->getFakeName();?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value->getImage()->getRealName(),25," ... ");?>
</a></td>
                            <td data-fullText="<?php echo $_smarty_tpl->tpl_vars['post']->value->getText();?>
" ><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value->getText(),50," ... ");?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['post']->value->getDate()->getDayOfMonth();?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->getDate()->getMonth();?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value->getDate()->getYear();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['post']->value->getAdmin()->getUsername();?>
</td>
                            <td>
                                <a class="previewButton" data-pid="<?php echo $_smarty_tpl->tpl_vars['post']->value->getID();?>
" data-toggle="tooltip" data-placement="top" title="Anteprima">
                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                </a>
                                <a class="editButton" data-pid="<?php echo $_smarty_tpl->tpl_vars['post']->value->getID();?>
" data-toggle="tooltip" data-placement="top" title="Modifica">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>
                                <a class="removeButton" data-pid="<?php echo $_smarty_tpl->tpl_vars['post']->value->getID();?>
" data-toggle="tooltip" data-placement="top" title="Rimuovi">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </a>
                            </td>
                        </tr>

                        <?php if ($_smarty_tpl->tpl_vars['post']->iteration%$_smarty_tpl->tpl_vars['itemsForPage']->value===0||$_smarty_tpl->tpl_vars['post']->last) {?>
                            <!-- Se ho appena stampato l'ultima riga, chiudo la tabella -->
                            <tr class="insertRow">
                                <td colspan="6">
                                    Inserisci una nuova news
                                </td>
                                <td>
                                    <a class="insertButton" data-toggle="tooltip" data-placement="top" title="Inserisci">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php }?>

        <?php } ?>

    </div>

    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['pagination']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



</div>

<!-- anteprima
======================================================================== -->
<div id="JS_preview" class="myPopover postPreview">
    <a id="JS_previewCloseButton" class="closeTooltip" data-toggle="tooltip" data-placement="bottom" title="Chiudi anteprima">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </a>
    <div class="container-fluid no-padding">
        <div id="postCardContainer" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="postCard">
                <header class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1 id="JS_previewTitle" class="hooked"></h1>
                    </div>
                </header>
                <div class="postContent">
                    <div class="row postImage">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <img id="JS_previewImage" />
                        </div>
                    </div>
                    <div class="mobilePostContent">
                        <div class="row postCardText">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <p id="JS_previewText"></p>
                            </div>
                        </div>
                        <footer class="row">
                            <div class="postCardDate col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                <p class="flag" id="JS_previewDate"></p>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Form di edit
======================================================================== -->
<div id="JS_editForm" class="myPopover editPost editFormContainer">
    <a id="JS_editFormCloseButton" class="closeTooltip" data-toggle="tooltip" data-placement="left" title="Chiudi form">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </a>
    <form class="form-horizontal" action="admin.php" method="POST">
        <input type="hidden" name="sid" value="1" />
        <input id="JS_editFormHiddenInput" type="hidden" name="pid"  />
        <div class="form-group">
            <label for="editTitle" class="col-sm-2 control-label">Titolo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="editTitle" name="title" placeholder="Titolo">
            </div>
        </div>
        <div class="form-group">
            <label for="editImageFakeName" class="col-sm-2 control-label">Immagine</label>
            <div class="col-sm-10">
                <input type="url" class="form-control" id="editImageFakeName" name="imageFakeName"  placeholder="URL Immagine">
            </div>
        </div>
        <div class="form-group">
            <label for="editImageRealName" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="editImageRealName" name="imageRealName"  placeholder="Nome Immagine">
            </div>
        </div>
        <div class="form-group">
            <label for="editImageDescription" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <textarea id="editImageDescription" name="imageDescription" class="form-control" rows="3" placeholder="Descrizione Immagine"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="editText" class="col-sm-2 control-label">Testo</label>
            <div class="col-sm-10">
                <textarea id="editText" name="text" class="form-control summernote" rows="10" placeholder="Testo"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="ep" value="1" class="handlebarsButton">Modifica</button>
            </div>
        </div>
    </form>
</div>


<!-- Form di insert
============================================================================ -->
<div id="JS_insertForm" class="myPopover insertPost insertFormContainer">
    <a id="JS_insertFormCloseButton" class="closeTooltip" data-toggle="tooltip" data-placement="left" title="Chiudi form">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </a>
    <form class="form-horizontal" action="admin.php" method="POST">
        <input type="hidden" name="sid" value="1" />
        <div class="form-group">
            <label for="insertTitle" class="col-sm-2 control-label">Titolo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="insertTitle" name="title"  placeholder="Titolo">
            </div>
        </div>
        <div class="form-group">
            <label for="nothing" class="col-sm-2 control-label">Immagine</label>
            <div class="col-sm-10">
                <p class="lineBehindText"><span id="JS_newImageButton">Nuova</span></p>
            </div>
        </div>
        <div id="JS_newImageContent">
            <div class="form-group">
                <label for="insertImageFakeName" class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="url" class="form-control" id="insertImageFakeName" name="imageFakeName"  placeholder="URL Immagine">
                </div>
            </div>
            <div class="form-group">
                <label for="insertImageRealName" class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="insertImageRealName" name="imageRealName"  placeholder="Nome Immagine">
                </div>
            </div>
            <div class="form-group">
                <label for="insertImageDescription" class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <textarea id="insertImageDescription" name="imageDescription" class="form-control" rows="3" placeholder="Descrizione Immagine"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <p class="lineBehindText"><span id="JS_oldImageButton">Esistente</span></p>
            </div>
        </div>
        <div id="JS_oldImageContent">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <img id="JS_insertImageSelectionImage" />
                    <button id="JS_insertImageSelectionButton" class="handlebarsButton fullWidth">Seleziona</button>
                    <input type="hidden" id="JS_insertImageSelectionHiddenInput" name="iid" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="insertText" class="col-sm-2 control-label">Testo</label>
            <div class="col-sm-10">
                <textarea id="insertText" name="text" class="form-control summernote" rows="10" placeholder="Testo"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="ip" value="1" class="handlebarsButton">Inserisci</button>
            </div>
        </div>
    </form>
</div>

<!-- Form di Remove
============================================================================ -->
<div id="JS_removeForm" class="myPopover removeFormContainer">
    <a id="JS_removeFormCloseButton" class="closeTooltip" data-toggle="tooltip" data-placement="left" title="Chiudi form">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </a>
    <form class="form-horizontal" action="admin.php" method="POST">
        <input type="hidden" name="sid" value="1" />
        <input id="JS_removeFormHiddenInput" type="hidden" name="pid" />
        <div>
            <p>
                <span>Attenzione!</span>
                Stai per rimuovere il post "<b id="JS_removeFormTitle"></b>".
            </p>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="rp" value="1" class="handlebarsButton">Rimuovi</button>
            </div>
        </div>
    </form>
</div>


<!-- Template image selection
============================================================================ -->
<div id="JS_imageSelectionContainer">
    <header>
        <h1>Clicca sull'immagine che vuoi selezionare</h1>
        <span id="JS_imageSelectionCloseButton" data-toggle="tooltip" data-placement="left" title="Chiudi fullscreen" class="closeFullScreen glyphicon glyphicon-remove" aria-hidden="true"></span>
    </header>

    <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>

        <div class="imageContainer col-xs-6 col-sm-4 col-md-4 col-lg-3">
            <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->getFakeName();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->getRealName();?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
" />
        </div>

    <?php } ?>

</div>

<script>

    window.addEventListener("load", function () {

        // TOOLTIP BOOTSTRAP
        // =====================================================================
        $('[data-toggle="tooltip"]').tooltip();



        // TEXTEDITOR SUMMERNOTE
        // =====================================================================
        $('.summernote').summernote({
            lang: 'it-IT',
            height: 200
        });


        // SHOW GALLERY FOR SELECTION
        // =====================================================================

        var imageSelectionContainer = document.getElementById("JS_imageSelectionContainer");
        var insertImageSelectionButton = document.getElementById("JS_insertImageSelectionButton");
        var imageSelectionCloseButton = document.getElementById("JS_imageSelectionCloseButton");
        var insertImageSelectionHiddenInput = document.getElementById("JS_insertImageSelectionHiddenInput");
        var insertImageSelectionImage = document.getElementById("JS_insertImageSelectionImage");

        insertImageSelectionButton.addEventListener("click", showImageSelectionContainer);
        imageSelectionCloseButton.addEventListener("click", closeImageSelectionContainer);

        function showImageSelectionContainer(e) {

            e.preventDefault(); // per non fa ricaricare la pagina

            imageSelectionContainer.setAttribute("class", "show");
        }

        function closeImageSelectionContainer(e) {

            imageSelectionContainer.removeAttribute("class");
        }

        var images = imageSelectionContainer.querySelectorAll("img");

        for (var i = 0; i < images.length; i++) {

            images[i].addEventListener("click", imageSelected);
        }

        function imageSelected(e) {

            insertImageSelectionHiddenInput.setAttribute("value", this.dataset.id);

            insertImageSelectionImage.setAttribute("src", this.getAttribute("src"));
            insertImageSelectionImage.setAttribute("alt", this.getAttribute("alt"));

            closeImageSelectionContainer();
        }





        (new MyTablePopover()).init();

        if (document.getElementById("paginationContainer")) {

            // se non esiste la paginazione è inutile avviare lo script
            // "sparagnamo" xD
            document.getElementById("myCarousel").myCarousel();
        }


    });

    var MyTablePopover = function () {
    };

    MyTablePopover.prototype = {
        tableCarousel: null,
        relativePost: null,
        previewButtons: null,
        preview: null,
        editFormButtons: null,
        editForm: null,
        removeFormButtons: null,
        removeForm: null,
        insertFormButtons: null,
        insertForm: null,
        init: function () {

            this.tableCarousel = document.getElementById("myCarousel");
            // PREVIEW
            this.previewButtons = this.tableCarousel.querySelectorAll('.previewButton');
            this.preview = {
                container: document.getElementById("JS_preview"),
                closeButton: document.getElementById("JS_previewCloseButton"),
                title: document.getElementById("JS_previewTitle"),
                image: document.getElementById("JS_previewImage"),
                text: document.getElementById("JS_previewText"),
                date: document.getElementById("JS_previewDate")
            };
            // EDIT
            this.editFormButtons = this.tableCarousel.querySelectorAll('.editButton');
            this.editForm = {
                container: document.getElementById("JS_editForm"),
                closeButton: document.getElementById("JS_editFormCloseButton"),
                hiddenInput: document.getElementById("JS_editFormHiddenInput"),
                title: document.getElementById("editTitle"),
                imageFakeName: document.getElementById("editImageFakeName"),
                imageRealName: document.getElementById("editImageRealName"),
                imageDescription: document.getElementById("editImageDescription"),
                text: document.getElementById("editText")
            };
            // REMOVE
            this.removeFormButtons = this.tableCarousel.querySelectorAll('.removeButton');
            this.removeForm = {
                container: document.getElementById("JS_removeForm"),
                closeButton: document.getElementById("JS_removeFormCloseButton"),
                title: document.getElementById("JS_removeFormTitle"),
                hiddenInput: document.getElementById("JS_removeFormHiddenInput")
            };
            // INSERT
            this.insertFormButtons = this.tableCarousel.querySelectorAll(".insertButton");
            this.insertForm = {
                container: document.getElementById("JS_insertForm"),
                closeButton: document.getElementById("JS_insertFormCloseButton")
            };
            // AGGIUNGO I LISTENER
            /*
             * <NOTA: POICHÈ IL NUMERO DI BOTTONI DI PREVIEW, EDIT E REMOVE È >
             *        <LO STESSO, LI AGGIUNGO IN UN SINGOLO FOR PER OTTIMIZZARE>
             */
            for (var i = 0; i < this.previewButtons.length; i++) {

                this.previewButtons[i].addEventListener("click", this.show.bind(this, this.preview));
                this.editFormButtons[i].addEventListener("click", this.show.bind(this, this.editForm));
                this.removeFormButtons[i].addEventListener("click", this.show.bind(this, this.removeForm));
            }

            this.preview.closeButton.addEventListener("click", this.close.bind(this, this.preview));
            this.editForm.closeButton.addEventListener("click", this.close.bind(this, this.editForm));
            this.removeForm.closeButton.addEventListener("click", this.close.bind(this, this.removeForm));
            // i bottoni di insert sono di meno, quindi le faccio in un ciclo separato
            for (var i = 0; i < this.insertFormButtons.length; i++) {

                this.insertFormButtons[i].addEventListener("click", this.show.bind(this, this.insertForm));
            }

            this.insertForm.closeButton.addEventListener("click", this.close.bind(this, this.insertForm));
        },
        show: function (element, e) {

            // se il post è già visibile, vuol dire che l'utente sta
            // cercando di aprirne 2 insieme.
            // Ma noi non vogliamo questo, perciò quello aperto lo chiudiamo
            // ed apriamo quello nuovo xD
            if (element.container.hasClass("show")) {
                element.container.removeClass("show");
            }

            this.relativePost = document.getElementById("JS_relativeRow" + e.currentTarget.dataset.pid);
            // posso usare .cells[i] perchè stiamo parlando di una riga
            // di una tabella.
            // cells è un array contenente tutte le colonne di quella riga
            if (element === this.preview) {

                element.title.innerHTML = this.relativePost.cells[1].innerHTML;
                element.image.setAttribute("src", this.relativePost.cells[2].dataset.fakename);
                element.image.setAttribute("alt", this.relativePost.cells[2].dataset.textContent);
                element.text.innerHTML = this.relativePost.cells[3].dataset.fulltext;
                element.date.innerHTML = this.relativePost.cells[4].innerHTML;
            } else if (element === this.editForm) {

                element.hiddenInput.value = e.currentTarget.dataset.pid;
                element.title.value = this.relativePost.cells[1].innerHTML;
                element.imageFakeName.value = this.relativePost.cells[2].dataset.fakename;
                element.imageRealName.value = this.relativePost.cells[2].textContent; // altrimenti copia anche il tag <a>
                element.imageDescription.innerHTML = this.relativePost.cells[2].dataset.description;
                element.text.innerHTML = this.relativePost.cells[3].dataset.fulltext;
            } else if (element === this.removeForm) {

                element.hiddenInput.value = e.currentTarget.dataset.pid;
                element.title.innerHTML = this.relativePost.cells[1].innerHTML;
            } else {
                // insert

                // non devo fare nulla xD
            }

            element.container.addClass("show");
        },
        close: function (element, e) {

            if (element === this.preview) {

                // in questo modo, quando l'utente aprirà una nuova
                // anteprima, la nuova immagine verrà caricata subito
                element.image.removeAttribute("src");
                element.image.removeAttribute("alt");
            }

            element.container.removeClass("show");
        }



    };
</script>


<?php }} ?>
