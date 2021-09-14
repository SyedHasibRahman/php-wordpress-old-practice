<?php 
include 'header.php';
include 'functions.php';

?>
 <form action="" method="POST" >
  <table>
    <tr>
      <td>Enter The First Number  :</td>
      <td><input type="number" name="num1"/></td>
    </tr>
    <tr> 
      <td> Enter The secound Number : </td>
      <td> <input type="number" name="num2"/> </td>    
    </tr>
    <tr>
      <td> </td>
      <td><input type="submit" name="calculation" value="Calculate"/></td>
    </tr>

  </table> 
 <form>

 <?php
  if(isset($_POST['calculation'])){
    $numOne = $_POST['num1'];
    $numTwo = $_POST['num2'];

  if(empty($numOne) or empty($numTwo)){
    echo "<span style='color:red'>Field must not be empty.<span>";
  }else{
    echo "Number one is $numOne and Number Two is $numTwo <br>";
    $cal = new calculatin;
    $cal->add($numOne, $numTwo);
    $cal->sub($numOne, $numTwo);
    $cal->mul($numOne, $numTwo);
    $cal->div($numOne, $numTwo);
    $cal->mod($numOne, $numTwo);
  }


}
 ?>
 
     
   
 <?php include 'footer.php';?>
