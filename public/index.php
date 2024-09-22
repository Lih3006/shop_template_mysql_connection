<?php

declare(strict_types = 1);

require '../vendor/autoload.php';
use App\Controllers\ProductController;

session_start();

$productController = new ProductController();
$products = $productController->index();
var_dump($products);


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <?= include_once('../templates/header.php')?>
        <?= include_once('../templates/content.php')?>
        <?= include_once('../templates/footer.php')?>
    </body>
</html>