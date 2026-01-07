<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../core/Autoload.php';

use Core\Autoload;
use Core\Router;

Autoload::register();
use App\Controllers\HomeController;
use App\Controllers\ArticleController;
use App\Controllers\AuthController;
use App\Controllers\AdminController;
$uri = $_SERVER['REQUEST_URI'];
$uri = rtrim($uri, '/');
if($uri === '') $uri = '/';



$controller = new HomeController();
$controller->index();

$router = new Router();
$router->dispatch($uri);