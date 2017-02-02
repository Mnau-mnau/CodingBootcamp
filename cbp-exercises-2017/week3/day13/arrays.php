 <?php
 require_once('var_show.php');

$cars_i_want = array(
    'Porshe' => 2000000,
    'Ferrari' => 2500000,
    'Aston Martin' => 2800000,
    'Lamborghini' => 3500000,
    'Bugatti' => 16000000
);

$cars_my_wife_wants = array(
    'Smart' => 320000,
    'Mercedes' => 620000,
    'Toyota' => 480000,
    'Ford Mustang' => 1200000
);
$cars_i_cant_stand = array(
    'Smart'
);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta carset="utf-8">
    <title> Arrays</title>
</head>
<body>
    <?php 
    
    $result = array_merge($cars_i_want,$cars_my_wife_wants);
    var_show($result);
    arsort($result);
    var_show($result);
    $carToBuy = array_diff_key($result, array_flip($cars_i_cant_stand));
    var_show($carToBuy);
    $carsSorted = array_keys($carToBuy);
    $selectedCar


    ?>
</body>
</html>
