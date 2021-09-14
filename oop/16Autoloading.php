<?php 
include 'header.php';
include 'functions.php';
include '15Existence2.php';

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

  $Ruby = new Ruby;
  $Php = new Php;
  $Java  = new Java;

?>



 <?php include 'footer.php';?> 


 