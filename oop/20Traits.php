<?php 
include 'header.php';
include 'functions.php';

?> 

<?php 
  trait Java{
    public function javaCoder(){
      return "I Love Java <br>";
    }
  }
  trait Php{
    public function phpCoder(){
      return "I Love Php <br>";
    }
  }

  trait javaPhp{
    use Java, Php;
  }
  class javaandPhp{
    use javaPhp;
  }
  // Normal way:
  // class coderOne{
  //   use Java, Php;
  // }
  // class coderTwo{
  //   use Java;
  // }
  $c1 = new javaandPhp;
  echo $c1->javaCoder();
  echo $c1->phpCoder();
  // $c2 = new coderTwo;
  // echo $c2->javaCoder();

?>



 <?php include 'footer.php';?> 


 