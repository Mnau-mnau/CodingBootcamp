<?php

$course_name = 'CodingBootcamp';
$my_name = 'Natalie';
$result = 11-3;
$instructors = ['Jan', 'Daniel', 'Michal', 'Jakub'];
function greet_me(){
    echo 'Good morning, Prague!';
}


class Bootcamp{
    public $instructors = array('Jan', 'Daniel', 'Michal', 'Jakub');
}
$my_greeting = 'Good morning, '.$my_name;
echo $my_greeting;

sort($instructors);

function greet_someone($name)
{
    return 'Good morning, '.$name;
}

foreach ($instructors as $name) {
    echo greet_someone();
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Workout</title>
    </head>
    <body>

<h2><?php greet_me();?></h2><br>

    </body>
</html>