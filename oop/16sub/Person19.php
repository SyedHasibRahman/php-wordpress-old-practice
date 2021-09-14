<?php
   class Person19{ 
       public $Name         = "Syed Hasib";
       public $Age          = 27;
       public $Skill        = "Learning";
       private $Email       = "isyedhasib@gmail.com";
       protected $Password  = "12345"; 

       
       public function iteratorInner(){
         echo " Inside Class <br>";
        foreach ($this as $key => $value){
          echo "<pre>";
          echo "$key => $value";
          echo "</pre>";
        }
       } 
   } 
  
   
?>