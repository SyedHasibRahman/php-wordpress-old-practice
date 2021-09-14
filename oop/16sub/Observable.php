<?php
     class Observable{
         private $observers = array();

         public function register($object){
             if ($object instanceof Observer) {
                $this->observers[] = $object;
             } else {
                 echo "Object should be implements Observer interface...<br>";
             }
             
         }

         public function stateChange(){
             foreach ( $this->observers as $observer) {
                $observer->message();
             }
         }
     }
?>