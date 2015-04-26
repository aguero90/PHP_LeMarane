<?php

/**
 * Description of ImagesController
 *
 * @author alex
 */
class ImagesController extends MaraneBaseController {

    public function error() {
        // mostra errore
    }

    public function processRequest() {


        // prendiamo tutti i prodotti nel DB
        $this->getSmarty()->assign("images", $this->getDataLayer()->getImages());
        $this->getSmarty()->assign("sid", 3);


        $this->getSmarty()->assign("contentTemplate", "back/Images.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("back/Outline.tpl"); // mostriamo il template
    }

}
