<?php
require_once './app/models/piloto.model.php';
require_once './app/views/piloto.view.php';

class PilotoController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new PilotoModel();
        $this->view = new PilotoView();
        
    }

    public function showPilotos() {
        // obtengo tareas del controlador
        $pilotos = $this->model->getPilotos();
        
        // muestro las tareas desde la vista
        $this->view->showPilotos($pilotos);
    }

    public function addPiloto() {

        // obtengo los datos del usuario
        $nombre = $_POST['nombre'];
        $campeonato = $_POST['campeonato'];
        $puntos = $_POST['puntos'];

        // validaciones
        if (empty($nombre) || empty($campeonato)) {
            $this->view->showError("Debe completar todos los campos");
            return;
        }

        $id = $this->model->insertPiloto($nombre, $campeonato, $puntos);
        if ($id) {
            header('Location: ' . BASE_URL);
        } else {
            $this->view->showError("Error al insertar la tarea");
        }
    }

    function removePiloto($id) {
        $this->model->deletePiloto($id);
        header('Location: ' . BASE_URL);
    }
    
    function editPiloto($id) {
        $nombre = $_POST['nombre'];
        $campeonato = $_POST['campeonato'];
        $puntos = $_POST['puntos'];

        $editpiloto = $this->model->editPiloto($nombre, $campeonato,$puntos, $id);
        $piloto = $this->model->getAllPilotos();
        
        $this->view->printEdit($editpiloto, $piloto);
        header("Location: " . BASE_URL . 'list');
    }

}