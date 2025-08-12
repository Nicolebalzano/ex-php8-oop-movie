<?php
require_once './models/Genre.php';
require_once './models/Movie.php';

$actionGenre = new Genre('action', 'adventure');
$familyGenre = new Genre('fun', 'animation');
$drama = new Genre('Drammatico', 'Crime');
$movies = [
    $Movie1 = new Movie('The dark knight',2008,'Christopher Nolan', 13, [$actionGenre, $drama], 5.3),
$Movie2 = new Movie('Kung Fu Panda', 2008, 'Mark Osborne & John Stevenson', 7, [$familyGenre], 9)
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Movies</title>
</head>
<body> 
     <h1>Movies details</h1>
     <div class="flex">
         <?php foreach($movies as $movie){ ?>
     <h2><?php echo $movie-> title;?></h2>
    <ul>
     
        <li><strong>First release:</strong><?php echo $movie-> release;?></li>
        <li><strong>Age limit:</strong><?php echo $movie-> age_limit?>+</li>
        <li><strong>Classification: </strong> <?php echo $movie-> ageLimit() ? ' Per adulti' : ' Per tutti';?></li>
        <li><strong>Generi:</strong>
<ul>
    <?php forEach($movie->genres as $genre){ ?>
        <li><?php echo $genre->genreName . "(" . $genre->subGenre . ")" ?></li>
        <?php }?>
</ul>
        </li>
        <li><strong>Rating:</strong> <?php echo $movie->rating?> (<?php echo $movie->getRating(); ?>)</li>
    </ul>
    <?php } ?>
     </div>
   
</body>
</html>