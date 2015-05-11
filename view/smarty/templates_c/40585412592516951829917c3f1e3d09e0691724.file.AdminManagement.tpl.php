<?php /* Smarty version Smarty-3.1.17, created on 2015-05-08 11:29:26
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\back\AdminManagement.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22925554c81f69b3149-70796376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40585412592516951829917c3f1e3d09e0691724' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\back\\AdminManagement.tpl',
      1 => 1430576973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22925554c81f69b3149-70796376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admins' => 0,
    'itemsForPage' => 0,
    'admin' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_554c81f70b2650_66363781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c81f70b2650_66363781')) {function content_554c81f70b2650_66363781($_smarty_tpl) {?>
<!-- TABELLA ADMIN
============================================================================ -->

<div id="myCarousel">

    <div id="carouselSlider">

        <!-- TABELLE -->
        <?php  $_smarty_tpl->tpl_vars['admin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['admin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['admins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['admin']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['admin']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->key => $_smarty_tpl->tpl_vars['admin']->value) {
$_smarty_tpl->tpl_vars['admin']->_loop = true;
 $_smarty_tpl->tpl_vars['admin']->iteration++;
 $_smarty_tpl->tpl_vars['admin']->last = $_smarty_tpl->tpl_vars['admin']->iteration === $_smarty_tpl->tpl_vars['admin']->total;
?>

            <?php if ($_smarty_tpl->tpl_vars['admin']->iteration%$_smarty_tpl->tpl_vars['itemsForPage']->value===1) {?>
                <!-- Se è il primo della nuova pagina, ricreo la tabella -->

                <div id="page<?php echo (($_smarty_tpl->tpl_vars['admin']->iteration-1)/$_smarty_tpl->tpl_vars['itemsForPage']->value)+1;?>
" class="tableManagement table-responsive page" data-number="<?php echo (($_smarty_tpl->tpl_vars['admin']->iteration-1)/$_smarty_tpl->tpl_vars['itemsForPage']->value)+1;?>
">
                    <table class="table table-striped table-hover table-condensed table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Azioni</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php }?>

                        <tr id="JS_relativeRow<?php echo $_smarty_tpl->tpl_vars['admin']->value->getID();?>
">
                            <td><?php echo $_smarty_tpl->tpl_vars['admin']->iteration;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['admin']->value->getUsername();?>
</td>
                            <td>
                                <a class="editButton" data-pid="<?php echo $_smarty_tpl->tpl_vars['admin']->value->getID();?>
" data-toggle="tooltip" data-placement="top" title="Modifica">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>
                                <a class="removeButton" data-pid="<?php echo $_smarty_tpl->tpl_vars['admin']->value->getID();?>
" data-toggle="tooltip" data-placement="top" title="Rimuovi" data-toggle="modal" data-target=".removeNewsModal">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </a>
                            </td>
                        </tr>

                        <?php if ($_smarty_tpl->tpl_vars['admin']->iteration%$_smarty_tpl->tpl_vars['itemsForPage']->value===0||$_smarty_tpl->tpl_vars['admin']->last) {?>
                            <!-- Se ho appena stampato l'ultima riga, chiudo la tabella -->
                            <tr class="insertRow">
                                <td colspan="2">
                                    Inserisci un nuovo amministratore
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


<!-- Form di edit
======================================================================== -->
<div id="JS_editForm" class="myPopover editFormContainer">
    <a id="JS_editFormCloseButton" class="closeTooltip" data-toggle="tooltip" data-placement="left" title="Chiudi anteprima">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </a>
    <form class="form-horizontal" action="admin.php" method="POST">
        <input type="hidden" name="sid" value="3" />
        <input id="JS_editFormHiddenInput" type="hidden" name="pid" />
        <div class="form-group">
            <label for="editUsername" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="editUsername" name="username" placeholder="Username">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="handlebarsButton" name="ea" value="1" class="btn btn-default">Modifica</button>
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
        <input type="hidden" name="sid" value="3" />
        <div class="form-group">
            <label for="insertUsername" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="insertUsername" name="username" placeholder="Username">
            </div>
        </div>
        <div class="form-group">
            <label for="insertPassword" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="insertPassword" name="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="handlebarsButton" name="ia" value="1" class="btn btn-default">Inserisci</button>
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
        <input type="hidden" name="sid" value="3" />
        <input id="JS_removeFormHiddenInput" type="hidden" name="pid" />
        <div>
            <p>
                <span>Attenzione!</span>
                Stai per rimuovere l'amministratore <b id="JS_removeFormUsername"></b>
            </p>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="handlebarsButton" name="ra" value="1" class="btn btn-default">Rimuovi</button>
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
            document.getElementById("#myCarousel").myCarousel();
        }


    });

    var MyTablePopover = function () {
    };

    MyTablePopover.prototype = {
        tableCarousel: null,
        relativePost: null,
        editFormButtons: null,
        editForm: null,
        removeFormButtons: null,
        removeForm: null,
        insertFormButtons: null,
        insertForm: null,
        init: function () {

            this.tableCarousel = document.getElementById("myCarousel");

            // EDIT
            this.editFormButtons = this.tableCarousel.querySelectorAll('.editButton');
            this.editForm = {
                container: document.getElementById("JS_editForm"),
                closeButton: document.getElementById("JS_editFormCloseButton"),
                hiddenInput: document.getElementById("JS_editFormHiddenInput"),
                username: document.getElementById("editUsername")
            };
            // REMOVE
            this.removeFormButtons = this.tableCarousel.querySelectorAll('.removeButton');
            this.removeForm = {
                container: document.getElementById("JS_removeForm"),
                closeButton: document.getElementById("JS_removeFormCloseButton"),
                username: document.getElementById("JS_removeFormUsername"),
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
            for (var i = 0; i < this.editFormButtons.length; i++) {

                this.editFormButtons[i].addEventListener("click", this.show.bind(this, this.editForm));
                this.removeFormButtons[i].addEventListener("click", this.show.bind(this, this.removeForm));
            }

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
            if (element === this.editForm) {

                element.hiddenInput.value = e.currentTarget.dataset.pid;
                element.username.value = this.relativePost.cells[1].innerHTML;

            } else if (element === this.removeForm) {

                element.hiddenInput.value = e.currentTarget.dataset.pid;
                element.username.innerHTML = this.relativePost.cells[1].innerHTML;

            } else {
                // insert

                // non devo fare nulla xD
            }

            element.container.addClass("show");
        },
        close: function (element, e) {
            element.container.removeClass("show");
        }



    };
</script>


<?php }} ?>
