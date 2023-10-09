<?php

/*using public access modifier*/
class Gallery {
  
  public $name;

  
  public function getName() {
    
    return $this->name;
  }

}
/*property can be accessed both inside and outside the class(Gallery)*/
$a = new Gallery();
$a->name ='Fairy Tale';

echo $a->getName();
echo "<br>";

?>