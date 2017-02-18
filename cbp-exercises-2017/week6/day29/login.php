<?php

require_once('./include/database.php');
$db = new Database;

if($_POST) {
    $user = $db->getUserByEmail($_POST['email']);
    if(empty($user)){
        echo '<p class="error">User unknown</p>';
    }
    
    elseif(password_verify($_POST['password'],$user['password']))
    {
        session_start();
        $_SESSION['user_id']= $user['id'];
        header('Location: index.php');
    }
    else{
        echo '<p class="error">Incorrect user or password</p>';
    }

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

        <h2 class="nm-h2">Sign up to our e-shop</h2>
    <form action="" method="post">
        <div class="nm-input"><p>Email:</p><input type="text" name="email"></div></br>
        <div class="nm-input"><p>Password:</p><input type="password" name="password"></div></br>
        <div class="nm-submit"><input type="submit" value="sign up"></div>
    </form>

    </body>
</html>