<?php
include_once __DIR__ . '/models/genre.php';
include_once __DIR__ . '/models/movies.php';

$movie1 = new Movie("Il Signore degli anelli", "eng", "leo, Marco, Giacomo, Giovanni","2:30h", ["Fantasy"]);

$movie2 = new Movie("The Hobbit", "eng", "gino, Marco, stefano, Giovanni","2:45h", ["Fantasy"]);

$movies = [$movie1 , $movie2];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
       <?php foreach($movies as $movie): ?> 
       <div>
       <h2> <?=$movie->title ?></h2>
        <h3><?=$movie->language ?></h3> <span><?=$movie->duration ?></span>
        <p><?=$movie->cast ?></p>
        
        <?php foreach ($movie->genres as $genre) : ?>
            <p><?= $genre ?><br></p>
        <?php endforeach; ?>
    
       </div>

       <?php endforeach ?> 
    </section>
</body>
</html>








