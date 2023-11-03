<?php
    require_once 'config.php';
    require_once 'libs/Router.php';

    require_once 'app/controllers/piloto-api.controller.php';

    $router = new Router();

    
    //se define la tabla de ruteo
    #                 endpoint   verbo     controller           método
    $router->addRoute('pilotos', 'GET', 'PilotoApiController', 'getPilotos'   );
    $router->addRoute('pilotos/:ID', 'GET', 'PilotoApiController', 'getPiloto');
    $router->addRoute('pilotos', 'POST', 'PilotoApiController', 'insertPiloto');
    $router->addRoute('pilotos/:ID', 'DELETE', 'PilotoApiController', 'deletePiloto');
    $router->addRoute('pilotos/:ID', 'PUT', 'PilotoApiController', 'editPiloto');
    
    $router->addRoute('auth/token', 'GET', 'AuthApiController', 'getToken');

$router->setDefaultRoute('PilotoApiController', 'error');



//rutea
$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);