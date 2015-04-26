<?php

require_once "utils/Autoloader.php";

// definiamo alcune costanti
define("DASHBOARD", 1);
define("NEWS", 2);
define("IMAGE", 3);

define("SECTION_ID", "sid");
define("POST_ID", "pid");


if (!MyUtils::isEmpty($_GET)) {

//    var_dump($_GET);

    switch (filter_input(INPUT_GET, SECTION_ID, FILTER_SANITIZE_NUMBER_INT)) {

        case DASHBOARD:
            $dashboardController = new DashboardController();
            $dashboardController->processRequest();
            break;

        case NEWS:
            $newsController = new NewsController();
            $newsController->processRequest();
            break;

        case IMAGE:
            $imagesController = new ImagesController();
            $imagesController->processRequest();
            break;

        default:
            // errore, inserita url non valida
            echo 'errore, inserita url non valida';
            break;
    }
} else {
    $loginController = new LoginController();
    $loginController->processRequest();
}

