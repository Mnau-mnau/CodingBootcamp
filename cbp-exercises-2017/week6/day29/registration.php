<?php
require_once('include/database.php');
    $db = new Database();
if($_POST)
{
    //var_dump($_POST);
    $user_id = $db->insertUser($_POST['user_name'],$_POST['first_name'],$_POST['last_name'], $_POST['email'],$_POST['password']);
    session_start();
    $_SESSION['user_id']= $user_id;
}
header('Location: index.php')
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

<section class="nm-form">
    <h2 class="nm-h2">Sign up to our e-shop</h2>
    <form action="" method="post">
        <div class="nm-input"><p>User name:</p><input type="text" name="user_name"></div></br>
        <div class="nm-input"><p>First name:</p><input type="text" name="first_name"></div></br>
        <div class="nm-input"><p>Last name:</p><input type="text" name="last_name"></div></br>
        <div class="nm-input"><p>Email:</p><input type="text" name="email"></div></br>
        <div class="nm-input"><p>Password:</p><input type="password" name="password"></div></br>
        <div class="nm-submit"><input type="submit" value="sign up"></div>
    </form>
</section>

</body>
</html>