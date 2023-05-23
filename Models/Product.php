<?php

class Product {
  private $name;
  private $price;

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
  public Function getName(){
    return $this->name; 
  }

  public Function getPrice(){
    return $this->price ; 
  }

}




