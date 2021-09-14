<?php 
include 'header.php';
include 'functions.php';

?>
<?php
class Person{
  public $name;
  public $age;
  public $id;
  public function __construct($name, $age){
    $this->name = $name;
    $this->age =$age;
  }
  public function setId($id){
    $this->id = $id;
  }
  public function __destruct(){
    if(! empty($this->id)){
      echo " Saving Person";
    }
  }
}
$personOne = new Person("Syed Hasib", 27);
$personOne->setId(25);
unset($personOne);

?>


 <?php include 'footer.php';?> 