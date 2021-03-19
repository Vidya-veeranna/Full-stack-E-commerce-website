<?php

// require MySQL Connection
require ('databases/DBController.php');

// require Product Class
require ('databases/Product.php');

// require Cart Class
require ('databases/Cart .php');

// require Registration Class
require ('databases/Registration.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
//$All_product = new All_products();

session_start();


// Cart object
$Cart = new Cart($db );

$reg = new Registration($db );