<?php
    require_once './app/models/piloto.model.php';
    require_once './app/views/api.view.php';
    require_once './app/helpers/auth-api.helper.php';
    
    class ProductApiController {
        private $model;
        private $view;
        private $authHelper;
        
        private $data;

        public function __construct(){
            $this->model = new PilotoModel();
            $this->view = new ApiView();
            $this->authHelper = new AuthApiHelper();
            
            //lee el body del request
            $this->data = file_get_contents("php://input");
        }

        private function getData(){
            return json_decode($this->data);
        }
        
        //mi hembro a: Listado ordenado
        function get($params = []) {
            if (empty($params)){

                $pilotos = $this->model->getpilotos();
                $this->view->response($pilotos, 200);   


                header('Content-Type: application/json');
                echo json_encode($pilotos);    
        }







        // Miembro b: Obtener un elemento (piloto) por ID
        function getPiloto($params = null){
            $id = $params[':ID'];
            $piloto = $this->model->get($id);

            if($piloto){
                $this->view->response($piloto);                
            }
            else{
                $this->view->response("el piloto con el id $id no existe", 404);
            }
        }

        //Miembro b: POST, insertar o crear un elemento (piloto)
        function insertPiloto($params = null){
            if(!$this->authHelper->isLoggedIn()){
                $this->view->response("No esta logeado", 401);
                return;
            }
            $piloto = $this->getData();

            if (empty($piloto->nombre)||empty($piloto->campeonato)||empty($piloto->puntos)||empty($piloto->id_escuderia)){
                $this->view->response("Complete los datos", 400);
            } else {
                $id = $this->model->insert($piloto->nombre, $piloto->campeonato, $piloto->puntos, $piloto->id_escuderia);
                $piloto = $this->model->get($id);
                $this->view->response($piloto, 201);
            }
        }

        //En el caso que la ruta sea incorrecta
        function error(){
            return $this->view->response("La ruta es incorrecta", 400);
        }
    }
}