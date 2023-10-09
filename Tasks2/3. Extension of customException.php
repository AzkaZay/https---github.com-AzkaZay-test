<?php

class CustomException{
public $message;
}

function divide($numerator,$denominator){
    if($denominator == 0){
        throw new Exception("Division by zero");
    }

    return $numerator/$denominator;
}

try{

    echo divide(5,0);
} catch(Exception $result){
    echo "Division failed.";
}

class custom extends CustomException{

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

       echo "<br>";
       echo "<br>";
       echo "<br>";

     $Div = "<b>Try to divide the numerator by a number that does not equal to zero.</b> ";

  try {
    try {
   
      if(($Div) !== FALSE) {
  
        throw new Exception($Div);
      }
    } catch(Exception $DivNum) {

      throw new Exception($DivNum);
    }
  } catch (Exception $NewErr) {

    echo $NewErr->getMessage();
  }
   
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

  function myException($error_msg) {
    echo $error_msg."<b>ERROR</b>";
  }

  set_exception_handler('myException');

  throw new Exception('<b>Uncaught Exception has been caught.</b>');


?>