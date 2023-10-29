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

        function getPilotos($params = null){










            //Miembro b: filtrado
            if ((isset($_GET['field'])&&isset($_GET['value']))){
                $value = $_GET['value'];
                //se verifica que lo que se haya recibido por parametro GET pertenezca al array de opciones posibles
                if (in_array($_GET['field'], $fields))
                    $field = $_GET['field'];
                else
                    return $this->view->response("$field no es un campo existente de la tabla", 400);
            }
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