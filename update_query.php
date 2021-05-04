<?php
  require_once 'inc/db.php';
 
  if(ISSET($_POST['update'])){
    $id = $_POST['id'];
    $task = $_POST['task'];
    mysqli_query($conn, "UPDATE `task_list` SET `task` = '$task' WHERE `id` = '$id'") or die(mysqli_error());
    header("location: index.php");
    
  }
?>