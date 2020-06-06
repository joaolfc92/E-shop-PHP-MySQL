<?php 


// require mysql

require('database/DBController.php');


// require product class

require('database/Product.php');


// require cart class

require('database/Cart.php');

// DBController object

$db = new DBController();

// Product object

$product = new Product($db);
$product_shuffle = $product->getData();


// cart object

$Cart = new Cart($db);




?>