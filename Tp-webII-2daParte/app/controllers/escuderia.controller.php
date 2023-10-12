<?php
require_once './app/views/escuderia.view.php';
require_once './app/models/escuderia.model.php';

class EscuderiasController {
    private $model;
    private $view;
    private $modelPilotos;


    public function __construct() {
        $this->model = new EscuderiasModel();
        $this->view = new EscuderiasView();
        $this->modelPilotos = new PilotoModel();
    } 

    public function showFormula1(){
        $formula1 = $this->model->getAllFormula1();
        $this->view->showFormula1($formula1);
    }

    public function showEscuderias($id){
        $escuderias = $this->model->getEscuderias($id);
        $this->view->showEscuderias($escuderias);    
    }

    public function showEscuderia() {
        $formula1 = $this->model->getAllFormula1();
        $this->view->showEscuderia($formula1);
        
    }

    function showMore($id){
        $escuderias = $this->model->getMore($id);
        $pilotos = $this->modelPilotos->getPilotos($escuderias->id);

        $this->view->showMore($escuderias,$pilotos);
    }

    public function addEscuderia() {

        if((isset($_POST['equipos'])&&isset($_POST['pilotos'])&&isset($_POST['description'])&&isset($_POST['puntos_equipo'])&&isset($_POST['pos_equipos']))
            &&(!empty($_POST['equipos'])&&!empty($_POST['pilotos'])&&!empty($_POST['description'])&&!empty($_POST['puntos_equipo'])&&!empty($_POST['pos_equipos']))){
            
            $equipos = $_POST['equipos'];
            $puntos_equipo = $_POST['puntos_equipo'];
            $description = $_POST['description'];
            $pilotos = $_POST['pilotos'];
            $pos_equipos = $_POST['pos_equipos'];
        
            $id = $this->model->insertEscuderia($equipos, $pilotos, $description, $puntos_equipo, $pos_equipos);
            $this->view->success(true);
        } else {
            $this->view->success(false,"Faltan datos obligatorios");
        }

        header("Location: " . BASE_URL . 'escuderias');
    }

    function removeEscuderia($id) {
        $this->model->deleteEscuderiaById($id);
        header('Location: ' . BASE_URL);
    }


    function editar($id){
        if((isset($_POST))&&(!empty($_POST))){
            $equipos = $_POST['equipos'];
            $pilotos = $_POST['pilotos'];
            $puntos_equipo = $_POST['puntos_equipo'];
            $pos_equipos = $_POST['pos_equipos'];

        $this->model->updateEscuderia($id, $equipos, $pilotos, $puntos_equipo, $pos_equipos);
        header("Location: " . BASE_URL . 'form_altaEscuderia');
        }
    }
    function editPilotos($id) {
        //validar entrada de datos
        
        $equipos = $_POST['equipos'];
        $pilotos = $_POST['pilotos'];
        $puntos_equipo = $_POST['puntos_equipo'];
        $pos_equipos = $_POST['pos_equipos'];

        $editarescuderia = $this->model->editEscuderia($equipos, $pilotos, $puntos_equipo, $pos_equipos, $id);
        $escuderia = $this->model->getAllEscuderias();
        
        $this->view->printEdit($editarescuderia, $escuderia);
        header("Location: " . BASE_URL . 'form_altaEscuderia');
        
    }
}