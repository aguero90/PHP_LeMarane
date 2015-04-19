<?php

require_once "../../utils/Autoloader.php";

        const COMMENT = 1;
        const IMAGE = 2;
        const POST = 3;



var_dump($_POST);

$dl = new MaraneDataLayerMySQL();
$dl->init();


switch ((int) $_POST["what"]) {

    case COMMENT:
        $comment = $dl->createComment();
        $comment->setAuthor($_POST["author"]);
        $comment->setText($_POST["text"]);
        $comment->setPost($dl->getPost((int) $_POST["postID"]));
        $dl->storeComment($comment);
        var_dump($comment);
        break;

    case IMAGE:
        $image = $dl->createImage();
        $image->setURL($_POST["URL"]);
        $image->setDescription($_POST["description"]);
        $image->setName($_POST["name"]);
        if ($_POST["banner"]) {
            $image->setBanner(true);
        } else {
            $image->setBanner(false);
        }

        $dl->storeImage($image);
        var_dump($image);
        break;

    case POST:
        $post = $dl->createPost();
        $post->setTitle($_POST["title"]);
        $post->setText($_POST["text"]);
        $post->setAdmin($dl->getAdmin((int) $_POST["adminID"]));
        $dl->storePost($post);
        var_dump($post);
        break;

    default:
        echo "URL NON VALIDA!";
        break;
}







