<?php
require_once './app/models/piloto.model.php';
require_once './app/views/piloto.view.php';
require_once './app/models/escuderia.model.php';
require_once './app/helper/auth.helper.php';

class PilotoController {
    private $model;
    private $view;
    private $modelEscuderias;

    public function __construct() {
        $this->model = new PilotoModel();
        $this->view = new PilotoView();
        $this->modelEscuderias = new EscuderiasModel();

        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        } 
        
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
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        if((isset($_POST['nombre'])&&isset($_POST['campeonato'])&&isset($_POST['puntos']))
            &&(!empty($_POST['nombre'])&&!empty($_POST['campeonato'])&&!empty($_POST['puntos']))){

            $nombre = $_POST['nombre'];
            $campeonato = $_POST['campeonato'];
            $puntos = $_POST['puntos'];

            $this->model->insertPiloto($nombre, $campeonato, $puntos);
            
            $this->view->success(true);
            }else {
                $this->view->success(false,"Faltan datos obligatorios");
            }
        
            header('Location: ' . BASE_URL );
        
    } 

    function removePiloto($id) {
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        $this->model->deletePilotoById($id);
        header('Location: ' . BASE_URL);
    }

    function showform($id){
        $this->view->showform($id);
    }

    function editView($id){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        $piloto = $this->model->getPiloto($id);
        $this->view->editPiloto($piloto);
    }

    function edit($id){
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();

        if((isset($_POST['nombre'])&&isset($_POST['campeonato'])&&isset($_POST['puntos']))
            &&(!empty($_POST['nombre'])&&!empty($_POST['campeonato'])&&!empty($_POST['puntos']))){
        
            $nombre = $_POST['nombre'];
            $campeonato = $_POST['campeonato'];
            $puntos = $_POST['puntos'];
            
            $pilotos = $this->model->editById($nombre,$campeonato,$puntos,$id);
            
            $this->view->success(true);
        
        } else {
                $this->view->success(false, "Faltan datos obligatorios");
                die();
        }
    }


}