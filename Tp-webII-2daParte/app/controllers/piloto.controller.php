<?php
require_once './app/models/piloto.model.php';
require_once './app/views/piloto.view.php';
require_once './app/models/escuderia.model.php';

class PilotoController {
    private $model;
    private $view;
    private $modelEscuderias;

    public function __construct() {
        $this->model = new PilotoModel();
        $this->view = new PilotoView();
        $this->modelEscuderias = new EscuderiasModel();
        
    }

    public function showFormula1(){
        $formula1 = $this->model->getAllFormula1();
        $this->view->showFormula1($formula1);
    }

    public function showPilotos($id) {
        $pilotos = $this->model->getPilotos($id);
        $this->view->showPilotos($pilotos);
    }

    public function showPiloto() {
        $formula1 = $this->model->getAllFormula1();
        $this->view->showPiloto($formula1);
        
    }


    function showAll(){
        $pilotos = $this->model->getAll();

        $this->view->showAll($pilotos);
    }

    public function addPiloto() {
        $nombre = $_POST['nombre'];
        $campeonato = $_POST['campeonato'];
        $puntos = $_POST['puntos'];

        $this->model->insertPiloto($nombre, $campeonato, $puntos);
        header('Location: ' . BASE_URL );
        
    }

    function removePiloto($id) {
        $this->model->deletePilotoById($id);
        header('Location: ' . BASE_URL);
    }

    function editView($id){
        $escuderias = $this->modelEscuderias->getAllEscuderias();
        $pilotos = $this->model->getPiloto($id);
        $this->view->editPiloto($pilotos, $escuderias);
    }

    function edit($id){
        if((isset($_POST['nombre']) && isset($_POST['campeonato']) && isset($_POST['puntos']) && isset($_POST['id_escuderia']))
            && (!empty($_POST['nombre']) && !empty($_POST['campeonato']) && !empty($_POST['puntos']) && !empty($_POST['id_escuderia']))){
            
            $nombre = $_POST['nombre'];
            $campeonato = $_POST['campeonato'];
            $puntos = $_POST['puntos'];
            $id_escuderia = $_POST['id_escuderia'];

            $this->model->editById($nombre, $campeonato, $puntos, $id_escuderia, $id);
            $this->view->success(true);
        }else {
            $this->view->success(false, "Faltan datos obligatorios");
            die();
        }
    }
    
    

}