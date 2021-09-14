<?php 
include 'header.php';
include 'functions.php';

?> 

<?php 
  spl_autoload_register(function($class_name){
    include '16sub/'.$class_name.'.php';
  });

  $person = new Person19();
  foreach ($person as $key => $value){
    echo "<pre>";
    echo "$key => $value";
    echo "</pre>";
  }
  $person->iteratorInner();

?>



 <?php include 'footer.php';?> 


 