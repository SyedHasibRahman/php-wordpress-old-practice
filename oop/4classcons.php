<?php 
include 'header.php';
include 'functions.php';

?>
<?php
  
class UserData{
  public $userName;
  public $userId;
  const NAME = "SYED FAHIM ISLAM";

  public function __construct($name, $id){
    $this->userName = $name;
    $this->userId = $id;

    echo "USER NAME IS {$this->userName} And USER ID is {$this->userId}";
  }

  public function display(){
    echo "Construct Name is :". UserData::NAME;
  }
  public function __destruct(){
    unset($this->userName);
    unset($this->userId);
  }
}

$name = "Syed Hasib";
$id   = 29 ."<br>";
$ud = new UserData($name, $id); 
$ud->display();


?>



 <?php include 'footer.php';?> 