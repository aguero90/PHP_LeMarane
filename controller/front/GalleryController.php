<?php

/**
 * Description of Product
 *
 * @author alex
 */
class GalleryController extends MaraneBaseController {

    public function error() {
        // mostra errore
    }

    public function processRequest() {


        // prendiamo tutti i prodotti nel DB
        $this->getSmarty()->assign("images", $this->getDataLayer()->getImages());


        $this->getSmarty()->assign("contentTemplate", "front/Gallery.tpl"); // diciamo quale template deve includere
        $this->getSmarty()->display("Outline.tpl"); // mostriamo il template
    }

}
