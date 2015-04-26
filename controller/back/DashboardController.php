<?php

/**
 * Description of dashboardController
 *
 * @author alex
 */
class DashboardController extends MaraneBaseController {

    public function error() {
        // mostra errore
    }

    public function processRequest() {


        // prendiamo tutti i prodotti nel DB
        $this->getSmarty()->assign("news", $this->getDataLayer()->getPosts());
        $this->getSmarty()->assign("images", $this->getDataLayer()->getImages());
        $this->getSmarty()->assign("sid", 1);


        $this->getSmarty()->assign("contentTemplate", "back/Dashboard.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("back/Outline.tpl"); // mostriamo il template
    }

}
