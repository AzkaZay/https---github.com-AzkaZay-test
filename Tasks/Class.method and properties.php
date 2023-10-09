<?php
class Books{
  /* Properties*/
  public $name;

  /* Methods */
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$a = new Books();
$b = new Books();

$a->set_name('Fairy Tale');
$b->set_name('Harry Potter');

echo $a->get_name();
echo "<br>";
echo $b->get_name();
?>