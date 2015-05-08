<?php

/**
 * Description of ImagesController
 *
 * @author alex
 */
class ImageManagementController extends MaraneBaseController {

    const ITEMS_FOR_PAGE = 15;

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        if (!SecurityLayer::checkSession()) {

            // la sessione è scaduta
            $this->sessionExpired();
            return;
        }

        // La sessione NON è scaduta e possiamo vedere cosa dobbiamo fare
        //
        // se sono qui è stata effettuata una semplice redirezione
        // cioè sto solamente navigando
        $this->goToImageManagement();
    }

    public function processRequestGET() {

        if (!SecurityLayer::checkSession()) {


            // la sessione è scaduta
            $this->sessionExpired();
            return;
        }


        // la sessione NON è scaduta e possiamo analizzare i dati
        // ricevuti in GET
        //
        // Al momento, per quanto riguarda le immagini, ci aspettiamo i dati in GET
        // solo per effettuare la redirezione
        // => redirigiamo alla gestione delle immagini
        $this->goToImageManagement();
    }

    public function processRequestPOST() {

        if (!SecurityLayer::checkSession()) {

            // la sessione è scaduta
            $this->sessionExpired();
            return;
        }

        // la sessione NON è scaduta e possiamo analizzare i dati
        // ricevuti in POST

        if (isset($_POST["ii"])) {

            // se nella POST esiste il campo "ii", cioè "INSERT IMAGE"
            // => prendo i dati ed aggiungo l'immagine
            $this->storeImage();
        } elseif (isset($_POST["ei"])) {

            // se nella POST esiste il campo "ei", cioè "EDIT IMAGE"
            // => prendo i dati e modifico l'immagine
            $this->editImage();
        } elseif (isset($_POST["ri"])) {

            // se nella POST esiste il campo "ri", cioè "REMOVE IMAGE"
            // => rimuovo l'immagine
            $this->removeImage();
        } else {

            // mi è arrivato qualcosa di strano
            // GESTIRE
        }


        $this->goToImageManagement();
    }

    private function storeImage() {

        $image = $this->getDataLayer()->createImage();
        $image->setRealName(filter_input(INPUT_POST, "realName", FILTER_SANITIZE_STRING));
        $image->setFakeName(filter_input(INPUT_POST, "fakeName", FILTER_SANITIZE_URL));
        $image->setDescription(filter_input(INPUT_POST, "description", FILTER_SANITIZE_STRING));

        $this->getDataLayer()->storeImage($image);
    }

    private function editImage() {

        $image = $this->getDataLayer()->getImage(filter_input(INPUT_POST, "pid", FILTER_SANITIZE_NUMBER_INT));

        $image->setRealName(filter_input(INPUT_POST, "realName", FILTER_SANITIZE_STRING));
        $image->setFakeName(filter_input(INPUT_POST, "fakeName", FILTER_SANITIZE_URL));
        $image->setDescription(filter_input(INPUT_POST, "description", FILTER_SANITIZE_STRING));

        $this->getDataLayer()->storeImage($image);
    }

    private function removeImage() {

        $this->getDataLayer()->removeImage($this->getDataLayer()->getImage(filter_input(INPUT_POST, "pid", FILTER_SANITIZE_NUMBER_INT)));
    }

    private function goToImageManagement() {

        // prendiamo tutti i prodotti nel DB
        $images = $this->getDataLayer()->getImages();
        $this->getSmarty()->assign("images", $images);
        $this->getSmarty()->assign("numberOfPages", sizeof($images) / self::ITEMS_FOR_PAGE);
        $this->getSmarty()->assign("itemsForPage", self::ITEMS_FOR_PAGE);
        $this->getSmarty()->assign("sid", 2);


        $this->getSmarty()->assign("contentTemplate", "back/ImageManagement.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->assign("pagination", "back/Pagination.tpl");
        $this->getSmarty()->display("back/Outline.tpl"); // mostriamo il template
    }

    private function sessionExpired() {

        // la sessione è scaduta
        // => rediregiamo al login
        $loginController = new LoginController();
        $loginController->processRequest();
    }

}
