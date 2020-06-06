<?php

require('../database/DBController.php');
require('../database/Product.php');

// Product object

$db = new DBController();

$product = new Product($db);




    if(isset($_POST['itemid'])){
       $result =  $product = $product->getProduct($_POST['itemid']);
        echo json_encode($result);
    }


?>