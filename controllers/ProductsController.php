<?php

namespace src\controllers;

use src\Router;

class ProductsController
{

    public static function index(Router $router)
    {
        $search = $_GET["search"] ?? '';
        $sProducts = '';
        if ($search) {
            $sProducts = $router->db->getAllProducts($search);
        }
        $products = $router->db->getAllProducts();
        $router->RenderView(
            'products/index',
            [
                'products' => $products,
                'sProducts' => $sProducts
            ]
        );
    }
}
