<?php

session_start();

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "all_in_one";

$conn= new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);

//check connection
if(mysqli_connection_error()){
		die('Database connection failed:'.mysqli_connection_error());
}