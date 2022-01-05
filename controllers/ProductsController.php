<?php

namespace src\controllers;

use src\Router;

class ProductsController
{

    public static function index(Router $router)
    {

        $products = $router->db->getAllProducts();
        $router->RenderView(
            'products/index',
            [
                'products' => $products
            ]
        );
    }
}
