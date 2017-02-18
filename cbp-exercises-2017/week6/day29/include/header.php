<?php

require_once ('./include/user.php');
require_once ('./include/database.php');

$db = new Database();
$user = new User($db);

$name=$user->getName();
if($name) {
    echo 'Logged user: '.htmlspecialchars($user->getName()).' / <a href="logout.php">Logout</a></br>';
    echo 'Number of items in your cart: '.count($_SESSION['products']);
}
else{
    echo '<a href="login.php">Login</a> / <a href="registration.php">Sign up</a>';
}

