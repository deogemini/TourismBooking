<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "all_in_one";

$conn= mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
		die('Database not connected');
}