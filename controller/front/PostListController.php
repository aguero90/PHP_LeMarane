<?php

/**
 * Description of PostList
 *
 * @author alex
 */
class PostListController extends MaraneBaseController {

    const ITEMS_FOR_PAGE = 12;

    public function error() {
        // mostra errore
    }

    public function processRequest() {

        // prendiamo tutti i post dal DB ed assegniamoli alla variabile $posts
        $posts = $this->getDataLayer()->getPosts();

        $this->getSmarty()->assign("posts", $posts);
        $this->getSmarty()->assign("itemsForPage", self::ITEMS_FOR_PAGE);
        $this->getSmarty()->assign("numberOfPages", sizeof($posts) / self::ITEMS_FOR_PAGE);
        $this->getSmarty()->assign("sid", 1);


        // servono all'outline
        $this->getSmarty()->assign("menu", "front/Menu.tpl");

        $this->getSmarty()->assign("logo", "front/Logo.tpl");
        $this->getSmarty()->assign("contentTemplate", "front/PostListPage.tpl"); // diciamo quale template deve includere

        $this->getSmarty()->assign("footer", "front/Footer.tpl");

        // servono alla galleria
        $this->getSmarty()->assign("postStructure", "front/PostList_PostStructure.tpl");
        $this->getSmarty()->assign("pagination", "front/Pagination.tpl");

        $this->getSmarty()->display("front/Outline.tpl"); // mostriamo il template
    }

}
