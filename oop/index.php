<?php 
include 'header.php';
include 'functions.php';

?>
<?php
  

// Abstract
abstract class Student{
  public $name;
  public $age;

  public function details(){
    echo "His Name is {$this->name} and His Age is {$this->age} <br>";
  }

  abstract public function School();
}

class boy extends Student{
  public function describe(){
    return parent::details() . " I am a student of islam <br>";
  }
  public function School(){
    return "I like to read islamic book";
  }

}
$s = new boy;
$s->name = "Fahim";
$s->age = 5;
echo $s->describe();
echo $s->School();

?>



 <?php include 'footer.php';?>  