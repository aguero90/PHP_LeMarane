<?php /* Smarty version Smarty-3.1.17, created on 2015-04-27 09:46:23
         compiled from "C:\wamp\www\PHP_LeMarane\view\smarty\templates\back\News.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21537553de94f98d1e1-92793690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd82e66b36f02993fab83a57b1197e09747a8a3bc' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_LeMarane\\view\\smarty\\templates\\back\\News.tpl',
      1 => 1430052779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21537553de94f98d1e1-92793690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'news' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_553de950435ef1_41715836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553de950435ef1_41715836')) {function content_553de950435ef1_41715836($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\PHP_LeMarane\\lib\\Smarty-3.1.17\\libs\\plugins\\modifier.truncate.php';
?>
<!-- TABELLA NEWS
============================================================================ -->
<div class="newsManagement table-responsive">
    <table class="table table-striped table-hover table-condensed table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Titolo</th>
                <th>Testo</th>
                <th>Data</th>
                <th>Autore</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['n']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->iteration++;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['n']->iteration;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['n']->value->getTitle();?>
</td>
                    <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['n']->value->getText(),50);?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['n']->value->getDate()->getDayOfMonth();?>
/<?php echo $_smarty_tpl->tpl_vars['n']->value->getDate()->getMonth();?>
/<?php echo $_smarty_tpl->tpl_vars['n']->value->getDate()->getYear();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['n']->value->getAdmin()->getUsername();?>
</td>
                    <td>
                        <a class="previewButton" data-pid="<?php echo $_smarty_tpl->tpl_vars['n']->value->getID();?>
" data-toggle="tooltip" data-placement="top" title="Anteprima">
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </a>
                        <a class="editButton" data-pid="<?php echo $_smarty_tpl->tpl_vars['n']->value->getID();?>
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
                <td colspan="5">
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



<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['n']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->iteration++;
?>

    <!-- Lista delle anteprime
    ======================================================================== -->
    <div class="postPreview" data-pid="<?php echo $_smarty_tpl->tpl_vars['n']->value->getID();?>
">
        <a class="closePreviewButton closeTooltip" data-pid="<?php echo $_smarty_tpl->tpl_vars['n']->value->getID();?>
" data-toggle="tooltip" data-placement="bottom" title="Chiudi anteprima">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </a>
        <div class="container-fluid no-padding">
            <div id="postCardContainer" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="postCard">
                    <header class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h1 class="hooked"><?php echo $_smarty_tpl->tpl_vars['n']->value->getTitle();?>
</h1>
                        </div>
                    </header>
                    <div class="postContent">
                        <div class="row postImage">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <img src="uploads/logo.jpg" alt="img" />
                            </div>
                        </div>
                        <div class="mobilePostContent">
                            <div class="row postCardText">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <p><?php echo $_smarty_tpl->tpl_vars['n']->value->getText();?>
</p>
                                </div>
                            </div>
                            <footer class="row">
                                <div class="postCardDate col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                    <p class="flag"><?php echo $_smarty_tpl->tpl_vars['n']->value->getDate()->getDayOfMonth();?>
/<?php echo $_smarty_tpl->tpl_vars['n']->value->getDate()->getMonth();?>
/<?php echo $_smarty_tpl->tpl_vars['n']->value->getDate()->getYear();?>
</p>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Forms di edit
    ======================================================================== -->
    <div class="editFormContainer" data-pid="<?php echo $_smarty_tpl->tpl_vars['n']->value->getID();?>
">
        <a class="closeEditFormButton closeTooltip" data-pid="<?php echo $_smarty_tpl->tpl_vars['n']->value->getID();?>
" data-toggle="tooltip" data-placement="left" title="Chiudi anteprima">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </a>
        <form class="form-horizontal" action="" method="POST">
            <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['n']->value->getID();?>
" />
            <div class="form-group">
                <label for="title<?php echo $_smarty_tpl->tpl_vars['n']->value->getID();?>
" class="col-sm-1 control-label">Titolo</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="title<?php echo $_smarty_tpl->tpl_vars['n']->value->getID();?>
" name="title" value="<?php echo $_smarty_tpl->tpl_vars['n']->value->getTitle();?>
" placeholder="Titolo">
                </div>
            </div>
            <div class="form-group">
                <label for="text<?php echo $_smarty_tpl->tpl_vars['n']->value->getID();?>
" class="col-sm-1 control-label">Testo</label>
                <div class="col-sm-11">
                    <textarea id="<?php echo $_smarty_tpl->tpl_vars['n']->value->getID();?>
" name="text" class="form-control" rows="10" placeholder="Testo"><?php echo $_smarty_tpl->tpl_vars['n']->value->getText();?>
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
            <label for="title" class="col-sm-1 control-label">Titolo</label>
            <div class="col-sm-11">
                <input type="text" class="form-control" id="title" name="title"  placeholder="Titolo">
            </div>
        </div>
        <div class="form-group">
            <label for="text" class="col-sm-1 control-label">Testo</label>
            <div class="col-sm-11">
                <textarea id="" name="text" class="form-control" rows="10" placeholder="Testo"></textarea>
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

            document.querySelector('[data-pid="' + this.dataset.pid + '"].postPreview').addClass("show");
        }

        function closePreview(e) {

            document.querySelector('[data-pid="' + this.dataset.pid + '"].postPreview').removeClass("show");
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
