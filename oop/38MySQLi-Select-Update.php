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
// $sql = "select * from tbl_user";
$sql = "update tbl_user SET skill='java, php' where id= ' 1' ";
$result = $db->query($sql);

// while ($data = $result->fetch_object()) {
//     echo "<pre>";
//     echo $data->skill;
//     echo "</pre>";
// }

?>



 <?php include 'footer.php';?>  