<?php

/**
 * Description of PostList
 *
 * @author alex
 */
class PostListController extends MaraneBaseController {

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        // prendiamo tutti i post dal DB ed assegniamoli alla variabile $posts
        $this->getSmarty()->assign("posts", $this->getDataLayer()->getPosts());


        $this->getSmarty()->assign("contentTemplate", "front/PostList.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("Outline.tpl"); // mostriamo il template
    }

}
