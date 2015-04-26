<?php

/**
 * Description of Post
 *
 * @author alex
 */
class PostController extends MaraneBaseController {

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        // prendiamo il post in questione dalla URL
        $this->getSmarty()->assign("post", $this->getDataLayer()->getPost((int) filter_input(INPUT_GET, POST_ID, FILTER_SANITIZE_NUMBER_INT)));


        $this->getSmarty()->assign("contentTemplate", "front/Post.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("front/Outline.tpl"); // mostriamo il template
    }

}
