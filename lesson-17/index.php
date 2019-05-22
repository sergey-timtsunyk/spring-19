<?php

use App\Config\ConfigRouts;
use App\Config\FactoryModel;
use Sunrise\Http\ServerRequest\ServerRequestFactory;

require_once './vendor/autoload.php';

FactoryModel::ini('test_db', 'root', 'password', '127.0.0.1', '3307');

$request = ServerRequestFactory::fromGlobals();

$configRouts = new ConfigRouts($request);
$router = $configRouts->init();

$router->matchCurrentRequest();