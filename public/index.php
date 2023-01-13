<?php

require_once '../vendor/autoload.php';

$router = new AltoRouter();

//uniquement en local
$router->setBasePath($_SERVER['BASE_URI']);


$router->map('GET', '/', [
    'action' => 'home',
    'controller' => 'MainController'
], 'home' );

$match = $router->match();

if($match) {

    $controllerName= $match['target']['controller'];

    $method = $match['target']['action'];

    $controller = new $controllerName();

    $controller->$method($match['params']);
} else {
    // notre route n'existe pas, donc on renvoit sur une 404 !
    $controller = new App\Controllers\ErrorController();
    $controller->error404();
}
