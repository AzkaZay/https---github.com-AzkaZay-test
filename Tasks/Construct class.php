<?php
class Book {
  
  public $author;

  function __construct($author){

    $this->author= $author;

  }

  function get_name() {

    return $this->author;
  }

} 

  $y= new Book("Harry Potter");
  echo $y->get_name();

 
?>