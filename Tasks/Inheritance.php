<?php
class Sweet{
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The biscuit is {$this->name} and the color is {$this->color}."; 
  }
}

class Oreo extends Sweet {
  public function message() {
    echo "Biscuit, "; 
  }
}

/*The Class oreo inherits the code for the name and color of the Parent class(Sweet)*/ 

$Biscuit = new Oreo("Oreo", "Dark chocolate");
$Biscuit->message();
$Biscuit->intro();

?>