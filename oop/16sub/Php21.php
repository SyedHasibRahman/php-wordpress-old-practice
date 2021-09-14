<?php
   abstract class Php21{
       public function framework(){
           echo "Base Class Constant and Class Name is:->".__CLASS__."<br>";
           echo "Base Class Function and Class Name is:->".get_class($this)."<br>";
       }
   }


?>