<?php

/**
 * Description of ImagesController
 *
 * @author alex
 */
class ImageManagementController extends MaraneBaseController {

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

        if (MyUtils::exist($_POST["ii"])) {

            // se nella POST esiste il campo "ii", cioè "INSERT IMAGE"
            // => prendo i dati ed aggiungo l'immagine
            $this->storeImage();
        } elseif (MyUtils::exist($_POST["ei"])) {

            // se nella POST esiste il campo "ei", cioè "EDIT IMAGE"
            // => prendo i dati e modifico l'immagine
            $this->editIMAGE();
        } elseif (MyUtils::exist($_GET["ri"])) {

            // se nella POST esiste il campo "ri", cioè "REMOVE IMAGE"
            // => rimuovo l'immagine
            $this->removeImage();
        } else {

            // mi è arrivato qualcosa di strano
            // GESTIRE
        }
    }

    private function storeImage() {

    }

    private function editImage() {

    }

    private function removeImage() {

    }

    private function goToImageManagement() {

        // prendiamo tutti i prodotti nel DB
        $this->getSmarty()->assign("images", $this->getDataLayer()->getImages());
        $this->getSmarty()->assign("sid", 2);


        $this->getSmarty()->assign("contentTemplate", "back/ImageManagement.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("back/Outline.tpl"); // mostriamo il template
    }

    private function sessionExpired() {

        // la sessione è scaduta
        // => rediregiamo al login
        $loginController = new LoginController();
        $loginController->processRequest();
    }

}
