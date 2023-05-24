<?php
require_once __DIR__ . '/Product.php';


class Accessory extends Product{
  protected $material;
  protected $dimensions;

  function __construct($_name, $_price, $_img , Species $_species , $_material, $_dimensions){
    parent::__construct($_name, $_price, $_img, $_species);
    $this->setMaterial($_material);
    $this->setDimensions($_dimensions);
  }


  public function setMaterial($_material) {
    $this->material = '<strong>Material:</strong>' . ' ' . $_material;
  }

  public function setDimensions($_dimensions) {
    $this->dimensions = '<strong>Dimensions:</strong>' . ' ' . $_dimensions;
  }



  public function getMaterial(){
    return $this->material; 
  }

  public function getDimensions(){
    return $this->dimensions; 
  }
}

