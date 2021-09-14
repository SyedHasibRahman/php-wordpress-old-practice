<?php 
include 'header.php';
include 'functions.php';

?>
<?php
class Hasib{
  public $name;
  public $age;
  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }
  public function hD(){
    echo "My name is {$this->name} and I am {$this->age} Old";
  }
}
$haD = new Hasib("Syed Hasib", 27);
$haD->hD();

?>


 <?php include 'footer.php';?> 