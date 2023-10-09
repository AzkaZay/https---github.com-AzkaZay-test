<?php

function popError($errno, $errstr) {
  echo "<b>ERROR</b> [$errno] $errstr<br>";
  echo "Operation failed.";
  die();
}


set_error_handler("popError",E_USER_WARNING);


$op=100;
if ($op>=100) {
  trigger_error("Value must be below 100",E_USER_WARNING);
}
?>
