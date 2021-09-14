<?php 
include 'header.php';
include 'functions.php';

?> 

<?php 
  // spl_autoload_register(function($class_name){
  //   include '16sub/'.$class_name.'.php';
  // });



  $arr = array("HTML", "CSS", "PHP", "JavaScript", "JAVA"); 
  $ai = new ArrayIterator($arr);
  // $limit = new LimitIterator($ai, 0, 2);
  $ci = new CachingIterator($ai);
  foreach($ci as $value){
    echo $value;
    if($ci->hasNext()){
      echo ", ";
    }
  }

  
  
?>



 <?php include 'footer.php';?> 


 