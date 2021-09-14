<?php 
include 'header.php';
include 'functions.php';

?> 

<?php 
  spl_autoload_register(function($class_name){
    include '16sub/'.$class_name.'.php';
  });

  // Old way to Autoload
  // function __autoload($class_name){
  //   echo $class_name .'<br>';
  //   include '16sub/'.$class_name.'.php';
  // }
 
  $cal = new Calculations();
  echo "Results is: ". $cal->getValue(3, 5)->getResult();

?>



 <?php include 'footer.php';?> 


 