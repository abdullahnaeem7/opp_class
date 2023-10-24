<?php
include "db_connection.php";

$id = $_GET['ID'];
mysqli_query($conn,"DELETE FROM `pakistan` WHERE id=$id");
header("location:todo.php");
?>