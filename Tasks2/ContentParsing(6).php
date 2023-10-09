<?php
  
$Writec = 'Desserttest.txt';
if(file_exists($Writec))
$Getdata = file_get_contents($Writec);
  
echo $Getdata;

readfile($Writec);

$New = 'contentParsing.txt';
$str = $Getdata;

if (file_put_contents($New, $str)) echo 'The file was created';
else echo 'contentParsing.txt file can not be created';
  
?>
