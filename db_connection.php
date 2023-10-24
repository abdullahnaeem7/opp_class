<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "players";

$conn = new mysqli($server,$username,$password,$db_name);
// if($conn->connect_error){
//     die("connection failed: $conn->connect_error");
// }
// echo "connected successfully";