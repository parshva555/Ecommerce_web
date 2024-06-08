<?php

use database\Cart;
use database\DBController;
use database\Product;

require('database/DBController.php');
require('database/Product.php');
require ('database/Cart.php');
$db = new DBController();
$product = new Product($db);

//Cart object
$Cart = new Cart($db);

