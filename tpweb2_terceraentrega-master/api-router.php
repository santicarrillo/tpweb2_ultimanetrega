<?php
    require_once 'config.php';
    require_once 'libs/router.php';

    require_once 'app/controllers/piloto-api.controller.php';

    $router = new Router();

    
    //se define la tabla de ruteo
    #                 endpoint      verbo     controller           método
    $router->addRoute('pilotos',     'GET',    'PilotoApiController', 'get'   );
    $router->addRoute('pilotos',     'POST',   'PilotoApiController', 'create');
    $router->addRoute('pilotos/:ID', 'GET',    'PilotoApiController', 'get'   );
    $router->addRoute('pilotos/:ID', 'PUT',    'PilotoApiController', 'update');
    $router->addRoute('pilotos/:ID', 'DELETE', 'PilotoApiController', 'delete');
    
    $router->addRoute('auth/token', 'GET', 'AuthApiController', 'getToken');

$router->setDefaultRoute('PilotoApiController', 'error');



//rutea
$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);