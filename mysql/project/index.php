<?php 
include 'inc/header.php';
include "config.php";
include "Database.php";
?>


<?php
    $db = new Database();
    $query = "SELECT * FROM tbl_user";
    $read = $db->select($query);
?>
<?php
    if(isset($_GET['msg'])){
        echo "<span style='color:green'>".$_GET['msg']."<span>";
    }
?>

<table class="tlnone">
    <tr>
        <th width="5%">SL</th>
        <th width="35%">Name</th>
        <th width="25%">Email</th>
        <th width="25%">Serial</th>
        <th width="10%">Action</th>
    </tr>
    <?php if($read){?>
    <?php while($row = $read->fetch_assoc()){?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['skill'];?></td>
        <td><a href="update.php?id=<?php echo urlencode($row['id']);?>">Edit</a></td> 
    </tr>
    <?php }?>
    <?php }else{?>
    <p>Data is not Available!</p>
    <?php }?>

</table>
<a href="create.php">Create</a>


 <?php include 'inc/footer.php';?>  