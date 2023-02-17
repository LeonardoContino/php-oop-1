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





