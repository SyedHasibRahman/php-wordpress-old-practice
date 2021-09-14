<?php 
include 'header.php';
include 'functions.php';

?> 

<?php 
class Person{
  public $name;
  public $id;
  public function __construct($userName, $userId){
    $this->name = $userName;
    $this->id = $userId;
    echo "Person Name is: {$this->name} and Person Id is: {$this->id}";
  }
  public function __destruct(){
    unset($this->name);
    unset($this->id);
  }
}
$name = "Syed Hasib";
$id = 27;
$personOne = new Person($name, $id);


?>



 <?php include 'footer.php';?> 