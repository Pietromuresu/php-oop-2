<?php
require_once __DIR__ . '/Product.php';


class Food extends Product{
  protected $weight;
  protected $ingredients;

  function __construct($_name, $_price, $_img , Species $_species , $_weight, $_ingredients){
    parent::__construct($_name, $_price, $_img, $_species );
    $this->setWeight($_weight);
    $this->setIngredients($_ingredients);
  }


  public function setWeight($_weight) {
    $this->weight = '<strong>Net Weight:</strong>' . ' ' . $_weight;
  }

  public function setIngredients($_ingredients) {
    $this->ingredients = '<strong>Ingredients:</strong>' . ' ' . $_ingredients;
  }



  public function getWeight(){
    return $this->weight; 
  }

  public function getIngredients(){
    return $this->ingredients; 
  }

}