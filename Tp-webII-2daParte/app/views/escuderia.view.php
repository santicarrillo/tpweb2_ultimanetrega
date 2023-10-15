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


    function showMore($escuderias, $pilotos){
        $this->smarty->assign("escuderias", $escuderias);
        $this->smarty->assign("pilotos", $pilotos);
        $this->smarty->display('about-escuderias.tpl');
    }

    function editEscuderia($escuderia){
        $this->smarty->assign("escuderia", $escuderia);
        $this->smarty->display('edit-equipos.tpl');

    }

    function success($success, $msg = null){
        $this->smarty->assign("success", $success);
        if (!empty($msg)) {
            $this->smarty->assign("msg", $msg);
        }
        $this->smarty->display('success.tpl');
    }

    function showAllEscuderias($escuderias,$pilotos){
        $this->smarty->assign("escuderias", $escuderias);
        $this->smarty->assign("pilotos", $pilotos);
        $this->smarty->display('escuderias.tpl');
    }

}
