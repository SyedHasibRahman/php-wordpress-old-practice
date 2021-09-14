<?php 
include 'header.php';
include 'functions.php';

?>
<?php

class Person{
  public $name;
  public $age;

  public function PersonName(){
    echo "Person Name is ". $this->name . "<br>";
  }

  public function PersonAge($value){
    echo "Person Age is " . $this->age=$value;
  }
}
$PersonOne = new Person;
$PersonOne->name="Syed Fahim";
$PersonOne->PersonName();
$PersonOne->PersonAge(5);

?>



 <?php include 'footer.php';?> 