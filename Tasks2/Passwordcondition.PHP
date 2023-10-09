<?php
  class AB{
  
    public $Password;
    public $message;

}
    

function checkNum($number) {
    if(strlen($number) >= 4) {
      throw new Exception("PASSWORD LENGTH ACCEPTED");
    }
    return true;
  }
  
  //trigger exception in a "try" block
  try {
    checkNum('999P');

    //If the exception is thrown, this text will not be shown
    echo 'ERROR, PASSWORD IS BELOW 4 CHARACTERS';
  } catch(Exception $x) {
    echo 'Message: ' .$x->getMessage();
  }

?>