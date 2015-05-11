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

        if (SecurityLayer::checkSession()) {

            $this->getSmarty()->assign("logged", true);
        }

        // servono all'outline
        $this->getSmarty()->assign("menu", "front/Menu.tpl");

        $this->getSmarty()->assign("logo", "front/Logo.tpl");
        $this->getSmarty()->assign("contentTemplate", "front/PostPage.tpl"); // diciamo quale template deve includere

        $this->getSmarty()->assign("footer", "front/Footer.tpl");

        $this->getSmarty()->display("front/Outline.tpl"); // mostriamo il template
    }

}
