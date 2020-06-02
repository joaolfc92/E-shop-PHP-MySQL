<?php 


// require mysql

require('database/DBController.php');


// require product class

require('database/Product.php');

// DBController object

$db = new DBController();

// Product object

$product = new Product($db);






?>