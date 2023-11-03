<?php
    require_once 'config.php';
    require_once 'libs/Router.php';
    require_once 'app/controller/prueba.controller.php';

    //require_once 'app/controller/escuderias-api.controller.php';

    $router = new Router();
    var_dump($_GET['resource']);

    
    //se define la tabla de ruteo
    #                 endpoint   verbo     controller           método
    $router->addRoute('escuderias', 'GET', 'pruebaController', 'getAll');
    $router->addRoute('escuderias/:ID', 'GET', 'EscuderiasApiController', 'getEscuderia');
    $router->addRoute('escuderias', 'POST', 'EscuderiasApiController', 'insertEscuderia');
    $router->addRoute('escuderias/:ID', 'DELETE', 'EscuderiasApiController', 'deleteEscuderia');
    $router->addRoute('escuderias/:ID', 'PUT', 'EscuderiasApiController', 'editEscuderia');
    
    $router->addRoute('auth/token', 'GET', 'AuthApiController', 'getToken');

$router->setDefaultRoute('EscuderiasApiController', 'error');



//rutea
$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);

