<?php

require_once "../../utils/Autoloader.php";

        const COMMENTS = 1;
        const IMAGES = 2;
        const POSTS = 3;
        const ADMINS = 4;



var_dump($_POST);

$dl = new MaraneDataLayerMySQL();
$dl->init();


switch ((int) $_POST["what"]) {

    case COMMENTS:
        $comments = $dl->getComments();
        var_dump($comments);
        break;

    case IMAGES:
        $images = $dl->getImages();
        var_dump($images);
        break;

    case POSTS:
        $posts = $dl->getPosts();
        var_dump($posts);
        break;

    case ADMINS:
        $products = $dl->getAdmins();
        var_dump($products);
        break;

    default:
        echo "URL NON VALIDA!";
        break;
}

