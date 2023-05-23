<?php
require_once __DIR__ . '/Species.php';


class Product {
  protected $name;
  protected $price;
  protected $img;
  public $species;


  function __construct($_name, $_price, $_img, Species $_species ){
    $this->setName($_name);
    $this->setPrice($_price);
    $this->setImg($_img);
    $this->setSpecies($_species);
    

    
  }


  // Setter
  public function setName($_name) {
    $this->name = $_name;
  }
  
  public function setPrice($_price) {
    $this->price = '€' . ' ' . $_price ;
  }
  
  public function setImg($_img) {
    $this->img = $_img;
  }

  public function setSpecies($_species) {
    $this->species = $_species;
  }


  // Getter
  public function getName(){
    return $this->name; 
  }

  public function getPrice(){
    return $this->price ; 
  }
  
  public function getImg(){
    return $this->img ; 
  }

  public function getSpecies() {
   return $this->species ;
  }
}




