<?php
require_once('../include/database.php');
//$stmt = $db->prepare('SELECT id, name, price, size, color, weight FROM products');
//$stmt->execute();
$db = new Database();
$products = $db->getProducts();



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
    <section class="nm-table">
        <h2 class="nm-h2">Products table</h2>
        <table class="nm-content">
            <thead class="nm-th">
                <td>Id</td>
                <td>Name</td>
                <td>Price</td>
                <td>Size</td>
                <td>Color</td>
                <td>Weight</td>
            </thead>
            <?php foreach($products as $key => $product):?>
            <tr>
                    <td><?php echo htmlspecialchars($product['id']);?></td>
                    <td><?php echo htmlspecialchars($product['name']);?></td>
                    <td><?php echo htmlspecialchars($product['price']);?></td>
                    <td><?php echo htmlspecialchars($product['size']);?></td>
                    <td><?php echo htmlspecialchars($product['color']);?></td>
                    <td><?php echo htmlspecialchars($product['weight']);?></td>
            </tr>
            <?php endforeach;?>
        </table>
        <div class="nm-btn"><a href="addproduct.php">Add more products</a></div>
    </body>
</html>
