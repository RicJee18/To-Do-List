<?php

include_once('inc/db.php');

//inserting data 
if(isset($_POST['submit'])){
    
    $task = $_POST['task']; 


    $sql = 'INSERT INTO `task_list`(`task`) VALUES ("'.$task.'")';

    if($conn->query($sql)){
        
        echo "<script>Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
          });</script>";

        header("location:index.php");
    }else{
        echo "Added Failed:".$conn->error;
    }

}


//delete task]

// $id = $_GET['del_task'];
// mysqli_query($conn, "DELETE FROM task_list WHERE id =".$id."");
// header('location: index.php');


// INSERT INTO db_1.table1 (value_1, value_2) SELECT value_3, value_4 FROM db_2.table2 WHERE db_2.table2.id = 5"


$conn->close();
?>