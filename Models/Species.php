<?php


class Species{
  private $species;

  function __construct($_species){
    $this->setSpecies($_species);


  }

  // Setter 
  public function setSpecies($_species) {
    $this->species = $_species;
  }



  // Getter
  public function getSpecies(){
    return $this->species; 
  }




}