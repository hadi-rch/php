<?php 

require_once "Data/Product.php";

$product = new Product("apple", 10000);
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("DUmmy", 9000);
$dummy->info();

// $product->name = "Orange";//tidak bisa diakses karena private hanya biisa diakses didalam kelasnya saja
// $product->price = 100000;//tidak bisa diakses karena private hanya biisa diakses didalam kelasnya saja