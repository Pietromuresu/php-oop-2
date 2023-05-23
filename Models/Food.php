<?php
require_once __DIR__ . '/Product.php';


class Food extends Product{
  protected $weight;
  protected $ingredients;

  function __construct($_name, $_price, $_img , Species $_species , $_weight, $_ingredients){
    parent::__construct($_name, $_price, $_img, $_species );
    $this->setWeight($_weight);
    $this->setDimensions($_ingredients);
  }


  public function setWeight($_weight) {
    $this->weight = $_weight;
  }

  public function setDimensions($_ingredients) {
    $this->ingredients = $_ingredients;
  }



  public function getWeight(){
    return $this->weight; 
  }

  public function getDimensions(){
    return $this->ingredients; 
  }

}