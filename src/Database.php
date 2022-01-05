<?php

namespace src;

use PDO;

class Database
{

    private PDO $pdo;
    private static Database $db;
    private function __construct()
    {
        $this->pdo = new PDO("mysql:localhost;port:3306;db_name=products_db", "root", "");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$db = null;
    }

    public static function getdBInstance()
    {
        if (!self::$db) {
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
