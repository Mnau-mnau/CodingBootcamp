<?php 

$user_names = array(
    'user642' => 'Bob',
    
    'user013' => 'Kevin',
    'user214' => 'Stuart',
);

$movie_name = "Arrival";
$ratings = ['user642' =>69, 'user214'=> 95, 'user013'=>82];



function print_rating($rating){
    echo $rating .' %';
}
?> 
<?php

$user_name = $user_names['user214'];

function get_username($user_id)
{
    global $user_names;
    return $user_names[$user_id];
}

echo get_username('user214'); 


foreach($ratings as $user_id => $rating) //this is a better version
{

    echo get_username($user_id). ' gave the movie '.$rating .' %';
}

foreach($ratings as $user_id => $rating) //this is the same version of the previous one, with extra if
{
    if(get_username($user_id))
    {
        echo get_username($user_id).' gave the movie '.$rating.' %';
    }
}