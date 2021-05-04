<?php
 
	require_once 'inc/db.php';
 
	if(ISSET($_REQUEST['del_id'])){
		$trash_id = $_REQUEST['del_id'];
		$query=mysqli_query($conn, "SELECT * FROM `trash` WHERE `trash_id` = '$trash_id'") or die(mysqli_error());
		$fetch=mysqli_fetch_array($query);
		mysqli_query($conn, "INSERT INTO `task_list` VALUES('', '$fetch[task]', '$fetch[created_at]')") or die(mysqli_error());
		mysqli_query($conn, "DELETE FROM `trash` WHERE `trash_id` = '$trash_id'") or die(mysqli_error());
		header('location:trash.php');
	}
    
    if(isset($_REQUEST['delperma_id'])){
        $trash_id = $_REQUEST['delperma_id'];
        $query=mysqli_query($conn, "DELETE FROM `trash` WHERE `trash_id` = '$trash_id'") or die(mysqli_error());
        header('location:trash.php');
        
    }
?>