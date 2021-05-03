<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "to-do-task";

$conn = new mysqli($servername, $username, $password, $db);

//check connections
if ($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);
}



?>