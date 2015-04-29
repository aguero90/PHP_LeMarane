
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

            {foreach $posts as $post}

                <tr id="JS_rowForPost{$post->getID()}">
                    <td>{$post@iteration}</td>
                    <td>{$post->getTitle()}</td>
                    <td data-fullText="{$post->getText()}" >{$post->getText()|truncate:50:" ... "}</td>
                    <td>{$post->getDate()->getDayOfMonth()}/{$post->getDate()->getMonth()}/{$post->getDate()->getYear()}</td>
                    <td>{$post->getAdmin()->getUsername()}</td>
                    <td>
                        <a class="previewButton" data-pid="{$post->getID()}" data-toggle="tooltip" data-placement="top" title="Anteprima">
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </a>
                        <a class="editButton" data-pid="{$post->getID()}" data-toggle="tooltip" data-placement="top" title="Modifica">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        <a class="removeButton" data-pid="{$post->getID()}" data-toggle="tooltip" data-placement="top" title="Rimuovi">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            {/foreach}
            <tr class="insertNewsRow">
                <td colspan="5">
                    Inserisci una nuova news
                </td>
                <td>
                    <a id="insertButton" data-toggle="tooltip" data-placement="top" title="Inserisci">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<!-- anteprima
======================================================================== -->
<div id="JS_postPreview" class="postPreview">
    <a id="JS_postPreviewCloseButton" class="closePreviewButton closeTooltip" data-toggle="tooltip" data-placement="bottom" title="Chiudi anteprima">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </a>
    <div class="container-fluid no-padding">
        <div id="postCardContainer" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="postCard">
                <header class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1 id="JS_postPreviewTitle" class="hooked"></h1>
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
                                <p id="JS_postPreviewText"></p>
                            </div>
                        </div>
                        <footer class="row">
                            <div class="postCardDate col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                <p class="flag" id="JS_postPreviewData"></p>
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
<div id="JS_editForm" class="editFormContainer">
    <a id="JS_editFormCloseButton" class="closeEditFormButton closeTooltip" data-toggle="tooltip" data-placement="left" title="Chiudi form">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </a>
    <form class="form-horizontal" action="admin.php" method="POST">
        <input type="hidden" name="sid" value="1" />
        <input type="hidden" name="pid" value="{$post->getID()}" />
        <div class="form-group">
            <label for="editTitle" class="col-sm-2 control-label">Titolo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="editTitle" name="title" placeholder="Titolo">
            </div>
        </div>
        <div class="form-group">
            <label for="insertImage" class="col-sm-2 control-label">Immagine</label>
            <div class="col-sm-10">
                <input type="url" class="form-control" id="insertImage" name="image"  placeholder="URL Immagine">
            </div>
        </div>
        <div class="form-group">
            <label for="editText" class="col-sm-2 control-label">Testo</label>
            <div class="col-sm-10">
                <textarea id="editText" name="text" class="form-control" rows="10" placeholder="Testo"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="handlebarsButton" name="ep" value="1" class="btn btn-default">Modifica</button>
            </div>
        </div>
    </form>
</div>


<!-- Form di insert
============================================================================ -->
<div id="JS_insertForm" class="insertFormContainer">
    <a id="JS_insertFormCloseButton" class="closeInsertFormButton closeTooltip" data-toggle="tooltip" data-placement="left" title="Chiudi form">
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
            <label for="insertImage" class="col-sm-2 control-label">Immagine</label>
            <div class="col-sm-10">
                <input type="url" class="form-control" id="insertImage" name="image"  placeholder="URL Immagine">
            </div>
        </div>
        <div class="form-group">
            <label for="insertText" class="col-sm-2 control-label">Testo</label>
            <div class="col-sm-10">
                <textarea idinserTtext name="text" class="form-control" rows="10" placeholder="Testo"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="handlebarsButton" name="ip" value="1" class="btn btn-default">Inserisci</button>
            </div>
        </div>
    </form>
</div>

