<?php
require_once './app/controllers/piloto.controller.php';
require_once './app/controllers/escuderia.controller.php';
require_once './app/controllers/about.controller.php';
require_once './app/controllers/auth.controller.php';
require_once './app/controllers/pilotosByescuderia.controller.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'listar'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

// listar    ->         taskController->showTasks();
// agregar   ->         taskController->addTask();
// eliminar/:ID  ->     taskController->removeTask($id); 
// finalizar/:ID  ->    taskController->finishTask($id);
// about ->             aboutController->showAbout();
/// login ->            auth.controller--> showlogin();

// parsea la accion para separar accion real de parametros
$params = explode('/', $action);

switch ($params[0]) {
    case 'listar':
        $controller = new PilotoController();
        $controller->showFormula1();
        break;
    case 'agregar':
        $controller = new PilotoController();
        $controller->addPiloto();
        break;
    case 'eliminar':
        $controller = new PilotoController();
        $controller->removePiloto($params[1]);
        break;
    case 'about':
        $controller = new AboutController();
        $controller->showAbout();
        break;
    case 'escuderia':
        $controller = new EscuderiasController();
        $controller->showFormula1();
        break;
    case 'escuderia':
        $controller = new EscuderiasController();
        $controller->showEscuderias($id);
        break;
    case 'agregar':
        $controller = new EscuderiasController();
        $controller->addEscuderia();
        break;
    case 'eliminar':
        $controller = new EscuderiasController();
        $controller->removeEscuderia($params[1]);
            break;
    case 'login':
        $controller = new AuthController();
        $controller->showLogin(); 
        break;
    case 'auth':
        $controller = new AuthController();
        $controller->auth();
        break;
    case 'logout':
        $controller = new AuthController();
        $controller->logout();
        break;
        case 'pilotosbyescuderia':
            $controller = new PilotosByEscuderiacontroller ();
            $controller -> showPilotosByEscuderia();
    default: 
        echo "404 Page Not Found";
        break;
}