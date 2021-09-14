<?php 
include 'header.php';
include 'functions.php';

?> 

<?php  
  interface School{
    public function mySchool();
   }
  interface College{
    public function myCollege();
   }
  interface Versity{
    public function myVersity();
   }
   class Teacher implements School, College, Versity{
    public function __construct(){
      $this->mySchool();
      $this->myCollege();
      $this->myVersity();
    }

     public function mySchool(){
       echo " I am a school Teacher <br>";
     }
     public function myCollege(){
       echo " I am a College Teacher <br>";
     }
     public function myVersity(){
       echo " I am a Versity Teacher <br>";
     }
   }
   class Student implements School, College, Versity{
    public function __construct(){
      $this->mySchool();
      $this->myCollege();
      $this->myVersity();
    }

     public function mySchool(){
       echo " I am a school Student <br>";
     }
     public function myCollege(){
       echo " I am a College Student <br>";
     }
     public function myVersity(){
       echo " I am a Versity Student <br>";
     }
   }
   $teacher = new Teacher();
   $student = new Student();
?>



 <?php include 'footer.php';?> 


 <!--  interface School{
    public function mySchool();
  }
  interface College{
    public function myCollege();
  }
  interface Versity{
    public function myVersity();
  }
  class Teacher implements School, College, Versity{
    public function __construct(){
      $this->mySchool();
      $this->myCollege();
      $this->myVersity();
    }
    public function mySchool(){
      echo "I am a school Teacher. <br/>";
    }
    public function myCollege(){
      echo "I am a College Teacher. <br/>";
    }
    public function myVersity(){
      echo "I am a Versity Teacher. <br/>";
    }
  }
  $teacher = new Teacher(); -->