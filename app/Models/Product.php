<?php

declare(strict_types = 1);

namespace App\Models;

use App\Config\DB;
USE PDO;

class Product{
    public $id;
    public $name;
    public $price;
    public $quantity;
    public $photo;

    public static function all(){
        $connection = DB::getConnection();
        $stmt = $connection->query("SELECT * FROM products");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}
