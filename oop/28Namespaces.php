<?php 
include 'header.php';
include 'functions.php';

?> 

<?php 
  // spl_autoload_register(function($class_name){
  //   include '16sub/'.$class_name.'.php';
  // });
  include '16sub/Php.php';
  include '16sub/Java.php';
  include '16sub/Ruby.php';

    use hasib\live\Ruby as ru;
   new hasib\Java();
   new hasib\Php();
   new ru();
   echo HTML ."<br>";
   echo hasib\CSS."<br>";
   hasib\coder()."<br>";
 
  
  
?>



 <?php include 'footer.php';?> 


 