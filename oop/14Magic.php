<?php 
include 'header.php';
include 'functions.php';

?> 

<?php  
   class Student{
     public $name;

     public function describe(){
       echo "I am a student <br>";
     }
     //__get($property)
     public function __get($pm){
       echo "$pm does not exist <br>";
     }
     // __set($property, $value)
     public function __set($pm, $value){
       echo "We set $pm->$value <br>";
     }
     // __call($method, $arg_array)
     public function __call($pm, $value){
      echo "There is no <b>$pm</b> method and Argument " . implode(', ',$value);
     }
   }
   $st = new Student();
   $st->describe();
   $st->Hasib;
   $st->age = 15;
   $st->notExistMethod('2','8', '5');

?>



 <?php include 'footer.php';?> 


 