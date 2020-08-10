<?php
session_start();


if(isset($_POST['submit'])){

	die("clicked");
	include 'dbh.php'; 

	$email = mysqli_real_escape_string($conn, ($_POST["email"]));
	$pwd = mysqli_real_escape_string($conn, ($_POST["pwd"]));

	//Error handlers 
	//Check if input are empty
	if(empty($email) || empty($pwd)){
		header("Location: /login.php?login=empty");
		// echo "testing";
			exit();
	}
	else{
		$sql = "SELECT * FROM users WHERE email='$email' and password = '$pwd' ";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1){
			header("Location: login/login.php?login=error");
			exit;
		}
		else{
			// if($row = mysqli_fetch_assoc($result)){
			// 	// Dehashing the password
			// 	$hashedPwdCheck = password_verify($pwd, $row['password']);
			// 	if($hashedPwdCheck == false){
			// 		header("Location: login.php?login = error");
			// 		exit();
			// 	}elseif ($hashedPwdCheck == true) {
					//log in the user here 
					//$_SESSION['first']  = $row['firstname'];
					//$_SESSION['last']  = $row['last'];
					$_SESSION['email']  = $row['email'];
					$_SESSION['pwd']  = $row['password'];
					header("Location: deos.php");
					exit();

				}
			
	header("Location: deos.php");
	exit();
	 
 }
}
