<?php
    require_once './app/models/piloto.model.php';
    require_once './app/views/api.view.php';
    require_once './app/helpers/auth-api.helper.php';
    
    class PilotoApiController {
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
        // alumno  A llama y ordena el listado
        function getPilotos($params = null){
            $pilotos = null;
            // Campos de la tabla
            $fields = array('id', 'nombre', 'description', 'campeonato', 'puntos', 'sale');
            // Tipos de orden
            $orderType = array('asc','desc');
            // Total de registros de la tabla
            $total = $this->model->count();
            
            //Defino valores por defecto
            $sort = $fields[0];
            $order = $orderType[0];
            $limit = $total;
            $offset = 0;
            $field = null;
            $value = null;
            
            
             //Miembro b: filtrado
                
                  if ((isset($_GET['field'])&&isset($_GET['value']))){
                       $value = $_GET['value'];
                 //se verifica que lo que se haya recibido por parametro GET pertenezca al array de opciones posibles
                     if (in_array($_GET['field'], $fields))
                          $field = $_GET['field'];
                    else
                        return $this->view->response("$field no es un campo existente de la tabla", 400);
                 }
            
               
                    
            //Ordenado por un campo asc o desc Alumno A
            if ((isset($_GET['sort'])&&isset($_GET['order']))){
                // Verifica que lo que se haya recibido por parametro GET pertenezca al array de opciones posibles
                if (in_array($sort, $fields)&&in_array($order, $orderType)){
                    $sort = $_GET['sort'];
                    $order = $_GET['order'];   
                } 
                else 
                    return $this->view->response("La ruta es incorrecta", 400);

             }
             //Paginacion Alumno A 
            if ((isset($_GET['limit'])&&(isset($_GET['pag'])))){
                if((int)$_GET['limit'] <= $total){
                    $limit = (int)$_GET['limit'];
                    $pages = round($total/$limit);
                    if ((int)$_GET['pag']<=$pages){
                        $page = (int)$_GET['pag'];                     
                        $offset = $limit * ($page-1);
                    } else {
                        return $this->view->response("Las paginas existentes son $pages", 400);
                    }
                } else {
                        return $this->view->response("El limite debe ser menor a $total", 400);
                }
            }

         }
            function editProduct($params = null){
                if(!$this->authHelper->isLoggedIn()){
                        $this->view->response("No estas logeado", 401);
                        return;
                    }
                $id = $params[':ID'];
                $pilotos = $this->model->get($id);
                if($pilotos){
                    $pilotos = $this->getData();
                    if (empty($pilotos->nombre)||empty($pilotos->campeonatos)||empty($pilotos->pilotos)||empty($pilotos->id_escuderia)){
                        $this->view->response("Complete los datos", 400);
                    } else {                
                        $this->model->edit($pilotos->nombre, $pilotos->campeonatos,$pilotos->piloto, $pilotos->id_escuderia, $id);
                        $product = $this->model->get($id);
                        $this->view->response($product, 201);
                    }
                } else {
                    $this->view->response("El producto con con id = $id no existe en el catalogo", 404);
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

        // se realiza la funcion de borrar un item
        function deletePiloto($params = null){
            if(!$this->authHelper->isLoggedIn()){
                $this->view->response("No estas logeado", 401);
                return;
            }

            $id = $params[':ID'];
            $piloto = $this->model->get($id);
            if ($piloto){
                $this->model->delete($id);
                $this->view->response("Elemento con el id = $id eliminado con exito",200);
            } else{
                $this->view->response("el piloto con el id = $id no existe", 404);
            }
        }

        //En el caso que la ruta sea incorrecta
        function error(){
            return $this->view->response("La ruta es incorrecta", 400);
        }
    }
    