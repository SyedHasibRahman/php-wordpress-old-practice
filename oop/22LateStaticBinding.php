<?php 
include 'header.php';
include 'functions.php';

?> 

<?php 
  spl_autoload_register(function($class_name){
    include '16sub/'.$class_name.'.php';
  });


  class phpChild extends Php22{
    public static function getClass(){
      return __CLASS__;
  }
  }
$php = new Php22();
$php->framework();
echo "<hr>";
$childphp = new phpChild();
$childphp->framework();

?>



 <?php include 'footer.php';?> 


 