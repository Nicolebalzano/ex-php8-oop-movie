<?php
require_once './models/Genre.php';
require_once './models/Movie.php';

$actionGenre = new Genre('action', 'adventure');
$familyGenre = new Genre('fun', 'animation');
$drama = new Genre('Drammatico', 'Crime');
$movies = [
    $Movie1 = new Movie('The dark knight',2008,'Christopher Nolan', 13, [$actionGenre, $drama]),
$Movie2 = new Movie('Kung Fu Panda', 2008, 'Mark Osborne & John Stevenson', 7, [$familyGenre])
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>  <h1>Movies details</h1>
    <?php foreach($movies as $movie){ ?>
  
    <ul>
        <li><h2><?php echo $movie-> title;?></h2></li>
        <li><?php echo $movie-> release;?></li>
        <li><?php echo $movie-> age_limit?>+</li>
        <li>Classificazione =<?php echo $movie-> ageLimit() ? ' Per adulti' : ' Per tutti';?></li>
        <li>Generi:
<ul>
    <?php forEach($movie->genres as $genre){ ?>
        <li><?php echo $genre->genreName . "(" . $genre->subGenre . ")" ?></li>
        <?php }?>
</ul>
        </li>
    </ul>
    <?php } ?>
</body>
</html>