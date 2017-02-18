<?php
session_start();

require_once('include/database.php');
$db = new Database();

if($_POST)
{
    $order_id = $db->insertOrder($_SESSION['user_id']);
    foreach($_SESSION['products'] as $id){
        $db->insertOrder_has_products($order_id, $_POST['id']);
    }
    $_SESSION['products'] = [];
    header('Location: index.php');
}




?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Products table</title>
        <link href="https://fonts.googleapis.com/css?family=Sansita:400,700" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>