
<!-- TABELLA IMMAGINI
============================================================================ -->

<div id="myCarousel">

    <div id="carouselSlider">

        <!-- TABELLE -->
        {foreach $images as $image}

            {if $image@iteration % $itemsForPage === 1}
                <!-- Se è il primo della nuova pagina, ricreo la tabella -->

                <div id="page{(($image@iteration - 1) / $itemsForPage) + 1}" class="tableManagement table-responsive page" data-number="{(($image@iteration - 1) / $itemsForPage) + 1}">
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

                        {/if}

                        <tr id="JS_relativeRow{$image->getID()}">
                            <td>{$image@iteration}</td>
                            <td>{$image->getRealName()}</td>
                            <td data-fullFakeName="{$image->getFakeName()}">{$image->getFakeName()|truncate:25:" ... "}</td>
                            <td data-fullDescription="{$image->getDescription()}">{$image->getDescription()|truncate:50:" ... "}</td>
                            <td>
                                <a class="previewButton" data-pid="{$image->getID()}" data-toggle="tooltip" data-placement="top" title="Anteprima">
                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                </a>
                                <a class="editButton" data-pid="{$image->getID()}" data-toggle="tooltip" data-placement="top" title="Modifica">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>
                                <a class="removeButton" data-pid="{$image->getID()}" data-toggle="tooltip" data-placement="top" title="Rimuovi" data-toggle="modal" data-target=".removeNewsModal">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </a>
                            </td>
                        </tr>

                        {if $image@iteration % $itemsForPage === 0 || $image@last}
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
            {/if}

        {/foreach}

    </div>

    {include file=$pagination}

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


