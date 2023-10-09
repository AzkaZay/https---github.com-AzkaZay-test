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

 echo divide(10,0);
  
} catch(Exception $result){
  
    echo "Division failed.";

}