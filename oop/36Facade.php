<?php 
include 'header.php';
include 'functions.php';

?> 

<?php 
    spl_autoload_register(function($class_name){
      include '16sub/'.$class_name.'.php';
    });

   $fa = new Facade();
   $fa->findApartments("Dhanmondi, Dhaka", "mapdiv")
  
  
  
?>



 <?php include 'footer.php';?> 


 