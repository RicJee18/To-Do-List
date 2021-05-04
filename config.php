<?php

include_once('inc/db.php');

//inserting data 
if(isset($_POST['submit'])){
    
    $task = $_POST['task']; 


    $sql = 'INSERT INTO `task_list`(`task`) VALUES ("'.$task.'")';

    if($conn->query($sql)){
        header("location:index.php");
    }else{
        echo "Added Failed:".$conn->error;
    }

}

$conn->close();
?>