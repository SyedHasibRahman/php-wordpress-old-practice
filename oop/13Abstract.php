<?php 
include 'header.php';
include 'functions.php';

?> 

<?php  
   abstract class Student{
    public $name;
    public $age;

    public function details(){
      echo $this->name . " is " . $this->age . " years old <br>";
    }
    abstract public function School();
  }
  class Boy extends Student{
    public function describe(){
      return parent::details(). " and I am a job holder <br>";
    }
    public function School(){
      return "I like to read story books.";
    }
  }

  $s = new Boy();
  $s->name ="Syed Hasib";
  $s->age = 27;
  echo $s->describe();
  echo $s->School();

?>



 <?php include 'footer.php';?> 


 