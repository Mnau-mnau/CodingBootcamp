<?php

require_once ('./include/user.php');
require_once ('./include/database.php');
$db = new Database();
$user = new User($db);

$name=$user->getName();
if($name) {
    echo 'Number of items in your cart: '.count($_SESSION['products']).' / go to <a href="summary.php">Cart</a>';
}