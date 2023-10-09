<?php

trait text1 {
  public function txt1() {
    echo "STRAWBERRY ";
  }
}

trait text2 {
  public function txt2() {
    echo "apple";
  }
}

trait text3 {
  public function txt3() {
    echo "Banana";
  }
}

class Inbox {
  use text1;
}

class Inbox2 {
  use text1, text2, text3;
}

class Inbox3 {
  use text1, text3;
}

$x = new Inbox();
$x -> txt1();

echo "<br>";
echo "<br>";
echo "<br>";

$y = new Inbox2();
$y -> txt1();
echo "<br>";

$y -> txt2();
echo "<br>";
echo "<br>";
echo "<br>";

$z = new Inbox3();
$z -> txt1();
echo "<br>";

$z -> txt3();
echo "<br>";
echo "<br>";
echo "<br>";

?>