<?php 
include 'header.php';
include 'functions.php';
include '15Existence2.php';

?> 

<?php 

 
if(class_exists("Student")){
  $st = new Student();
  if(method_exists($st, "describe")){
    $st->describe();
  }else{
    echo "Method not found";
  }
}else{
  echo "class does not exist";
}
?>



 <?php include 'footer.php';?> 


 