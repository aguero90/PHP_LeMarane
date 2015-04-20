<?php

require_once "utils/Autoloader.php";

// definiamo alcune costanti
define("POST", 1);
define("POST_LIST", 2);
define("GALLERY", 3);

define("SECTION_ID", "sid");
define("POST_ID", "pid");


if (!MyUtils::isEmpty($_GET)) {

    var_dump($_GET);

    switch (filter_input(INPUT_GET, SECTION_ID, FILTER_SANITIZE_NUMBER_INT)) {

        case POST:
            echo 'POST';
            $postController = new PostController();
            $postController->processRequest();
            break;

        case POST_LIST:
            echo 'POST_LIST';
            $postListController = new PostListController();
            $postListController->processRequest();
            break;

        case GALLERY:
            echo 'GALLERY';
            $galleryController = new GalleryController();
            $galleryController->processRequest();
            break;

        default:
            // errore, inserita url non valida
            echo 'errore, inserita url non valida';
            break;
    }
} else {
    $postListController = new PostListController();
    $postListController->processRequest();
}


