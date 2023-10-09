<?php
  class AbovelimitException extends Exception { }
  class BelowlimitException extends Exception { }
  class AvoidlimitException extends Exception { }

  try {
    $E = 4;
 
    if ($E < 4) {
      throw new AbovelimitException("Password too small.");
    }
     elseif ($E > 4 && $E < 10) {
      throw new AbovelimitException("Password too long.");
    }
     elseif ($E >= 10) {
      throw new AvoidlimitException("Error, Re-type Password.");
      }
    else {
      echo "Password is within the desired range.";
    }


  /*Catch has been handled thrice*/

  } catch (AbovelimitException $Err) {
   
    echo $Err->getMessage();
  } catch (BelowlimitException $Err) {
    
    echo $Err->getMessage();
  } catch (AvoidlimitException $Err) {

    echo $Err->getMessage();
  }
   
?>