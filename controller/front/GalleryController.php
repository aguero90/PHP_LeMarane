<?php

/**
 * Description of Product
 *
 * @author alex
 */
class GalleryController extends MaraneBaseController {

    const ITEMS_FOR_PAGE = 24;

    public function error() {
        // mostra errore
    }

    public function processRequest() {


        // prendiamo tutti i prodotti nel DB
        $images = $this->getDataLayer()->getImages();

        $this->getSmarty()->assign("images", $images);
        $this->getSmarty()->assign("itemsForPage", self::ITEMS_FOR_PAGE);
        $this->getSmarty()->assign("numberOfPages", sizeof($images) / self::ITEMS_FOR_PAGE);
        $this->getSmarty()->assign("sid", 2);

        if (SecurityLayer::checkSession()) {

            $this->getSmarty()->assign("logged", true);
        }

        // servono all'outline
        $this->getSmarty()->assign("menu", "front/Menu.tpl");


        $this->getSmarty()->assign("logo", "front/Logo.tpl");
        $this->getSmarty()->assign("contentTemplate", "front/GalleryPage.tpl"); // diciamo quale template deve includere


        $this->getSmarty()->assign("footer", "front/Footer.tpl");

        // servono alla galleria
        $this->getSmarty()->assign("imageStructure", "front/Gallery_ImageStructure.tpl");
        $this->getSmarty()->assign("pagination", "front/Pagination.tpl");

        $this->getSmarty()->display("front/Outline.tpl"); // mostriamo il template
    }

}
