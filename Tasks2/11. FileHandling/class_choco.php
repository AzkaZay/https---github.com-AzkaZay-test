<?php

require_once('traitsss.php');

class Chocolate{

    public $cookies;
    public $cake;

 public function __construct($cookies, $cake){

    $this->cookies = $cookies;
    $this->cake = $cake;
 }

 public function NewCake(){
    echo "You can choose between {$this->cookies} or {$this->cake}.";
 }

}


class Order extends Chocolate{

    public function message(){ 

        echo "<br>";
        echo "<br>";
        echo"<b> Order Options:  </b>";
        echo "<br>";
        echo "<br>";
    }
}

echo "<br>";

if(file_exists("Dessert.txt")) {
   $Pro = fopen("Dessert.txt", "r");
 } else {
   die("Error: The file does not exist.");
 }

$Pro = fopen("Dessert.txt","w+");

/*Add an additional file reading*/

fwrite($Pro, '<b>(File being written into and read+ checks file existence)</b> </br> </br> <b>Menu is: </b>');
fwrite($Pro, '</br></br>Pancakes, '); 
fwrite($Pro, '</br>Waffles, '); 
fwrite($Pro, '</br>Cookies, '); 
fwrite($Pro, '</br>Cake, '); 
fwrite($Pro, '</br>Sandwich, ');
fwrite($Pro, '</br>Treche-leches, ');
fwrite($Pro, '</br>Croissant. ');

rewind($Pro);

echo "<br>";

echo fread($Pro, filesize("Dessert.txt"));
fclose($Pro);

$newfile = fopen("Ice-cream.txt","w+");
fwrite( $newfile, '</br></br><b>Ice-Cream Menu:  </b>');
fwrite( $newfile, '</br></br>$2.00 per cone, ');
fwrite( $newfile, '</br>Sauce dip, ');
fwrite( $newfile, '</br>Sprinkles. ');
rewind($newfile);
echo fread($newfile,filesize("Ice-cream.txt"));
fclose($newfile);



class Vanilla{

    protected $gum;

 public function __construct($gum){

    $this->gum = $gum;
 }

 protected function format(){

    return ucwords($this->gum);

 }

 public function OnlyCake(){
    
    echo "only available dessert in vanilla is {$this->gum}.";
 }
}


class Orange{

    private $Orange;

    public function set_name($Orange){

        $this->Orange = $Orange;

    }
    public function get_name(){

    return $this->Orange;

    }
}

class preferences{

use Sprinkles;

}


$gateauA = new Order("Chocolate chip cookies","Blackforest cake");
$gateauA -> message();
$gateauA -> NewCake();

echo "<b>  (Class consists of an extended class)</b>";

echo"<br>";

echo"<br>";

echo"<br>";

$gateauB = new Vanilla('Vanilla Sponge cake.     <b>(Class message using protected function.)</b>');
$gateauB ->OnlyCake();

echo"<br>";

echo"<br>";

echo"<br>";

$gateauC = new Orange();
$gateauC->set_name('Sorry, No Orange Flavor Dessert is available.    <b>(Class message using private function)</b>');
echo $gateauC->get_name();

echo"<br>";

echo"<br>";

echo"<br>";

$preference1 = new preferences();
$preference1-> ChocolateChip();

echo"<br>";

echo"<br>";

$preference2 = new preferences();
$preference2-> Rainbowvermicellis();

echo"<br>";

echo"<br>";

class cException{

   public $message;
   public function __construct($message){

     $this->message= $message;

   }

   function getMessage(){

   return $this->message;

   }
  function error_message() {

       $error_msg = $this->getMessage().' Invalid Operation. ';
       return $error_msg;
     }

}

$gateauC ='No available Orange Flavor Dessert.    <b>(Error Handling Message)</b>';

try {
   try {
  
     if(($gateauC) !== FALSE) {
 
       throw new Exception($gateauC);
     }
   } catch(Exception $Done) {

     throw new Exception($Done);
   }
 } catch (Exception $NewErr) {

   echo $NewErr->getMessage();
 }
  
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";

 function myException($error_msg) {
   echo $error_msg."<b>Error Message(Exception Caught)</b>";
 }

 set_exception_handler('myException');

 throw new Exception('<b>Uncaught Exception has been caught.</b>');
?>