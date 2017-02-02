<?php

function divide($number_1, $number_2, & $remainder)
{
    $remainder = $number_1 % $number_2;
    return $number_1 / $number_2;
}

$result_of_division = divide(3,2, $my_remainder);

$result_of_division; //1.5
$my_remainder; //1

var_dump($result_of_division);
var_dump($my_remainder);