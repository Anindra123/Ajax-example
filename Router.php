<?php

namespace src;

use src\controllers\ProductsController;

class Router
{
    public array $get_routes;
    public array $post_routes;
    public Database $db;
    public function __construct()
    {
        $this->db = Database::getdBInstance();
    }
    public function get($url, $fn)
    {
        $this->get_routes[$url] = $fn;
    }
    public function post($url, $fn)
    {
        $this->post_routes[$url] = $fn;
    }
    public function resolve()
    {
        $current_url = $_SERVER["REQUEST_PATH"] ?? '/';
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $fn = $this->post_routes[$current_url] ?? null;
        } else {
            $fn = $this->get_routes[$current_url] ?? null;
        }
        if ($fn) {
            call_user_func($fn, $this);
        } else {
            echo "Page not found";
            exit;
        }
    }

    public function RenderView($view, $parameter = [])
    {
        foreach ($parameter as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once __DIR__ . "/views/$view.php";
        $content = ob_get_clean();
        include_once __DIR__ . "/views/_layout.php";
    }
    public function RenderAjax($view, $parameter = [])
    {
        foreach ($parameter as $key => $value) {
            $$key = $value;
        }
        include_once __DIR__ . "/views/$view.php";
    }
}
