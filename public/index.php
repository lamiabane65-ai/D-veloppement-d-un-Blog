<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../core/Autoload.php';

use App\Controllers\TestController;

$controller = new TestController();
$controller->index();
