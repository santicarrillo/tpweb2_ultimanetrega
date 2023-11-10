<?php
    require_once 'app/controller/escuderias-api.controller.php';
    require_once 'app/helpers/auth-api.helper.php';
    require_once 'app/model/user.model.php';

    class UserApiController extends EscuderiasApiController {
        private $model;
        private $view;
        private $authHelper;

        function __construct() {
            parent::__construct();
            $this->model = new UserModel();
            $this->view = new ApiView();
            $this->authHelper = new AuthHelper();
        }

        function getToken($params = []) {
            $basic = $this->authHelper->getAuthHeaders(); // Darnos el header 'Authorization:' 'Basic: base64(usr:pass)'

            if(empty($basic)) {
                $this->view->response('No envió encabezados de autenticación.', 401);
                return;
            }

            $basic = explode(" ", $basic); // ["Basic", "base64(usr:pass)"]

            if($basic[0]!="Basic") {
                $this->view->response('Los encabezados de autenticación son incorrectos.', 401);
                return;
            }

            $userpass = base64_decode($basic[1]); // usr:pass
            $userpass = explode(":", $userpass); // ["usr", "pass"]

            $user = $userpass[0];
            $pass = $userpass[1];

            $userdata = [ "name" => $user, "id" => 123, "role" => 'ADMIN' ]; // Llamar a la DB

            if($user == "webadmin@gmail.com" && $pass == "2003") {
                // Usuario es válido
                
                $token = $this->authHelper->createToken($userdata);
                $this->view->response($token);
            } else {
                $this->view->response('El usuario o contraseña son incorrectos.', 401);
            }
        }
    }