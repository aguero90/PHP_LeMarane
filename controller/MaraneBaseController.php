<?php

/**
 * Description of FeMBaseController
 *
 * @author alex
 */
class MaraneBaseController {

    private $dataLayer;
    private $smarty;

    public function __construct() {

        $this->dataLayer = new MaraneDataLayerMySQL();
        $this->dataLayer->init();
        $this->smarty = new SmartySetup();
    }

    public function getDataLayer() {
        return $this->dataLayer;
    }

    public function getSmarty() {
        return $this->smarty;
    }

}
