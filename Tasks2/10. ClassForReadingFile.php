<?php

class read{

   private $Zk;

function set_name($Zk){

$this->Zk = $Zk;

}
function get_name(){
  
   return $this->Zk;

  }
}
   $fp = fopen("ClassForReadingFile.txt", "r");
   $AA = fread($fp, 100);
   echo $AA;
   fclose($fp);
   echo "<br>";
   $thefile = "ClassForReadingFile.txt";
   $fp = fopen($thefile, "r");
   echo $thefile;
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo"<b>ClassForReadingFile.txt has been read from text document</br>";
   fclose($fp);
   echo "<br>";
   echo "<br>";

  $R = new read();
 echo $R -> set_name('<h4><i>Class "read" has been created to write into an external file</i></h4>');
 echo $R -> get_name();
?>
