<?php 
include 'header.php';
include 'functions.php';

?> 

<?php 
// The Basis of Polymorphism is Inheritance and Overriden methods
class Person{  
  public $name;
  public $id;   
  public function __construct($userName, $userId){
    $this->name = $userName;
    $this->id = $userId;
  }  
  public function display(){
    echo "Person Name is: {$this->name} and Person Id is: {$this->id} <br>"; 
     
  }  

} 

class admin extends Person{
  public $level;
  public function display(){
    echo "Person Name Is: {$this->name} and Person Age is {$this->id} and also His Level Is: {$this->level} <br>";  
  }
}
 

$name = "Syed Hasib";
$id = 27;
$personOne = new Person($name, $id);
echo "<br>";
$personOne->display();  
$name = "Syed Fahim";
$id = 3;
$ad = new admin($name, $id); 
$ad->level = "Administrator";
$ad->display(); 

if($ad instanceof Person){
  echo " Inharited";
}else{
  echo " Not Inherited";
}
?>



 <?php include 'footer.php';?> 