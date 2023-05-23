<?php


class Species{
  private $species;

  function __construct($_species){
    $this->setSpecies($_species);


  }

  // Setter 
  public function setSpecies($_species) {

    switch ($_species) {
      case 'dog':
        $this->species = '<i class="fa-solid fa-dog"></i>' . ' ' . $_species;
        
        break;
      case 'cat':
        $this->species = '<i class="fa-solid fa-cat"></i>' . ' ' . $_species;
        
        break;
      case 'bird':
        $this->species = '<i class="fa-solid fa-bird"></i>' . ' ' . $_species;
        
        break;
      case 'fish':
        $this->species = '<i class="fa-solid fa-fish"></i>' . ' ' . $_species;
        
        break;
      
      default:
      $this->species = $_species;

      break;
    }
  }



  // Getter
  public function getSpecies(){
    return $this->species; 
  }




}