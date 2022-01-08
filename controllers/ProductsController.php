<?php

namespace src\controllers;

use src\Router;

class ProductsController
{

    public static function index(Router $router)
    {
        $search = $_GET['keyword'] ?? '';
        if ($search) {
            $sProducts = $router->db->getAllProducts($search);
            $router->RenderAjax('partials/search', [
                'sProducts' => $sProducts
            ]);
        } else {
            $products = $router->db->getAllProducts();
            $router->RenderView(
                'products/index',
                [
                    'products' => $products
                ]
            );
        }
    }
}
