<?php
require_once('../include/database.php');
if($_POST){

    $db = new Database();
    $db->insertProducts($_POST['name'], $_POST['price'], $_POST['size'],$_POST['color'], $_POST['weight']);
    header('Location:products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Products table</title>
        <link href="https://fonts.googleapis.com/css?family=Sansita:400,700" rel="stylesheet">
        <link rel="stylesheet" href="../main.css">
    </head>
    <body>

        <section class="nm-form">
            <h2 class="nm-h2">Add product</h2>
            <form action="" method="post">
                <div class="nm-input"><p>Item name:</p><input type="text" name="name"><br></div>
                <div class="nm-input"><p>Item price:</p><input type="text" name="price"><br></div>
                <div class="nm-input"><p>Item size:</p><input type="text" name="size"><br></div><!-- this could be select type-->
                <div class="nm-input"><p>Item color:</p><input type="text" name="color"><br></div><!-- this could be select type-->
                <div class="nm-input"><p>Item weight (g):</p><input type="text" name="weight"><br></div>
                <div class="nm-submit"><input type="submit" value="create item"></div>
            </form>
        </section>
    </body>
</html>