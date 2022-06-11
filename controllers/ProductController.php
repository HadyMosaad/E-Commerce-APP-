<?php

namespace app\controllers;

use app\models\Product;
use app\Router;


class ProductController
{
    public function index(Router $router)
    {
        $keyword = $_GET['search'] ?? '';
        $disks = $router->database->getDisks();
        $books = $router->database->getBooks();
        $furniture = $router->database->getFurniture();
        $router->renderView('products/index', [
            'products' => array_merge($books , $disks , $furniture ),
            'keyword' => $keyword

        ]);
    }

    public function create(Router $router)
    {
        $productData = [
        ];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productData['sku'] = $_POST['sku'];
            $productData['name'] = $_POST['name'];
            $productData['price'] = $_POST['price'];
            $productData['weight'] = $_POST['weight'] ?? null;
            $productData['size'] = $_POST['size'] ?? null;
            $productData['width'] = $_POST['width'] ?? null;
            $productData['length'] = $_POST['length'] ?? null;
            $productData['height'] = $_POST['height'] ?? null;
            $classy = $_POST['switcher'];
            $class = "\app\models\\$classy";
            $product = new $class();
            $product->load($productData);
            $product->save($classy);
            header('Location: /products');
            exit;
        }
        $router->renderView('products/create', [
            'product' => $productData
        ]);
    }

    public function MassDelete(Router $router)
    {
        $DeleteIds = $_POST['checked'] ?? null;
        if (!$DeleteIds) {
            header('Location: /');
            exit;
        }
        foreach ($_POST['checked'] as $value) {
            $router->database->deleteProduct($value);
        }
        header('Location: /');
        exit;

    }
   
   
}
