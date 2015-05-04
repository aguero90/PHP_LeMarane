<?php /* Smarty version Smarty-3.1.17, created on 2015-05-04 15:58:09
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\back\ImageManagement.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1164055477af1635d81-49080148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed3b302bec4b7a977c67dd622b1aab0ff114cbb1' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\back\\ImageManagement.tpl',
      1 => 1430577039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1164055477af1635d81-49080148',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images' => 0,
    'itemsForPage' => 0,
    'image' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55477af1e44769_58937748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55477af1e44769_58937748')) {function content_55477af1e44769_58937748($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\PHP_LeMarane\\lib\\smarty\\libs\\plugins\\modifier.truncate.php';
?>
<!-- TABELLA IMMAGINI
============================================================================ -->

<div id="myCarousel">

    <div id="carouselSlider">

        <!-- TABELLE -->
        <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['image']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->iteration++;
 $_smarty_tpl->tpl_vars['image']->last = $_smarty_tpl->tpl_vars['image']->iteration === $_smarty_tpl->tpl_vars['image']->total;
?>

            <?php if ($_smarty_tpl->tpl_vars['image']->iteration%$_smarty_tpl->tpl_vars['itemsForPage']->value===1) {?>
                <!-- Se è il primo della nuova pagina, ricreo la tabella -->

                <div id="page<?php echo (($_smarty_tpl->tpl_vars['image']->iteration-1)/$_smarty_tpl->tpl_vars['itemsForPage']->value)+1;?>
" class="tableManagement table-responsive page" data-number="<?php echo (($_smarty_tpl->tpl_vars['image']->iteration-1)/$_smarty_tpl->tpl_vars['itemsForPage']->value)+1;?>
">
                    <table class="table table-striped table-hover table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>URL</th>
                                <th>Descrizione</th>
                                <th>Azioni</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php }?>

                        <tr id="JS_relativeRow<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
">
                            <td><?php echo $_smarty_tpl->tpl_vars['image']->iteration;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['image']->value->getRealName();?>
</td>
                            <td data-fullFakeName="<?php echo $_smarty_tpl->tpl_vars['image']->value->getFakeName();?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['image']->value->getFakeName(),25," ... ");?>
</td>
                            <td data-fullDescription="<?php echo $_smarty_tpl->tpl_vars['image']->value->getDescription();?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['image']->value->getDescription(),50," ... ");?>
</td>
                            <td>
                                <a class="previewButton" data-pid="<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
" data-toggle="tooltip" data-placement="top" title="Anteprima">
                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                </a>
                                <a class="editButton" data-pid="<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
" data-toggle="tooltip" data-placement="top" title="Modifica">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>
                                <a class="removeButton" data-pid="<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
" data-toggle="tooltip" data-placement="top" title="Rimuovi" data-toggle="modal" data-target=".removeNewsModal">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </a>
                            </td>
                        </tr>

                        <?php if ($_smarty_tpl->tpl_vars['image']->iteration%$_smarty_tpl->tpl_vars['itemsForPage']->value===0||$_smarty_tpl->tpl_vars['image']->last) {?>
                            <!-- Se ho appena stampato l'ultima riga, chiudo la tabella -->
                            <tr class="insertRow">
                                <td colspan="4">
                                    Inserisci una nuova immagine
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


<!--  anteprima
======================================================================== -->
<div id="JS_preview" class="myPopover imagePreview">
    <a id="JS_previewCloseButton" class="closeTooltip" data-toggle="tooltip" data-placement="bottom" title="Chiudi anteprima">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </a>
    <div class="imageContainer">
        <img id="JS_previewImage" />
    </div>
</div>


<!-- Form di edit
======================================================================== -->
<div id="JS_editForm" class="myPopover editFormContainer">
    <a id="JS_editFormCloseButton" class="closeTooltip" data-toggle="tooltip" data-placement="left" title="Chiudi anteprima">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </a>
    <form class="form-horizontal" action="admin.php" method="POST">
        <input type="hidden" name="sid" value="2" />
        <input id="JS_editFormHiddenInput" type="hidden" name="pid" />
        <div class="form-group">
            <label for="editRealName" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="editRealName" name="realName" placeholder="Nome">
            </div>
        </div>
        <div class="form-group">
            <label for="editFakeName" class="col-sm-2 control-label">URL</label>
            <div class="col-sm-10">
                <input type="url" class="form-control" id="editFakeName" name="fakeName" placeholder="Nome">
            </div>
        </div>
        <div class="form-group">
            <label for="editDescription" class="col-sm-2 control-label">Descrizione</label>
            <div class="col-sm-10">
                <textarea id="editDescription" name="description" class="form-control" rows="5" placeholder="Descrizione"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="handlebarsButton" name="ei" value="1" class="btn btn-default">Modifica</button>
            </div>
        </div>
    </form>
</div>



<!-- Forms di insert
============================================================================ -->
<div id="JS_insertForm" class="myPopover insertFormContainer">
    <a id="JS_insertFormCloseButton" class="closeTooltip" data-toggle="tooltip" data-placement="left" title="Chiudi anteprima">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </a>
    <form class="form-horizontal" action="admin.php" method="POST">
        <input type="hidden" name="sid" value="2" />
        <div class="form-group">
            <label for="insertRealName" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="insertRealName" name="realName" placeholder="Nome">
            </div>
        </div>
        <div class="form-group">
            <label for="insertFakeName" class="col-sm-2 control-label">URL</label>
            <div class="col-sm-10">
                <input type="url" class="form-control" id="insertFakeName" name="fakeName" placeholder="Nome">
            </div>
        </div>
        <div class="form-group">
            <label for="insertDescription" class="col-sm-2 control-label">Descrizione</label>
            <div class="col-sm-10">
                <textarea id="insertDescription" name="description" class="form-control" rows="5" placeholder="Descrizione"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="handlebarsButton" name="ii" value="1" class="btn btn-default">Inserisci</button>
            </div>
        </div>
    </form>
</div>

<!-- Finestra remove
============================================================================ -->
<div id="JS_removeForm" class="myPopover removeFormContainer">
    <a id="JS_removeFormCloseButton" class="closeTooltip" data-toggle="tooltip" data-placement="left" title="Chiudi form">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </a>
    <form class="form-horizontal" action="admin.php" method="POST">
        <input type="hidden" name="sid" value="2" />
        <input id="JS_removeFormHiddenInput" type="hidden" name="pid" />
        <div>
            <p>
                <span>Attenzione!</span>
                Stai per rimuovere questa immagine:
            </p>
            <div>
                <img id="JS_removeFormImage" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="handlebarsButton" name="ri" value="1" class="btn btn-default">Rimuovi</button>
            </div>
        </div>
    </form>
</div>


<script>

    window.addEventListener("load", function () {

        // TOOLTIP
        // =====================================================================

        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });


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
                image: document.getElementById("JS_previewImage")
            };
            // EDIT
            this.editFormButtons = this.tableCarousel.querySelectorAll('.editButton');
            this.editForm = {
                container: document.getElementById("JS_editForm"),
                closeButton: document.getElementById("JS_editFormCloseButton"),
                hiddenInput: document.getElementById("JS_editFormHiddenInput"),
                fakeName: document.getElementById("editFakeName"),
                realName: document.getElementById("editRealName"),
                description: document.getElementById("editDescription")
            };
            // REMOVE
            this.removeFormButtons = this.tableCarousel.querySelectorAll('.removeButton');
            this.removeForm = {
                container: document.getElementById("JS_removeForm"),
                closeButton: document.getElementById("JS_removeFormCloseButton"),
                image: document.getElementById("JS_removeFormImage"),
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

                element.image.setAttribute("src", this.relativePost.cells[2].dataset.fullfakename);
                element.image.setAttribute("alt", this.relativePost.cells[1].innerHTML);
            } else if (element === this.editForm) {

                element.hiddenInput.value = e.currentTarget.dataset.pid;
                element.realName.value = this.relativePost.cells[1].innerHTML;
                element.fakeName.value = this.relativePost.cells[2].dataset.fullfakename;
                element.description.innerHTML = this.relativePost.cells[3].dataset.fulldescription;

            } else if (element === this.removeForm) {

                element.hiddenInput.value = e.currentTarget.dataset.pid;
                element.image.setAttribute("src", this.relativePost.cells[2].dataset.fullfakename);
                element.image.setAttribute("alt", this.relativePost.cells[1].innerHTML);

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
