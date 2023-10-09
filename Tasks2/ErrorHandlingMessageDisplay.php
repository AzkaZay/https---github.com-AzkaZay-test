<?php

class UniqueNum extends Exception{}
class UniqueNum2 extends Exception{}
  


function CheckNum($X,$Y){

if ($Y==0){
  throw new UniqueNum ("the operation is impossible");



  }else if ($X==0){

  throw new UniqueNum2 ("Action returns to zero");



  }
  
}


try{


  echo CheckNum(0,5);

} catch(UniqueNum $K){

  echo $K-> getMessage();

}
catch(UniqueNum2 $K){

  echo $K-> getMessage();

}


?>