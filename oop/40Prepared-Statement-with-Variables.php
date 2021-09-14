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

$sql = "insert into tbl_user(name, email, skill) values(?, ?, ?)";
$stmt = $db->prepare($sql);
$stmt->bind_param("sss", $name, $mail, $skill);
$name = "Hasibur Rahman";
$mail = "hasib@gmail.com";
$skill = "Code Lover";
$stmt->execute();
$stmt->close();
$db->close();
 
 

?>



 <?php include 'footer.php';?>  