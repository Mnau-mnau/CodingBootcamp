<?php
$C = -6;
$far = (9/5) * $C + 32;
echo $far;
?>

<?php
  $celcius = -6;
  $fah = (9/5) * $celcius + 32;
  ?>
    <br>

    Temperature F: <?php echo  $fah;?>

<?php
function print_is_even($number)

{
    $result = $number % 2 == 0 ? 'even' : 'odd';

    echo $result;
}

$number_to_test  = 14;
?>

The number <?php echo $number_to_test; ?> is <?php echo print_is_even($number_to_test); ?>

<?php
$height=147;
if ($height>180) {
    echo 'tall';
} elseif ($height>160) {
    echo 'avarage';
} else {
    echo 'small';
}
?>
<br>


<?php
$age=10;
if ($age>70) {
    echo 'pensioner';
} elseif ($age>30) {
    echo 'worker';
} elseif ($age>10) {
    echo 'student';
} else {
    echo 'child';
}
?>

<?php

$system = "windows";
switch ($system) {
    case "windows":
        echo 'Your browser is edge';
break;
    case "mac":
        echo 'Your browser is safari';
break;
    default:
        echo 'You have a dfferent broswer';
break;
}
?>

<br>
<hr>
<?php
$iterator=0;
while($iterator < 3){
    $iterator++;
    echo $iterator;
};
?>

<br>
<hr>

<?php
$iterator=0;
do {
    $iterator++;
    echo $iterator;
}
while ($iterator < 3);
?>

<br>
<hr>


<?php
$variable=0;
for ($variable=1; $variable <= 5; $variable++) {
 echo 'List item number is' . $variable;
}
?>


<br>
<hr>

<?php
$variable=0;
for ($variable=0; $variable<2; $variable++){
    echo 'Numbers up to ' . $variable;
}
?>

<br>
<hr>

<?php
$cars_i_want = array(
    'Porshe',
    'Ferrari',
    'Aston Martin',
    'Lamborghini',
    'Bugatti'
);

$cars_i_have = array(
    'Ferrari',
    'Lamborghini'
);

$cars_i_dont_have = array_diff($cars_i_want, $cars_i_have);
print_r ($cars_i_dont_have);

?>


<br>
<hr>

<?php
$movies = array(
    'The Shawshank redemption',
    'The Godfather',
    'The Godfather II',
    'Dark Knight',
    '12 angry men',
    'Schindler\'s list',
    'Pulp fiction',
    'Lord of the Rings: Return of the King',
    'The good, the bad and the ugly',
    'Fight club'
); ?>

<body>
<ol>
    <?php foreach ($movies as $key=> $movie_name): ?>
    <li>
    <?php echo $movie_name; ?>
    </li>
    <?php endforeach ;?>
</ol>
</body>

<br>
<hr>

<?php $movie_names = array(
'tt0111161' => 'The Shawshank redemption',
'tt0068646' => 'The Godfather',
'tt0071562' => 'The Godfather II',
'tt0468569' => 'Dark Knight',
'tt0050083' => '12 angry men',
'tt0108052' => 'Schindler\'s list',
'tt0110912' => 'Pulp fiction',
'tt0167260' => 'Lord of the Rings: Return of the King',
'tt0060196' => 'The good, the bad and the ugly',
'tt0137523' => 'Fight club'
);
$movie_ratings = array(
'tt0111161' => 9.2,
'tt0068646' => 9.2,
'tt0071562' => 9.0,
'tt0468569' => 8.9,
'tt0050083' => 8.9,
'tt0108052' => 8.9,
'tt0110912' => 8.9,
'tt0167260' => 8.9,
'tt0060196' => 8.9,
'tt0137523' => 8.8
);
?>

<body>
<?php asort($movie_names); ?>
<?php foreach ($movie_names as $code => $film_name) : ?>
<li>
    <?php print $film_name. ' ' .$movie_ratings[$code] ;?>
</li>
<?php endforeach ; ?>
</body>
