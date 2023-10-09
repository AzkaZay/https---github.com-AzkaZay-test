<?php

/*using private access modifier*/
class Gallery {
  
  private $name;

/*Makes use of the getter and setter method to retrieve data/property outside of the class*/

  public function setName($name) {
    
    $this->name = $name;
  }
  
  public function getName() {
    
    return $this->name;
  }

}

$a = new Gallery();
$a->setName('Fairy Tale');

echo $a->getName();



echo "<br>";

?>