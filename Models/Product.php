<?php
require_once __DIR__ . '/Species.php';


class Product {
  protected $name;
  protected $price;
  protected $img;
  protected $species;


  function __construct($_name, $_price, $_img, Species $_species ){
    $this->setName($_name);
    $this->setPrice($_price);
    $this->setImg($_img);
    $this->species = $_species;

    
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
}




