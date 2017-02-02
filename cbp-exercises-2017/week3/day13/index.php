 <?php
 require_once('var_show.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta carset="utf-8">
    <title> Forms</title>
</head>
<body>

    <!--<nav>
        <a href="index.php"> Home </a>
        <a href ="index.php?page=form"> Show me the form </a>
    </nav>
    <?php var_show($_GET);
        var_show($_POST);
    ?>

    <div id="main">
    <?php if(isset($_GET['page']) && $_GET['page']=='form') : ?>
    <?php include('form.php'); ?>
<?php else : ?>
    This is home.
<?php endif; ?>
    </div>-->
    <?php $color = array('white', 'green', 'red', 'blue', 'black');
    echo "<blockquote>The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$color[2]. " carpet, the ".$color[1]." lawn, the ".$color[0]." house, the leaden sky. The new president and his first lady. - Richard M. Nixon</blockquote>";
    $color2 = array('white', 'green', 'red');
    foreach($color2 as $col){ echo "<p>$col</p>";}
    echo "<ul><li>$color2[1]</li><li>$color2[2]</li><li>$color2[0]</li></ul>"

?>
</body>
</html>