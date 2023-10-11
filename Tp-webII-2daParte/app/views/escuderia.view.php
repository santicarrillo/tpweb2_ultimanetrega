<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';


class EscuderiasView {
    
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }


    function showFormula1($formula1) {

        $this->smarty->assign('count', count($formula1));
        $this->smarty->assign('formula1', $formula1);

        $this->smarty->display('escuderiaList.tpl');
        
    }

    function showEscuderias(){
        header("Location: " .BASE_URL."escuderia");
    }

    function showEscuderia(){
        header("Location: " .BASE_URL."escuderia");
    }

    function printEdit($editarescuderia, $escuderia){
        $this->smarty->assign('count', count($escuderia));
        $this->smarty->assign('editarescuderia', $editarescuderia);
        $this->smarty->assign('escuderia', $escuderia);

        $this->smarty->display('escuderiaList.tpl');
    }


    function showMore($escuderias){
        $this->smarty->assign("escuderias", $escuderias);
        $this->smarty->display('about-escuderias.tpl');
    }

}
