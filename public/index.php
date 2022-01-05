<?php
require_once __DIR__ . '../../vendor/autoload.php';

use src\controllers\ProductsController;
use src\Router;


$router = new Router();

$router->get('/', [ProductsController::class, 'index']);
$router->get('/products', [ProductsController::class, 'index']);


$router->resolve();
