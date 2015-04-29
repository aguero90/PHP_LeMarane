<?php

session_start();

require_once "utils/Autoloader.php";

// definiamo alcune costanti
define("LOGIN", 0);
define("NEWS", 1);
define("IMAGE", 2);

define("SECTION_ID", "sid");

if (!MyUtils::isEmpty($_GET)) {

    dispatcherGET();
} elseif (!MyUtils::isEmpty($_POST)) {

    dispatcherPOST();
} else {

    SecurityLayer::checkSession() ? goToPostManagement() : goToLogin();
}

function dispatcherGET() {

    switch (filter_input(INPUT_GET, SECTION_ID, FILTER_SANITIZE_NUMBER_INT)) {

        case LOGIN:
            $loginController = new LoginController();
            $loginController->processRequestGET();
            break;

        case NEWS:
            $postManagementController = new PostManagementController();
            $postManagementController->processRequestGET();
            break;

        case IMAGE:
            $imageManagementController = new ImageManagementController();
            $imageManagementController->processRequestGET();
            break;

        default:
            // errore, inserita url non valida
            echo 'errore, inserita url non valida';
            break;
    }
}

function dispatcherPOST() {

    switch (filter_input(INPUT_POST, SECTION_ID, FILTER_SANITIZE_NUMBER_INT)) {

        case LOGIN:
            $loginController = new LoginController();
            $loginController->processRequestPOST();
            break;

        case NEWS:
            $postManagementController = new PostManagementController();
            $postManagementController->processRequestPOST();
            break;

        case IMAGE:
            $imageManagementController = new ImageManagementController();
            $imageManagementController->processRequestPOST();
            break;

        default:
            // errore, inserita url non valida
            echo 'errore, inserita url non valida';
            break;
    }
}

function goToLogin() {
    $loginController = new LoginController();
    $loginController->processRequest();
}

function goToPostManagement() {
    $postManagementController = new PostManagementController();
    $postManagementController->processRequest();
}
