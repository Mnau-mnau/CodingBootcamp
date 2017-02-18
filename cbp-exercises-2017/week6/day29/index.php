<?php
    session_start();
    require_once('include/database.php');
    //require_once('include/session.php');
    $db = new Database();
    $products = $db->getProducts();

if($_POST){
    if(!isset($_SESSION['products'])){
        $_SESSION['products']=[];
    }
    $_SESSION['products'][]= $_POST['id'];
    header('Location:index.php');

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

        <div class="login"><?php require('include/header.php');?><div>
        <a href="summary.php">Go to cart</a>

        <h1 class="nm-h1">Buy some t-shirt</h1>
        <section class="nm-main-table">
        <h2 class="nm-h2">Products table</h2>
        <table class="nm-content">
            <thead class="nm-th">
                <td class="nm-td">Id</td>
                <td class="nm-td">Product name</td>
                <td class="nm-td">Price</td>
                <td class="nm-td">Size</td>
                <td class="nm-td">Color</td>
                <td class="nm-td">Weight</td>
            </thead>
            <?php foreach($products as $key => $product):?>
            <tr>
                    <td><?php echo htmlspecialchars($product['id']);?></td>
                    <td><?php echo htmlspecialchars($product['name']);?></td>
                    <td><?php echo htmlspecialchars($product['price']);?></td>
                    <td><?php echo htmlspecialchars($product['size']);?></td>
                    <td><?php echo htmlspecialchars($product['color']);?></td>
                    <td><?php echo htmlspecialchars($product['weight']);?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']);?>">
                            <input type="submit" value="Buy this">
                        </form>
            </tr>
            <?php endforeach;?>
        </table>
        </section>
    </body>
</html>