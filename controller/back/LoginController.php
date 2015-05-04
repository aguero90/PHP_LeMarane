<?php

/**
 * Description of loginController
 *
 * @author alex
 */
class LoginController extends MaraneBaseController {

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        // se sono qui è stata effettuata una semplice redirezione
        // cioè sto solamente navigando
        $this->goToLogin();
    }

    public function processRequestGET() {

        // il login dovrebbe ricevere solo dati in POST
        // quindi è successo qualcosa di strano se sono arrivati in GET
        // perciò rimando semplicemente al login
        $this->goToLogin();
    }

    public function processRequestPOST() {

        if ($this->checkLoginData() && !MyUtils::isEmpty($user = $this->getAdminByData())) {

            // tutti i dati sono stati inseriti && sono corretti
            // => creo la sessione e lo faccio accedere al back-end
            //
            // Marane Admin ID = MAID
            $_SESSION["MAID"] = $user->getID();
            // Marane Admin Username = MAU
            $_SESSION["MAU"] = $user->getUsername();


            $postManagementController = new PostManagementController();
            $postManagementController->processRequest();
        } else {

            // username e/o password errate o non inserite
            // perciò redirigo al login
            $this->goToLogin();
        }
    }

    private function checkLoginData() {
        return !(MyUtils::isEmpty($_POST) || MyUtils::isEmpty($_POST["username"]) || MyUtils::isEmpty($_POST["password"]));
    }

    private function getAdminByData() {

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

        return $this->getDataLayer()->getAdmin($username, md5(md5(md5(md5(md5($password))))));
    }

    private function goToLogin() {

        // $this->getSmarty()->assign("contentTemplate", "front/Gallery.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("back/Login.tpl"); // mostriamo il template
    }

}
