<?php
    require_once './app/models/escuderias.model.php';

    require_once './app/views/api.view.php';
    require_once './app/helpers/auth-api.helper.php';

class pruebaController {
        private $model;
        private $view;
        private $authHelper;
        
        private $data;

        public function __construct(){
            $this->model = new EscuderiasModel();
            $this->view = new ApiView();
            $this->authHelper = new AuthApiHelper();
            
            //lee el body del request
            $this->data = file_get_contents("php://input");
        }

        private function getData(){
            return json_decode($this->data);
        }

        function getAll(){
            var_dump("hola");
            die();
           // $escuderia = $this->model->getAll();
            //$this->view->response($escuderia, 201);
        }
    }