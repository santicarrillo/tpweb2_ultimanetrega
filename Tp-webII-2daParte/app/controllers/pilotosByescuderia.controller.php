<?php 
require_once './app/models/pilotosByescuderia.model.php';
require_once './app/views/pilotosByescuderia.view.php';


class PilotosByEscuderiacontroller {
   
    private $model;
    private $view;
    
    public function __construct() {
        $this->model = new PilotosByEscuderiamodel();
        $this->view = new PilotosByEscuderiaview();
    }

    public function showPilotosByEscuderia() {
        $pilotos = $this->model->getPilotosByEscuderia();
        $this->view->showPilotosByEscuderia($pilotos);
    }

}