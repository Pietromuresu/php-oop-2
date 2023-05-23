<?php
require_once __DIR__ . '/Product.php';


class Toy extends Product{
  protected $description;
  protected $dimensions;

  function __construct($_name, $_price, $_img, Species $_species,  $_description, $_dimensions){
    parent::__construct($_name, $_price, $_img, $_species );
    $this->setDescription($_description);
    $this->setDimensions($_dimensions);
  }


  public function setDescription($_description) {
    $this->description = $_description;
  }

  public function setDimensions($_dimensions) {
    $this->dimensions = $_dimensions;
  }



  public function getDescription(){
    return $this->description; 
  }

  public function getDimensions(){
    return $this->dimensions; 
  }

}