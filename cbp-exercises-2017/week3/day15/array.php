<?php
$a = array(2, 4, 6, 8);
$a[] = 9; //adding number to the regular array 
/*var_dump($a);*/ //displaying variable to the browser - you can see what is inside the array; use Ctrl U to see the code in the browser in more readeable way
?>
<br>
<?php $b = array(
    'name' => 'John',
    'lastname' => 'foo',
    'city' => 'prague',
    'country' => 'CZ',
    6,
);
echo $b['country'];
$b['age'] = 123;
$b ['name'] = 'johnny';
var_dump($b);


