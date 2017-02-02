<?php
/*for ($i = 2; $i<10; $i++) {
    echo $i;
}*/

/*$a = array();
for ($i=0; $i <10; $i++) {
    $a[$i] = 'value';
}
var_dump ($a);

$b = array (
    'name' => 'natalia',
    'nationality' => 'polish',
    'age' => '29',
    'color' => 'yellow',
);
*/

/*foreach ($b as $key => $value) {
  //  echo $key;
  //  echo ': ';
  //  echo $value;
  //  echo '<br>';
//echo '<hr>'; // shorter ways to write are below, work the same

//echo "$key: $value <br><hr>"; -> probably the easiest way to read the code in this case; the shortest one  

echo $key . ': ' . $value . '<br><hr>';
}
*/



$order = array(
    array(
        'item' => 'macbook',
        'price' => 12345,
    ),
     array(
         'item' => 'apple tv',
        'price' => 1234,
     ),
    array(
         'item' => 'router',
        'price' => 123,
     ),
);
$total = 0;
foreach ($order as $product) {
    $total = $total + $product['price']; 
    echo "buying " .  $product['item'] . " for " . $product['price'] . "<br>";
}
echo $total . " Kc";