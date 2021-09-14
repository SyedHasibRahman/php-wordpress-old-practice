<?php 
include 'header.php';
include 'functions.php';
include 'config.php';
include 'database.php';
?>
<style>
.tlnone{
    padding: 15px;
    border: 5px solid #333;
    text-align: center;
}
.tlnone th, tr,td{
    padding: 15px;
    border: 5px solid #333;
}
</style>

<?php
    $db = new Database();
    $query = "SELECT * FROM tbl_user";
    $read = $db->select($query);

?>


<table class="tlnone">
    <tr>
        <th width="25%">Name</th>
        <th width="25%">Email</th>
        <th width="25%">Serial</th>
        <th width="25%">Action</th>
    </tr>
    <?php if($read){?>
    <?php while($row =  $read->fetch_assoc()){?>
    <tr>
        <td width="25%"><?php echo $row['name']; ?></td>
        <td width="25%"><?php echo  $row['email']; ?></td>
        <td width="25%"><?php echo  $row['skill']; ?></td>
        <td width="25%"><a href="update.php?id=<?php echo $row['id'];?>">Edit</a></td>
    
    </tr>
    <?php }?>
    <?php }else?>
    <p>Data is not availabe!!</p>
    <?php ?>
</table>



 <?php include 'footer.php';?>  