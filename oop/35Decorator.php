<?php 
include 'header.php';
include 'functions.php';

?> 

<?php 
    spl_autoload_register(function($class_name){
      include '16sub/'.$class_name.'.php';
    });

  $post         = new Post();
  $comment      = new Comment();
  $post->filter();
  $comment->filter();
  
  if (
    $BBCodeEnable == false && EmoticonEnable == false) {
    $postContent = $post->getContent();
    $commentContent = $comment->getContent();

  } else if(
    $BBCodeEnable == true && EmoticonEnable == false){
    $bb = new BBCodeParser($post);
    $postContent = $bb->getContent();

    $bb = new BBCodeParser($comment);
    $commentContent = $bb->getContent();
  }else if(
    $BBCodeEnable == false && EmoticonEnable == true){
    $em = new Emoticon($post);
    $postContent = $em->getContent();

    $bb = new Emoticon($comment);
    $commentContent = $bb->getContent();
  }
  
  
  
?>



 <?php include 'footer.php';?> 


 