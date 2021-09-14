<?php 
include 'header.php';
include 'functions.php';

?> 

<?php 
  spl_autoload_register(function($class_name){
    include '16sub/'.$class_name.'.php';
  });


  
  $java = new Language24();
  $java->setCat('OOP');
  $java->setFramework('Spring');

  $php = clone $java;
  $php->setCat("Stractural Php");
  $php->setFramework("CodeIgniter");

  echo $java->getCat()."<br>";
  echo $java->getFramework()."<br>";

  echo $php->getCat()."<br>";
  echo $php->getFramework()."<br>";
?>



 <?php include 'footer.php';?> 


 