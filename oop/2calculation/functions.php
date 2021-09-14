<?php
    class calculatin{
        public function add($x, $y){
            echo "Summation :" .($x+$y). "<br>";
        } 
        public function sub($x, $y){
            echo "Subtraction: " .($x-$y). "<br>";
        } 
        public function mul($x, $y){
            echo "Multiplication : " .($x*$y). "<br>";
        }
        public function div($x, $y){
            echo "Division :" .($x/$y). "<br>";
        }
        public function mod($x, $y){
            echo "Modulation :" .($x%$y). "<br>";
        }
    }
?>