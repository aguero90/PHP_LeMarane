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

        if (MyUtils::isEmpty($_POST) || MyUtils::isEmpty($_POST["username"]) || MyUtils::isEmpty($_POST["username"]) || !$this->checkLoginData()) {

            $this->goToLogin();
        } else {

            $this->goToDashboard();
        }
    }

    public function goToLogin() {

        // $this->getSmarty()->assign("contentTemplate", "front/Gallery.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("back/Login.tpl"); // mostriamo il template
    }

    public function checkLoginData() {

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

        return $this->getDataLayer()->getAdmin($username, md5(md5($password))) !== null;
    }

    public function goToDashboard() {

        $dashboardController = new DashboardController();
        $dashboardController->processRequest();
    }

}
