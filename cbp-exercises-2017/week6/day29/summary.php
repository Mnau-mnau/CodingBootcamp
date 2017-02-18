<?php
require_once('include/database.php');
$db = new Database();
session_start();






/*if($_POST)
{
    var_dump($_POST);
}*/

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
        <div class="login"><?php require('include/header.php');?><div>
        <h2 class="nm-h2">You have selected:</h2> 
        <table class="nm-table">
            <thead class="nm-th">
                <td>Name</td>
                <td>Price</td>
                <td>Size</td>
                <td>Color</td>
                <td>Weight</td>
            </thead>
            <?php foreach($_SESSION['products']as $id): ?>
            <?php $product = $db->getProduct($id);?>
            <tr>
                
                <td><?php echo htmlspecialchars($product['name']);?></td>
                <td><?php echo htmlspecialchars($product['price']);?></td>
                <td><?php echo htmlspecialchars($product['size']);?></td>
                <td><?php echo htmlspecialchars($product['color']);?></td>
                <td><?php echo htmlspecialchars($product['weight']);?></td>
            </tr><br>
            <?php endforeach; ?>
        </table>
        <form class="nm-summary-btn" action="checkout.php" method="post">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']);?>">
                <input type="submit" value="Check out" name="submit">
            </form>
    </body>
</html>