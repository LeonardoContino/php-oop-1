<?php
include_once __DIR__ . '/genre.php';
class Movie 
{
   public $title;
   public $language;
   public $cast;
   public $duration;
   public $genres;



  public function __construct($_title, $_language, $_cast, $_duration, array $genres)
  {
    $this->title = $_title; 
    $this->language = $_language;
    $this->cast = $_cast;
    $this->duration = $_duration;
    $this->genres = $genres;
  }  

  public function getFullMovie()
  {
    return "Titolo :$this->title - lingua: $this->language - Cast:$this->cast - Durata:$this->duration - Genere: $this->genre";
  }
}