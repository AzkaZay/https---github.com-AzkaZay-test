<?php

$newRead = fopen("TestDessert.txt","r");
echo fread($newRead, filesize("TestDessert.txt"));
rewind($newRead);
fclose($newRead);
?>