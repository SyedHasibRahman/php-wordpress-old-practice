<?php 
include 'header.php';
include 'functions.php';

?>
 
 
   <form action="" method="post">
    <table>
      <tr>
        <td>Enter the first Numer : </td>
        <td><input type="number" name="num1"/></td>
      </tr>
      <tr>
        <td>Enter the second Numer : </td>
        <td><input type="number" name="num2"/></td>
      </tr>
      <tr> 
        <td></td>
        <td><input type="submit" name="sum" value="Sum" /></td>
        <td><input type="submit" name="sub" value="Sub" /></td>
        <td><input type="submit" name="mul" value="Mul" /></td>
        <td><input type="submit" name="div" value="Div" /></td>        
        <td><input type="submit" name="calculation" value="Calculate" /></td>
      </tr>
    </table>
   </form>
   
   <?php
 if(isset($_POST['calculation'])){
   $numOne = $_POST['num1'];
   $numTwo = $_POST['num2'];

   if(empty($numOne) or empty($numTwo)){
     echo "<span style='color: red'> Field must not be empty.</span><br>";
   }else{
     
   echo "Number One is $numOne and Number Two is $numTwo <br>";
    $cal = new Calculation;
    $cal->add($numOne,$numTwo);
    $cal->sub($numOne,$numTwo);
    $cal->mul($numOne,$numTwo);
    $cal->div($numOne,$numTwo);
    $cal->mod($numOne,$numTwo);
   }

 }

 if(isset($_POST['sum'])){
  $numOne = $_POST['num1'];
  $numTwo = $_POST['num2'];

  if(empty($numOne) or empty($numTwo)){
    echo "<span style='color: red'> Field must not be empty.</span><br>";
  }else{
    
  echo "Number One is $numOne and Number Two is $numTwo <br>";
   $cal = new Calculation;
   $cal->add($numOne,$numTwo); 
  }

} 
if(isset($_POST['sub'])){
  $numOne = $_POST['num1'];
  $numTwo = $_POST['num2'];

  if(empty($numOne) or empty($numTwo)){
    echo "<span style='color: red'> Field must not be empty.</span><br>";
  }else{
    
  echo "Number One is $numOne and Number Two is $numTwo <br>";
   $cal = new Calculation;
   $cal->sub($numOne,$numTwo); 
  }

}  
if(isset($_POST['mul'])){
  $numOne = $_POST['num1'];
  $numTwo = $_POST['num2'];

  if(empty($numOne) or empty($numTwo)){
    echo "<span style='color: red'> Field must not be empty.</span><br>";
  }else{
    
  echo "Number One is $numOne and Number Two is $numTwo <br>";
   $cal = new Calculation;
   $cal->mul($numOne,$numTwo); 
  }

} 
if(isset($_POST['div'])){
  $numOne = $_POST['num1'];
  $numTwo = $_POST['num2'];

  if(empty($numOne) or empty($numTwo)){
    echo "<span style='color: red'> Field must not be empty.</span><br>";
  }else{
    
  echo "Number One is $numOne and Number Two is $numTwo <br>";
   $cal = new Calculation;
   $cal->div($numOne,$numTwo); 
  }

} 
 ?>
 
     
   
 <?php include 'footer.php';?>
