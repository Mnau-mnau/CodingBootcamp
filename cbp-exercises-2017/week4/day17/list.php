<?php

require_once('functions.php');
require_once('my-functions.php');

//get_names ()
//get_ratings ()
//get_name ()
//get_rating ()


$unique_id = 'tt0108052';

// way to get all the unique ids here 
$all_the_names = get_names ();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Film database</title>
</head>
<body>

<?php foreach($all_the_names as $unique_id => $name): ?>
    <h1><?php echo get_name($unique_id); ?></h1>

    <div class="rating">
    Rating: <strong><?php echo get_rating($unique_id); ?></strong>
    </div>
<!--Generating URL -->
    <a href="movies.php?id=<?php echo $unique_id; ?>">Detail of the movie</a>

<?php endforeach; ?>

</body>
</html>