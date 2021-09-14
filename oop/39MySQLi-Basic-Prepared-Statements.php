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
$sql = "select name,skill from tbl_user order by id";
$stmt = $db->prepare($sql);
$stmt->exicute();
$stmt->bind_result($name, $skill);
while ($stmt->fetch()) {
    echo "skill <br>";
}
 

?>



 <?php include 'footer.php';?>  