<?php
namespace app\controllers;

use app\models\Products;

class ProductsController extends \lithium\action\Controller
{

    public function index()
    {
        $products = Products::all();
        return compact('products');
    }
}
?>