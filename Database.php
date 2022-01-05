<?php

namespace src;

use PDO;

class Database
{

    private PDO $pdo;
    private static Database $db;
    private function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_db', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getdBInstance()
    {
        if (!isset(self::$db)) {
            self::$db = new Database();
        }
        return self::$db;
    }

    public function getAllProducts()
    {
        $statement = $this->pdo->prepare("select * from products_tbl");
        $statement->execute();
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }
}
