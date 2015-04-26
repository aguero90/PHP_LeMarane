<?php

/**
 * Description of SmartySetup
 *
 * @author alex
 */
class SmartySetup extends Smarty {

    function __construct() {
        parent::__construct();

        $this->setTemplateDir($_SERVER["DOCUMENT_ROOT"] . "/PHP_LeMarane/view/smarty/templates/");
        $this->setCompileDir($_SERVER["DOCUMENT_ROOT"] . "/PHP_LeMarane/view/smarty/templates_c/");
        $this->setConfigDir($_SERVER["DOCUMENT_ROOT"] . "/PHP_LeMarane/view/smarty/configs/");
        $this->setCacheDir($_SERVER["DOCUMENT_ROOT"] . "/PHP_LeMarane/view/smarty/cache/");

        // $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->caching = Smarty::CACHING_OFF; // solo per la fase di sviluppo
        $this->force_compile = true; // solo per la fase di sviluppo
        $this->assign('app_name', 'Le Marane');
    }

}
