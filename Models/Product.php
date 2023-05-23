<?php

class Product {
  protected $name;
  protected $price;

  function __construct($_name, $_price ){
    $this->setName($_name);
    $this->setPrice($_price);

    
  }


  // Setter
  public function setName($_name) {
    $this->name = $_name;
  }
  
  public function setPrice($_price) {
    $this->price = '€' . ' ' . $_price ;
  }
  
  // Getter
  public function getName(){
    return $this->name; 
  }

  public function getPrice(){
    return $this->price ; 
  }

}




