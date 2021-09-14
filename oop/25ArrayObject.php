<?php 
include 'header.php';
include 'functions.php';

?> 

<?php 
  // spl_autoload_register(function($class_name){
  //   include '16sub/'.$class_name.'.php';
  // });



  $arr = array("HTML", "CSS", "PHP", "JavaScript");
  $coding = new ArrayObject($arr);
  $coding->append("JAVA");
  $iterator = $coding->getIterator();
  while($iterator->valid()){
    echo $iterator->current()."<br>";
    $iterator->next();
  }

  
  
?>



 <?php include 'footer.php';?> 


 