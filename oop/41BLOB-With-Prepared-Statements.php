<?php 
include 'header.php';
include 'functions.php';

?>
<?php
  

$db = new mysqli("localhost", "root", "", "test");
if(mysqli_connect_errno()){
    echo "Connection Fail...";
    exit();
}else{
    echo "Connection Successful <br>";
} 


$sql = "select image from images where id=?";
$stmt = $db->prepare($sql); 
$stmt->bind_param('i', $id);
$id = 2;
$stmt->execute();
$stmt->bind_result($image);
$stmt->fetch();
header("content-type: png");
echo '<img src="data:image/png;base64, '.base64_encode($image).'">';

/*

$sql = "insert into images(image) values(?)";
$stmt = $db->prepare($sql); 
$stmt->bind_param("b", $image);
$image = file_get_contents("ME.png");
$stmt->send_long_data(0, $image);
$stmt->execute();

*/
?>


 <?php include 'footer.php';?>  