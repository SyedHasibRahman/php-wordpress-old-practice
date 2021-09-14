<?php 
include 'header.php';
include 'functions.php';

?> 

<?php 
class Person{
  public $name;
  public $id; 
  const NAME = "Syed Hasibur Rahman";
  public static $age = 27;
  public function __construct($userName, $userId){
    $this->name = $userName;
    $this->id = $userId;
    echo "Person Name is: {$this->name} and Person Id is: {$this->id}";
  }  
  public function display(){
    echo "Full Name Is: " . Person::NAME . "<br>";
    echo "Age is :" . self::$age. "<br>"; // Static Mehod
  }
  public static function newDisplay(){
    echo "This is Static Function";
  }
  public function __destruct(){
    unset($this->name);
    unset($this->id);
  }
}
$name = "Syed Hasib";
$id = 27;
$personOne = new Person($name, $id);
echo "<br>";
$personOne->display();
Person::newDisplay(); //Static Object 

?>



 <?php include 'footer.php';?> 