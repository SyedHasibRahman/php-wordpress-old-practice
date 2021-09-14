<?php 
include 'header.php';
include 'functions.php';

?> 

<?php 
  spl_autoload_register(function($class_name){
    include '16sub/'.$class_name.'.php';
  });


  new Database();
  new Database();
  new Database();
  new Database();
  new Database();
 
  
  
?>



 <?php include 'footer.php';?> 


 