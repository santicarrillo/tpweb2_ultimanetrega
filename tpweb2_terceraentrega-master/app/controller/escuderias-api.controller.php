<?php
    require_once 'app/model/escuderias.model.php';
    require_once 'app/view/api.view.php';
    require_once 'app/helpers/auth-api.helper.php';
    
    class EscuderiasApiController {
        private $model;
        private $view;
        private $authHelper;
        
        private $data;

        public function __construct(){
            $this->model = new EscuderiasModel();
            $this->view = new ApiView();
            $this->authHelper = new AuthHelper();
            
            //lee el body del request
            $this->data = file_get_contents("php://input");
        }

        private function getData(){
            return json_decode($this->data);
        }

        function getAll($params=null){
          $escuderias=null;

            // Campos de la tabla
            $fields = array('id', 'equipos', 'description', 'puntos_equipo', 'pos_equipos');
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
            if ((isset($_GET['field'])&& isset($_GET['value']))){
                $value = $_GET['value'];
                //se verifica que lo que se haya recibido por parametro GET pertenezca al array de opciones posibles
                if (in_array($_GET['field'], $fields))
                $field = $_GET['field'];
                else
                return $this->view->response("$field no es un campo existente de la tabla", 400);
            }

            // alumno  A llama y ordena el listado
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

            //Miembro B: Hago los llamados al modelo, en caso de que no haya entrado a los if anteriores, van los valores por defecto
            if ($field!=null&&$value!=null)
                if($field=='puntos_equipo')
                    $escuderias = $this->model->getAllFilterPuntos($field, $value, $limit, $offset, $sort, $order);
                else
                    $escuderias = $this->model->getAllFilter($field, $value, $limit, $offset, $sort, $order);
            else 
               $escuderias = $this->model->getAll($limit, $offset, $sort, $order);

            
            //Hago el llamado a la vista
            if ($escuderias)
                return $this->view->response($escuderias);
            else 
                return $this->view->response("No hay escuderias disponibles", 404);
        
        }

        
        
        // Miembro b: Obtener un elemento (escuderia) por ID
        function get($params = null){
            $id = $params [':ID'];
            $escuderia = $this->model->get($id);
            
            if($escuderia){
                $this->view->response($escuderia);
            } else {
                $this->view->response("El escuderias con el id = $id no existe en el catalogo", 404);
            } 
        }

    
        //Miembro b: POST, insertar o crear un elemento (piloto)
        function insertEscuderia($params = null){
          /*  $user = $this->authHelper->currentUser();
            if(!$user) {
                $this->view->response('Unauthorized', 401);
                return;
            }

            if($user->role!='ADMIN') {
                $this->view->response('Forbidden', 403);
                return;
            }*/


            $escuderias = $this->getData();
            if (!empty($escuderias->equipos) && !empty($escuderias->puntos_equipo)&&!empty($escuderias->pos_equipos)){
                 $id = $this->model->insert($escuderias->equipos, $escuderias->puntos_equipo, $escuderias->pos_equipos);
                $this->view->response($escuderias, 201);
            } else {
                $this->view->response("Complete los datos", 400);
            }
        
        }
    

        // se realiza la funcion de borrar un item
        function deleteEscuderia($params = null){
            /*$user = $this->authHelper->currentUser();
            if(!$user) {
                $this->view->response('Unauthorized', 401);
                return;
            }

            if($user->role!='ADMIN') {
                $this->view->response('Forbidden', 403);
                return;
            }*/



            $id = $params[':ID'];
            $escuderia = $this->model->get($id);
            if ($escuderia){
                $this->model->delete($id);
                $this->view->response("Elemento con el id = $id eliminado con exito", 200);

            } else{
                $this->view->response("la escuderia con el id = $id no existe", 404);
            }
        }

        function editEscuderia($params = null){
           /* $user = $this->authHelper->currentUser();
            if(!$user) {
                $this->view->response('Unauthorized', 401);
                return;
            }

            if($user->role!='ADMIN') {
                $this->view->response('Forbidden', 403);
                return;
            }*/
        
            $id = $params[':ID'];
            $escuderias = $this->model->get($id);
            if($escuderias){
                $escuderiasData = $this->getData();
                var_dump($escuderiasData);
                if (empty($escuderias->equipos)||empty($escuderias->description)||empty($escuderias->puntos_equipo)||empty($escuderias->pos_equipos)){
                    $this->view->response("Complete los datos", 400);
                } else {                
                    $this->model->edit($escuderias->equipos, $escuderias->description,$escuderias->puntos_equipo, $escuderias->pos_equipos, $id);
                    $escuderias = $this->model->get($id);
                    $this->view->response($escuderias, 201);
                }
            } else {
                $this->view->response("El producto con con id = $id no existe en el catalogo", 404);
            }
       }

        //En el caso que la ruta sea incorrecta
        function error(){
            return $this->view->response("La ruta es incorrecta", 400);
        }

}
 
