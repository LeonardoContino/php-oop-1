<?php

class Movie 
{
   public $title;
   public $language;
   public $cast;
   public $duration;
   public $genre;



  public function __construct($_title, $_language, $_cast, $_duration, $_genre)
  {
    $this->title = $_title; 
    $this->language = $_language;
    $this->cast = $_cast;
    $this->duration = $_duration;
    $this->genre = $_genre;
  }  

  public function getFullMovie()
  {
    return "$this->title $this->language $this->cast $this->duration $this->genre";
  }
}

$movie1 = new Movie("Il Signore degli anelli", "eng", "leo, Marco, Giacomo, Giovanni","2:30h", "Fantasy");

$movie2 = new Movie("The Hobbit", "eng", "gino, Marco, stefano, Giovanni","2:45h", "Fantasy");

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
       <?php ?> 
       <div>
       <h2> <?=$movie1->title ?></h2>
        <h3><?=$movie1->language ?></h3> <span><?=$movie1->duration ?></span>
        <p><?=$movie1->cast ?></p>
        <p><?=$movie1->genre ?></p>
       </div>

       <div>
       <h2> <?=$movie2->title ?></h2>
        <h3><?=$movie2->language ?></h3> <span><?=$movie1->duration ?></span>
        <p><?=$movie2->cast ?></p>
        <p><?=$movie2->genre ?></p>
       </div>

       <?php ?> 
    </section>
</body>
</html>








