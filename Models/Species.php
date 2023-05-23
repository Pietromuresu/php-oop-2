<?php
include __DIR__ . '/Product.php';

class Species extends Product{
  protected $species;

  function __construct($_price, $_name, $_species){
    parent::__construct($_price, $_name);
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