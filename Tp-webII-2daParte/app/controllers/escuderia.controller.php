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

    public function addEscuderia() {

        // obtengo los datos del usuario
        $equipos = $_POST['equipos'];
        $pilotos = $_POST['pilotos'];
        $puntos_equipo = $_POST['puntos_equipo'];
        $pos_equipos = $_POST['pos_equipos'];

        // validaciones
        if (empty($equipos) || empty($pilotos) || empty($puntos_equipo) || empty($pos_equipos)) {
            $this->view->showError("Debe completar todos los campos");
            return;
        }

        $id = $this->model->insertEscuderia($equipos, $pilotos, $puntos_equipo, $pos_equipos);
        if ($id) {
            header('Location: ' . BASE_URL);
        } else {
            $this->view->showError("Error al insertar la tarea");
        }
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