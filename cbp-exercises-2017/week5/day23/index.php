<?php
// get all the files within classes
$files = scandir('classes');


foreach($files as $file) {

    //if the class is a reference to this folder
    //or the one above, continue
    if($file == '.'|| $file == '..') continue;

    //if the file is php, put it into an array
    if(pathinfo($file, PATHINFO_EXTENSION)== 'php') {
     require_once('classes/' .$file);
 }
}
$meena = new giraffe('Meena');
$meena->flyBaby();
$meena->eat();
$meena->drink();

$koko = new giraffe('Koko');
$koko->go_to_location('forest');
$koko->eat();

$mimi = new giraffe('Mimi');
$mimi->go_to_location('pond');
$mimi->drink();

    
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Homepage</title>
    </head>
    <body>

    <h1> Nature report </h1>

    <p> Currently there are <?php echo giraffe::getNumberOfGiraffes();?> giraffes in the world </p>
    <p> <?php echo giraffe::getNumberOfGirafesInLocation('forest'); ?> of them are in the forest, <?php echo giraffe::getNumberOfGirafesInLocation('pond'); ?> are at the pond.</p>
    <p> <?php echo giraffe::getNumberOfThirstyGiraffes();?> giraffes are thirsty <?php echo giraffe::getNumberOfHungryGiraffes();?> giraffes are hungry?></p>
    <p> <?php echo giraffe::$number_of_flying_giraffes;?> giraffe can fly.</p>
  
    <h1><?php echo $meena->name.': ' ; $meena->canItFly();?></h1>
    
    <?php
    var_dump($meena);?>

    <ul>
    <?php foreach(giraffe::$list_of_giraffes as $giraffe):?>
        <li><?php echo $giraffe;?></li>
        <?php endforeach;?>
    </ul>

    
    </body>
    </html>