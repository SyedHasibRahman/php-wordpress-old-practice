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
 


  // $cal = new Calculation18(); 
  // // First Part of 18
  // $nums = array(
  //         array('Number One', 10, 10),
  //         array('Number Two', 20,20),
  // );
  // $cal->getValue($nums);

  $wp = new Wordpress;
  new Java($wp);

?>



 <?php include 'footer.php';?> 


 