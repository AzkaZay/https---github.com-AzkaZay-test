<?php

class ecr{

    private $Zk;

 function set_name($Zk){

$this->Zk = $Zk;

}
 function get_name(){
   
    return $this->Zk;

}

}

 $Ecrire = fopen("8. UnDoc.txt", "w");

 $Line = "Une nouvelle route a choisir";

 fwrite($Ecrire, $Line);
 fclose($Ecrire);

 echo "<b>Message had been displayed in UnDoc.txt</b>";
 echo "<br>";
 echo "<br>";
 echo "<b>Note that once written, changes cannot be displayed on UnDoc.txt unless page is refreshed for UnDoc.php as well. </b>";

   echo "<br>";
   echo "<br>";

  $F = new ecr();
 echo $F -> set_name('<h4><i>Class "ecr" has been created to write into an external file</i></h4>');
 echo $F -> get_name();
?>