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
 
  $wp = new Wordpress();
  $wp->framework()->Wordpresses()->Cakephp(); 

?>



 <?php include 'footer.php';?> 


 