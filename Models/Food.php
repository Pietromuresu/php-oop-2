<?php
require_once __DIR__ . '/Product.php';


class Food extends Product{
  protected $weight;
  protected $ingredients;

  function __construct($_name, $_price, $_img , Species $_species , $_weight, $_ingredients){
    parent::__construct($_name, $_price, $_img, $_species );
    $this->setDescription($_weight);
    $this->setDimensions($_ingredients);
  }


  public function setDescription($_weight) {
    $this->weight = '<strong>Net Weight:</strong>' . ' ' . $_weight;
  }

  public function setDimensions($_ingredients) {
    $this->ingredients = '<strong>Ingredients:</strong>' . ' ' . $_ingredients;
  }



  public function getDescription(){
    return $this->weight; 
  }

  public function getDimensions(){
    return $this->ingredients; 
  }

}