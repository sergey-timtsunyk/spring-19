<?php


use PHPRouter\Route;
use PHPRouter\RouteCollection;
use PHPRouter\Router;
use Sunrise\Http\ServerRequest\ServerRequestFactory;

require_once 'vendor/autoload.php';


$request = ServerRequestFactory::fromGlobals();


$collection = new RouteCollection();
$collection->attachRoute(new Route('/users/show', [
    '_controller' => 'App\Controller\UsersController::showAction',
    'methods' => ['GET', 'POST'],
    'parameters' => [$request, 'GET']
]));

$router = new Router($collection);
$router->matchCurrentRequest();