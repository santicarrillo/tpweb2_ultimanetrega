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
        $this->view->showMore($escuderias);
    }

    public function addEscuderia() {

        $equipos = $_POST['equipos'];
        $pilotos = $_POST['pilotos'];
        $description = $_POST['description'];
        $puntos_equipo = $_POST['puntos_equipo'];
        $pos_equipos = $_POST['pos_equipos'];

        if (empty($equipos) || empty($pilotos) || empty($puntos_equipo) || empty($pos_equipos)) 
        

        if (($_FILES['img']['type'] == "image/jpg" || $_FILES['img']['type'] == "image/jpeg" || $_FILES['img']['type'] == "image/png")){

            $id = $this->model->insertEscuderia($equipos, $pilotos, $_FILES['img']['tmp_name'], $description, $puntos_equipo, $pos_equipos);
        } else {
            $id = $this->model->insertEscuderia($equipos, $pilotos, $img = null, $description, $puntos_equipo, $pos_equipos);
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