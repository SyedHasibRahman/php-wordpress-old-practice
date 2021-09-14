<?php 
include 'inc/header.php';
include "config.php";
include "Database.php";
?>


<?php
    $db = new Database(); 
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($db->link, $_POST['name']);
        $email = mysqli_real_escape_string($db->link, $_POST['email']);
        $skill = mysqli_real_escape_string($db->link, $_POST['skill']);
        if($name == '' || $email == '' || $skill == ''){
            $error = "Field must not be empty!!";
        }else{
            $query = "INSERT INTO tbl_user(name, email, skill) Values('$name', '$email','$skill')";
            $create = $db->insert($query);
        }
    }
?>
<?php
    if(isset($error)){
        echo "<span style='color:red'>".$error."<span>";
    }
?>
<form action="create.php" method="POST">
<table class=" ">
     
    <tr> 
        <td>Name</td>
        <td><input type="text" name="name" placeholder="Please enter name"/></td> 
    </tr> 
    <tr> 
        <td>Email</td>
        <td><input type="text" name="email" placeholder="Please enter email"/></td> 
    </tr> 
    <tr> 
        <td>Skill</td>
        <td><input type="text" name="skill" placeholder="Please enter skill"/></td> 
    </tr> 
    <tr> 
        <td><input type="submit" name="submit"/></td> 
        <td><input type="reset" value="cancel"/></td>  
    </tr> 
</table>
</form>
<a href="index.php">Go Back</a>



 <?php include 'inc/footer.php';?>  