<?php
require_once './app/controllers/piloto.controller.php';
require_once './app/controllers/escuderia.controller.php';
require_once './app/controllers/about.controller.php';
require_once './app/controllers/auth.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'listar'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    
    case 'listar':// apartados de pilotos
        $pilotocontroller = new PilotoController();
        $pilotocontroller->showFormula1();
        break;
    case 'agregarPiloto':
        $pilotocontroller = new PilotoController();
        $pilotocontroller->addPiloto();
        break;
    case 'eliminarpilotos':
        $pilotocontroller = new PilotoController();
        $pilotocontroller->removePiloto($params[1]);
        break;
    case 'editPilotosform':
        $pilotocontroller = new PilotoController();
        $id = $params[1];
        $pilotocontroller->editView($id);
        break;
    case 'editpiloto':
        $pilotocontroller = new PilotoController();
        $id = $params[1];
        $pilotocontroller->edit($id);
        break;
    case 'pilotobyescuderia':
        $pilotocontroller = new PilotoController();
        $pilotocontroller->showAll();
        break;

    case 'about':// about
        $pilotocontroller = new AboutController();
        $pilotocontroller->showAbout();
        break;

    case 'escuderia':// este es el apartado de escuderiascontroler
        $escuderiacontroller = new EscuderiasController();
        $escuderiacontroller->showFormula1();
        break;
    case 'escuderias':
        $escuderiacontroller = new EscuderiasController();
        $escuderiacontroller->showEscuderias($id);
        break;
    case 'pilotobyescuderia':
        $escuderiacontroller = new EscuderiasController();
        $escuderiacontroller->showEscuderias($id);
        break;
    case 'equipos':
        $id = $params[1];
        $escuderiacontroller = new EscuderiasController();
        $escuderiacontroller->showMore($id);
        break;
    case 'agregar':
        $escuderiacontroller = new EscuderiasController();
        $escuderiacontroller->addEscuderia();
        break;
    case 'eliminar':
        $escuderiacontroller = new EscuderiasController();
        $escuderiacontroller->removeEscuderia($params[1]);
            break;

    case 'login':// regitro,ingreso, validacion y salida del usuario 
        $controller = new AuthController();
        $controller->showLogin(); 
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
    case 'logout':
        $controller = new AuthController();
        $controller->logout();
        break;
    default: 
        echo "404 Page Not Found";
        break;
}