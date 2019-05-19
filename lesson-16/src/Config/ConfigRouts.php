<?php


namespace App\Config;


use PHPRouter\Route;
use PHPRouter\RouteCollection;
use PHPRouter\Router;
use Psr\Http\Message\RequestInterface;

class ConfigRouts
{
    /**
     * @var RequestInterface
     */
    private $request;


    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }

    public function init(): Router
    {
        $collection = new RouteCollection();
        $collection->attachRoute(new Route('/users', [
            '_controller' => 'App\Controller\UserController::index',
            'methods' => 'GET',
            'parameters' => [$this->request]
        ]));

        $collection->attachRoute(new Route('/', [
            '_controller' => 'App\Controller\HomeController::index',
            'methods' => 'GET',
            'parameters' => [$this->request]
        ]));

        return new Router($collection);
    }
}