<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class AboutView {

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }


    function showAbout($formula1) {

        $this->smarty->assign('count', count($formula1));
        $this->smarty->assign('formula1', $formula1);
        
        $this->smarty->display('about.tpl');
        

    }
}
