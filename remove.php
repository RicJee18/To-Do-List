<?php
 
	require_once 'inc/db.php';
 
	if(ISSET($_REQUEST['del_id'])){
		$id = $_REQUEST['del_id'];
		$query=mysqli_query($conn, "SELECT * FROM `task_list` WHERE `id` = '$id'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		mysqli_query($conn , "INSERT INTO `trash` VALUES( '','$fetch[task]', '$fetch[created_at]')") or die(mysqli_error());
		mysqli_query($conn, "DELETE FROM `task_list` WHERE `id` = '$id'") or die(mysqli_error());
		header('location:index.php');
	}
 
?>