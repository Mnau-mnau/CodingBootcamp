<?php
$movie_names = array(
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
<?php asort ($movie_names);?>
<ul>
    <?php foreach ($movie_names as $key => $title): ?>
        <li>
            <?php echo $title. ' ' .$movie_ratings[$key];?>
        </li>
    <?php endforeach; ?>
</ul>
</body>

<?php asort ($movie_ratings);?>
<ul>
    <?php foreach ($movie_ratings as $key => $rating): ?>
        <li>
            <?php echo $movie_names[$key]. ' ' .$rating;?>
        </li>
    <?php endforeach; ?>
</ul>
</body>

