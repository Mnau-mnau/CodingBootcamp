<?php 

$movie_name = "Arrival";
$ratings = [69,95,82];
foreach($ratings as $rating){
    echo $rating;
}
function print_rating($rating){
    echo $rating .' %';
}
