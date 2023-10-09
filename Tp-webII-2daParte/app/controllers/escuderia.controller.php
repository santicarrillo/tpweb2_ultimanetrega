<?php
require_once './app/views/escuderia.view.php';
require_once './app/models/escuderia.model.php';

class EscuderiasController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new EscuderiasModel();
        $this->view = new EscuderiasView();
    } 

    public function showEscuderias(){
        $escuderias = $this->model->getEscuderias();
        $this->view->showEscuderias($escuderias);    
    }
}