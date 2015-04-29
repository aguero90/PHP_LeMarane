<?php /* Smarty version Smarty-3.1.17, created on 2015-04-28 21:04:27
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\back\ImageManagement.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23620553fd9bb820894-39838234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed3b302bec4b7a977c67dd622b1aab0ff114cbb1' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\back\\ImageManagement.tpl',
      1 => 1430071178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23620553fd9bb820894-39838234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_553fd9bc044d31_40792699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553fd9bc044d31_40792699')) {function content_553fd9bc044d31_40792699($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\PHP_LeMarane\\lib\\Smarty-3.1.17\\libs\\plugins\\modifier.truncate.php';
?>
<!-- TABELLA NEWS
============================================================================ -->
<div class="newsManagement table-responsive">
    <table class="table table-striped table-hover table-condensed table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>URL</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->iteration++;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['image']->iteration;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['image']->value->getRealName();?>
</td>
                    <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['image']->value->getDescription(),50);?>
</td>
                    <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['image']->value->getFakeName(),50);?>
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
                        <a class="removeButton" data-toggle="tooltip" data-placement="top" title="Rimuovi" data-toggle="modal" data-target=".removeNewsModal">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            <?php } ?>
            <tr class="insertNewsRow">
                <td colspan="4">
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



<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['image']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image']->iteration++;
?>

    <!-- Lista delle anteprime
    ======================================================================== -->
    <div class="imagePreview" data-pid="<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
">
        <a class="closePreviewButton closeTooltip" data-pid="<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
" data-toggle="tooltip" data-placement="bottom" title="Chiudi anteprima">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </a>
        <div class="container-fluid no-padding">
            <img src="<?php echo $_smarty_tpl->tpl_vars['image']->value->getFakeName();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value->getRealName();?>
" />
        </div>
    </div>


    <!-- Forms di edit
    ======================================================================== -->
    <div class="editFormContainer" data-pid="<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
">
        <a class="closeEditFormButton closeTooltip" data-pid="<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
" data-toggle="tooltip" data-placement="left" title="Chiudi anteprima">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </a>
        <form class="form-horizontal" action="" method="POST">
            <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
" />
            <div class="form-group">
                <label for="name<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
" name="name" value="<?php echo $_smarty_tpl->tpl_vars['image']->value->getRealName();?>
" placeholder="Titolo">
                </div>
            </div>
            <div class="form-group">
                <label for="description<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
" class="col-sm-2 control-label">Descrizione</label>
                <div class="col-sm-10">
                    <textarea id="description<?php echo $_smarty_tpl->tpl_vars['image']->value->getID();?>
" name="description" class="form-control" rows="10" placeholder="Descrizione"><?php echo $_smarty_tpl->tpl_vars['image']->value->getDescription();?>
</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="handlebarsButton" name="ep" value="1" class="btn btn-default">Modifica</button>
                </div>
            </div>
        </form>
    </div>

<?php } ?>


<!-- Forms di insert
============================================================================ -->
<div class="insertFormContainer">
    <a class="closeInsertFormButton closeTooltip" data-toggle="tooltip" data-placement="left" title="Chiudi anteprima">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </a>
    <form class="form-horizontal" action="" method="POST">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name"  placeholder="Name">
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Descrizione</label>
            <div class="col-sm-10">
                <textarea id="description" name="description" class="form-control" rows="10" placeholder="Descrizione"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="handlebarsButton" name="ip" value="1" class="btn btn-default">Inserisci</button>
            </div>
        </div>
    </form>
</div>

<!-- Finestra remove
============================================================================ -->
<div class="modal fade removeNewsModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <p>Vuoi davvero rimuovere questa news?</p>
        </div>
    </div>
</div>


<script>

    window.addEventListener("load", function () {

        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

        // ANTEPRIMA
        // =====================================================================

        var previewButtons = document.querySelectorAll('.previewButton');
        var closePreviewButtons = document.querySelectorAll('.closePreviewButton');

        for (var i = 0; i < previewButtons.length; i++) {

            previewButtons[i].addEventListener("click", showPreview);
        }

        for (var i = 0; i < closePreviewButtons.length; i++) {

            closePreviewButtons[i].addEventListener("click", closePreview);
        }

        function showPreview(e) {

            document.querySelector('[data-pid="' + this.dataset.pid + '"].imagePreview').addClass("show");
        }

        function closePreview(e) {

            document.querySelector('[data-pid="' + this.dataset.pid + '"].imagePreview').removeClass("show");
        }



        // MODIFICA
        // =====================================================================

        var editFormButtons = document.querySelectorAll('.editButton');
        var closeEditFormButtons = document.querySelectorAll('.closeEditFormButton');

        for (var i = 0; i < editFormButtons.length; i++) {

            editFormButtons[i].addEventListener("click", showEditForm);
        }


        for (var i = 0; i < closeEditFormButtons.length; i++) {

            closeEditFormButtons[i].addEventListener("click", closeEditForm);
        }


        function showEditForm(e) {

            document.querySelector('[data-pid="' + this.dataset.pid + '"].editFormContainer').addClass("show");
        }


        function closeEditForm(e) {

            document.querySelector('[data-pid="' + this.dataset.pid + '"].editFormContainer').removeClass("show");
        }



        // INSERIMENTO
        // =====================================================================

        var insertFormButton = document.querySelector('.insertButton');
        var closeInsertFormButton = document.querySelector('.closeInsertFormButton');

        insertFormButton.addEventListener("click", showInsertForm);
        closeInsertFormButton.addEventListener("click", closeInsertForm);


        function showInsertForm(e) {

            document.querySelector('.insertFormContainer').addClass("show");
        }


        function closeInsertForm(e) {

            document.querySelector('.insertFormContainer').removeClass("show");
        }



        // RIMUOVI
        // =====================================================================


    });
</script>


<?php }} ?>
