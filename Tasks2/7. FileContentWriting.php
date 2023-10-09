<?php
  
$Writec = fopen('FileContentWriting.txt',"w");

 echo fwrite($Writec, "New method Implementing Writing into an external textDocument:<br><br> Using file path as parameters<b><br><br>(Using file_get_contents instead of fwrite)</b> ");
echo fclose($Writec);
  
?>