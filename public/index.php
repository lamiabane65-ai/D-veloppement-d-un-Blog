<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../core/Autoload.php';

use Core\Autoload;
use Core\Router;

Autoload::register();

$uri = $_SERVER['REQUEST_URI'];
$uri = rtrim($uri, '/');
if($uri === '') $uri = '/';

$router = new Router();
$router->dispatch($uri);



