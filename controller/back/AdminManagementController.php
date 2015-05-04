<?php

/**
 * Description of AdminManagementController
 *
 * @author alex
 */
class AdminManagementController extends MaraneBaseController {

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
        $this->goToAdminManagement();
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
        // Al momento, per quanto riguarda gli amministratori,
        // ci aspettiamo i dati in GET solo per effettuare la redirezione
        // => redirigiamo alla gestione degli amministratori
        $this->goToAdminManagement();
    }

    public function processRequestPOST() {

        if (!SecurityLayer::checkSession()) {

            // la sessione è scaduta
            $this->sessionExpired();
            return;
        }

        // la sessione NON è scaduta e possiamo analizzare i dati
        // ricevuti in POST

        if (isset($_POST["ia"])) {

            // se nella POST esiste il campo "ia", cioè "INSERT ADMIN"
            // => prendo i dati ed aggiungo l'amministratore
            $this->storeAdmin();
        } elseif (isset($_POST["ea"])) {

            // se nella POST esiste il campo "ea", cioè "EDIT ADMIN"
            // => prendo i dati e modifico l'amministratore
            $this->editAdmin();
        } elseif (isset($_POST["ra"])) {

            // se nella POST esiste il campo "ra", cioè "REMOVE ADMIN"
            // => rimuovo l'amministratore
            $this->removeAdmin();
        } else {

            // mi è arrivato qualcosa di strano
            // GESTIRE
        }

        $this->goToAdminManagement();
    }

    private function storeAdmin() {

        $admin = $this->getDataLayer()->createAdmin();
        $admin->setUsername(filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING));
        $admin->setPassword(md5(md5(md5(md5(md5(filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING)))))));

        $this->getDataLayer()->storeAdmin($admin);
    }

    private function editAdmin() {

        $admin = $this->getDataLayer()->getAdmin(filter_input(INPUT_POST, "pid", FILTER_SANITIZE_NUMBER_INT));

        $admin->setUsername(filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING));

        $this->getDataLayer()->storeAdmin($admin);
    }

    private function removeAdmin() {

        $this->getDataLayer()->removeAdmin($this->getDataLayer()->getAdmin(filter_input(INPUT_POST, "pid", FILTER_SANITIZE_NUMBER_INT)));
    }

    private function goToAdminManagement() {

        // prendiamo tutti i prodotti nel DB
        $admins = $this->getDataLayer()->getAdmins();
        $this->getSmarty()->assign("admins", $admins);
        $this->getSmarty()->assign("numberOfPages", sizeof($admins) / self::ITEMS_FOR_PAGE);
        $this->getSmarty()->assign("itemsForPage", self::ITEMS_FOR_PAGE);
        $this->getSmarty()->assign("sid", 3);


        $this->getSmarty()->assign("contentTemplate", "back/AdminManagement.tpl"); // diciamo quale template deve includere
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
