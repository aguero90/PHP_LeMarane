
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
            {foreach $images as $image}
                <tr>
                    <td>{$image@iteration}</td>
                    <td>{$image->getName()}</td>
                    <td>{$image->getDescription()|truncate:50}</td>
                    <td>{$image->getURL()|truncate:50}</td>
                    <td>
                        <a class="previewButton" data-pid="{$image->getID()}" data-toggle="tooltip" data-placement="top" title="Anteprima">
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </a>
                        <a class="editButton" data-pid="{$image->getID()}" data-toggle="tooltip" data-placement="top" title="Modifica">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a class="removeButton" data-toggle="tooltip" data-placement="top" title="Rimuovi" data-toggle="modal" data-target=".removeNewsModal">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            {/foreach}
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



{foreach $images as $image}

    <!-- Lista delle anteprime
    ======================================================================== -->
    <div class="imagePreview" data-pid="{$image->getID()}">
        <a class="closePreviewButton closeTooltip" data-pid="{$image->getID()}" data-toggle="tooltip" data-placement="bottom" title="Chiudi anteprima">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </a>
        <div class="container-fluid no-padding">
            <img src="{$image->getURL()}" alt="{$image->getName()}" />
        </div>
    </div>


    <!-- Forms di edit
    ======================================================================== -->
    <div class="editFormContainer" data-pid="{$image->getID()}">
        <a class="closeEditFormButton closeTooltip" data-pid="{$image->getID()}" data-toggle="tooltip" data-placement="left" title="Chiudi anteprima">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </a>
        <form class="form-horizontal" action="" method="POST">
            <input type="hidden" name="pid" value="{$image->getID()}" />
            <div class="form-group">
                <label for="name{$image->getID()}" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name{$image->getID()}" name="name" value="{$image->getName()}" placeholder="Titolo">
                </div>
            </div>
            <div class="form-group">
                <label for="description{$image->getID()}" class="col-sm-2 control-label">Descrizione</label>
                <div class="col-sm-10">
                    <textarea id="description{$image->getID()}" name="description" class="form-control" rows="10" placeholder="Descrizione">{$image->getDescription()}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="handlebarsButton" name="ep" value="1" class="btn btn-default">Modifica</button>
                </div>
            </div>
        </form>
    </div>

{/foreach}


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