<!-- Form di Remove
============================================================================ -->
<div id="JS_removeForm" class="removeFormContainer">
    <a id="JS_removeFormCloseButton" class="closeInsertFormButton closeTooltip" data-toggle="tooltip" data-placement="left" title="Chiudi form">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </a>
    <form class="form-horizontal" action="admin.php" method="POST">
        <input type="hidden" name="sid" value="1" />
        <input id="JS_removeFormPID" type="hidden" name="pid" />
        <div>
            <p>
                <span>Attenzione!</span>
                Stai per rimuovere il post "<b id="JS_removeFormTitle"></b>".
            </p>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="handlebarsButton" name="rp" value="1" class="btn btn-default">Rimuovi</button>
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

        // ANTEPRIMA
        // =====================================================================
        var relativePost; // questa variabile è condivisa tra tutti xD

        var previewButtons = document.querySelectorAll('.previewButton');
        var preview = {
            container: document.getElementById("JS_postPreview"),
            closeButton: document.getElementById("JS_postPreviewCloseButton"),
            title: document.getElementById("JS_postPreviewTitle"),
            text: document.getElementById("JS_postPreviewText"),
            date: document.getElementById("JS_postPreviewData")
        };


        for (var i = 0; i < previewButtons.length; i++) {

            previewButtons[i].addEventListener("click", showPreview);
        }

        preview.closeButton.addEventListener("click", closePreview);

        function showPreview(e) {

            // se il post è già visibile, vuol dire che l'utente sta
            // cercando di aprirne 2 insieme.
            // Ma noi non vogliamo questo, perciò quello aperto lo chiudiamo
            // ed apriamo quello nuovo xD
            if (preview.container.hasClass("show")) {
                preview.container.removeClass("show");
            }

            relativePost = document.getElementById("JS_rowForPost" + this.dataset.pid);

            // posso usare .cells[i] perchè stiamo parlando di una riga
            // di una tabella.
            // cells è un array contenente tutte le colonne di quella riga
            preview.title.innerHTML = relativePost.cells[1].innerHTML;
            preview.text.innerHTML = relativePost.cells[2].dataset.fulltext;
            preview.date.innerHTML = relativePost.cells[3].innerHTML;

            preview.container.addClass("show");
        }

        function closePreview(e) {

            preview.container.removeClass("show");
        }



        // MODIFICA
        // =====================================================================

        var editFormButtons = document.querySelectorAll('.editButton');
        var editForm = {
            container: document.getElementById("JS_editForm"),
            closeButton: document.getElementById("JS_editFormCloseButton"),
            title: document.getElementById("editTitle"),
            text: document.getElementById("editText")
        };

        for (var i = 0; i < editFormButtons.length; i++) {

            editFormButtons[i].addEventListener("click", showEditForm);
        }

        editForm.closeButton.addEventListener("click", closeEditForm);

        function showEditForm(e) {

            // se la form è già visibile, vuol dire che l'utente sta
            // cercando di aprirne 2 insieme.
            // Ma noi non vogliamo questo, perciò quello aperto la chiudiamo
            // ed apriamo quella nuovo xD
            if (editForm.container.hasClass("show")) {
                editForm.container.removeClass("show");
            }

            relativePost = document.getElementById("JS_rowForPost" + this.dataset.pid);

            // posso usare .cells[i] perchè stiamo parlando di una riga
            // di una tabella.
            // cells è un array contenente tutte le colonne di quella riga
            editForm.title.value = relativePost.cells[1].innerHTML;
            editForm.text.innerHTML = relativePost.cells[2].dataset.fulltext;

            editForm.container.addClass("show");
        }


        function closeEditForm(e) {

            editForm.container.removeClass("show");
        }


        // RIMUOVI
        // =====================================================================
        var removeFormButtons = document.querySelectorAll('.removeButton');
        var removeForm = {
            container: document.getElementById("JS_removeForm"),
            closeButton: document.getElementById("JS_removeFormCloseButton"),
            title: document.getElementById("JS_removeFormTitle"),
            input: document.getElementById("JS_removeFormPID")
        };

        for (var i = 0; i < removeFormButtons.length; i++) {

            removeFormButtons[i].addEventListener("click", showRemoveForm);
        }

        removeForm.closeButton.addEventListener("click", closeRemoveForm);

        function showRemoveForm(e) {

            // se la form è già visibile, vuol dire che l'utente sta
            // cercando di aprirne 2 insieme.
            // Ma noi non vogliamo questo, perciò quello aperto la chiudiamo
            // ed apriamo quella nuovo xD
            if (removeForm.container.hasClass("show")) {
                removeForm.container.removeClass("show");
            }

            relativePost = document.getElementById("JS_rowForPost" + this.dataset.pid);

            // posso usare .cells[i] perchè stiamo parlando di una riga
            // di una tabella.
            // cells è un array contenente tutte le colonne di quella riga
            removeForm.input.value = this.dataset.pid;
            removeForm.title.innerHTML = relativePost.cells[1].innerHTML;

            removeForm.container.addClass("show");
        }


        function closeRemoveForm(e) {

            removeForm.container.removeClass("show");
        }


        // INSERIMENTO
        // =====================================================================

        var insertFormButton = document.getElementById("insertButton");
        var insertForm = {
            container: document.getElementById("JS_insertForm"),
            closeButton: document.getElementById("JS_insertFormCloseButton")
        };

        insertFormButton.addEventListener("click", showInsertForm);
        insertForm.closeButton.addEventListener("click", closeInsertForm);


        function showInsertForm(e) {

            insertForm.container.addClass("show");
        }


        function closeInsertForm(e) {

            insertForm.container.removeClass("show");
        }

    });
</script>

