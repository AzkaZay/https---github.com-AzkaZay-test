<?php

/*Declaring a static property*/
class Football {
  
  public static $number = 11;
  public function staticValue(){
    
    echo "Number of members reached: ";

    return self::$number;
    

  }

}

/*Adding a static function within a subclass*/
class team extends Football{

   public static function Teammembers(){
    
    echo "Maximum number of members has been reached.";
    
  }
    
}

$teamnum = new Football();
echo $teamnum->staticValue();
echo "<br>";
echo "<br>";
team::Teammembers();
echo "<br>";

?>