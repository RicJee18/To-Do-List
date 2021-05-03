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



// if (empty($_POST['task'])) {
//     $errors = "You must fill in the task";
// }else{
//     $task = $_POST['task'];
//     $sql = "INSERT INTO tasks (task) VALUES ('$task')";
//     mysqli_query($db, $sql);
//     header('location: index.php');
// }

//delete task]

$id = $_GET['del_task'];
mysqli_query($conn, "DELETE FROM task_list WHERE id =".$id."");
header('location: index.php');

//update task



$conn->close();
?>