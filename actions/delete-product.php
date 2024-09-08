<?php
include "../classes/Product.php";

$product = new Product;
$id = $_GET['product_id'];
$product->deleteProduct($id);