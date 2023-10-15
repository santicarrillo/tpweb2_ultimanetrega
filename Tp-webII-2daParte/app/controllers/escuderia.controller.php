<?php
require_once './app/views/escuderia.view.php';
require_once './app/models/escuderia.model.php';
require_once './app/helper/auth.helper.php';

class EscuderiasController {
    private $model;
    private $view;
    private $modelPilotos;


    public function __construct() {
        $this->model = new EscuderiasModel();
        $this->view = new EscuderiasView();
        $this->modelPilotos = new PilotoModel();

        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    } 

    public function showFormula1(){
        $formula1 = $this->model->getAllFormula1();
        $this->view->showFormula1($formula1);
    }

    public function showEscuderias($id){
        $escuderias = $this->model->getEscuderia($id);
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
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        if((isset($_POST['equipos'])&&isset($_POST['pilotos'])&&isset($_POST['description'])&&isset($_POST['puntos_equipo'])&&isset($_POST['pos_equipos']))
            &&!empty($_POST['equipos'])&&!empty($_POST['pilotos'])&&!empty($_POST['description'])&&!empty($_POST['puntos_equipo'])&&!empty($_POST['pos_equipos'])){
            
            $equipos = $_POST['equipos'];
            $puntos_equipo = $_POST['puntos_equipo'];
            $description = $_POST['description'];
            $pilotos = $_POST['pilotos'];
            $pos_equipos = $_POST['pos_equipos'];
        
            $this->model->insertEscuderia($equipos, $pilotos, $description, $puntos_equipo, $pos_equipos);
            $this->view->success(true);
        } else {
            $this->view->success(false,"Faltan datos obligatorios");
        }

        header("Location: " . BASE_URL . 'escuderias');
    }

    function removeEscuderia($id) {
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        $this->model->deleteEscuderiaById($id);
        header('Location: ' . BASE_URL . 'escuderias' );
    }

    function editView($id){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        $escuderia = $this->model->getEscuderia($id);
        $this->view->editEscuderia($escuderia);
    }

    function edit($id){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        if((isset($_POST['equipos'])&&isset($_POST['pilotos'])&&isset($_POST['description'])&&isset($_POST['puntos_equipo'])&&isset($_POST['pos_equipos']))
            &&(!empty($_POST['equipos'])&&!empty($_POST['pilotos'])&&!empty($_POST['description'])&&!empty($_POST['puntos_equipo'])&&!empty($_POST['pos_equipos']))){
        
                $equipos = $_POST['equipos'];
                $pilotos = $_POST['pilotos'];
                $puntos_equipo = $_POST['puntos_equipo'];
                $description = $_POST['description'];
                $pos_equipos = $_POST['pos_equipos'];

            $escuderias = $this->model->editEquipoById($equipos,$pilotos,$puntos_equipo,$description,$pos_equipos,$id);
            
            $this->view->success(true);
        
        } else {
                $this->view->success(false, "Faltan datos obligatorios");
                die();
        }
    }

    function showByEscuderias($id){
        $escuderias = $this->model->getByEscuderias($id);
        $pilotos = $this->modelPilotos->getAll();
        $this->view->showAllEscuderias($escuderias, $pilotos);
    }
}