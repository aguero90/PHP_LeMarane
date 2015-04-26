<?php

/**
 * Description of NewsController
 *
 * @author alex
 */
class NewsController extends MaraneBaseController {

    public function error() {
        // mostra errore
    }

    public function processRequest() {


        // prendiamo tutti i prodotti nel DB
        $this->getSmarty()->assign("news", $this->getDataLayer()->getPosts());
        $this->getSmarty()->assign("sid", 2);


        $this->getSmarty()->assign("contentTemplate", "back/News.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("back/Outline.tpl"); // mostriamo il template
    }

}
