<?php

use database\DBController;
use database\Product;

require('database/DBController.php');
require('database/Product.php');
$db = new DBController();
$product = new Product($db);


