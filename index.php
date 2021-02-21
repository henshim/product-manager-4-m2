<?php
include_once 'Model/product.php';
include_once 'Service/Service.php';

use Service\ProductManager;
use Model\Product;

$productManager=new ProductManager();
$productManager->add(new Product('vanguard'));
$productManager->add(new Product('battle spirit'));

$products=$productManager->getProduct();
foreach ($products as $product) {
    echo $product->getName().'<br>';
}