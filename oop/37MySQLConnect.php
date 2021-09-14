<?php 
include 'header.php';
include 'functions.php';

?>
<?php
  

$db = new mysqli("localhost", "root", "", "userdata");
if(mysqli_connect_errno()){
    echo "Connection Fail...";
    exit();
}else{
    echo "Connection Successful ";
}

?>



 <?php include 'footer.php';?>  