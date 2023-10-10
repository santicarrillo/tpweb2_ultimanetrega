<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class PilotosByEscuderiaview {

    private $smarty;
    
    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    
    }
        
    function showPilotosByEscuderias($PilotosByEscuderia) {
        // asigno variables al tpl smarty

        $this->smarty->assign('count', count($PilotosByEscuderia));
        $this->smarty->assign('PilotosByEscuderia', $PilotosByEscuderia); 

        // mostrar el tpl
        $this->smarty->display('pilotosByescuderia.tpl');  
    }

    function showFormula1(){
        header("Location: ".BASE_URL."libros");
    }

    function showPilotosByEscuderia($PilotosByEscuderia) {
        // asigno variables al tpl smarty
        $this->smarty->assign('PilotosByEscuderia', $PilotosByEscuderia);
        // mostrar el tpl
        $this->smarty->display('AutorByLibrosList.tpl');
    }

}