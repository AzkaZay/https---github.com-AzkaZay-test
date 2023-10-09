<?php

/*using private access modifier*/
class Plant {
  
  protected $name;

  public function __construct($name){

    $this->name = $name;
  }

  protected function format()
  {
    return ucwords($this->name);
  }

  public function getName()
  {
    return $this->format();
  }

}

class Airplant extends Plant{

    protected function format(){
        return strtoupper($this->name);
    }
}

$A = new Plant('ORCHIDS');
echo $A->getName();

echo "<br>";
echo "<br>";
echo "<br>";

$B = new Airplant('');
echo $B->getName();

echo "<br>";
?>