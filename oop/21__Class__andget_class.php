<?php 
include 'header.php';
include 'functions.php';

?> 

<?php 
  spl_autoload_register(function($class_name){
    include '16sub/'.$class_name.'.php';
  });


   class phpChild extends Php21{
     public function cms(){
       echo "Child Class Constant and class name->".__CLASS__."<br>";
       echo "Child Class Function and class name->".get_class($this)."<br>";
     }
     public function ourMethod(){
       parent::framework();
     }
   }
   $php = new phpChild();
   $php->framework();
   echo '<hr/>';
   $php->cms();
   echo '<hr/>';
   $php->ourMethod();
?>



 <?php include 'footer.php';?> 


 