<?php
$LIST = $_GET['list'];
include "db_connection.php";
mysqli_query($conn, "INSERT INTO `pakistan`(`list`) VALUES ('$LIST')");

header("location:todo.php");


?>