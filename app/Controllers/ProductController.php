<?php 

declare(strict_types = 1);

namespace App\Controllers;

use App\Models\Product;

class ProductController {

    public function index()
        {
            return Product::all();
        }

}