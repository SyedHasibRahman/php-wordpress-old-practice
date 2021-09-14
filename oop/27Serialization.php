<?php 
include 'header.php';
include 'functions.php';

?> 

<?php 
  spl_autoload_register(function($class_name){
    include '16sub/'.$class_name.'.php';
  });



  $pro = new Serialization27();
  $ser = serialize($pro);

  // file_put_contents("Serialization27.txt", $ser);
  // echo $ser;

  $getCont = file_get_contents("Serialization27.txt");
  $unser = unserialize($getCont);
  echo "<pre>";
    print_r($unser);
  echo "</pre>";
 
  
  
?>



 <?php include 'footer.php';?> 


 