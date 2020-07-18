<?php

session_start();

if(isset($_POST['submit'])){
	include 'dbh.php';

	$uid = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
echo "deo";
	//Error handlers 
	//Check if input are empty
	// if(empty($uid) || empty($pwd)){
	// 	header("Location: /login.php?login=empty");
	// 		exit();
	// }else{
	// 	$sql = "SELECT * FROM users WHERE email='email'";
	// 	$result = mysql_query($conn, $sql);
	// 	$resultCheck = mysql_num_rows($result);
	// 	if($resultCheck < 1){
	// 		header("Location: /login.php?login=error");
	// 		exit();
	// 	}else{
	// 		if($row = mysqli_fetch_assoc($result)){
	// 			// Dehashing the password
	// 			$hashedPwdCheck = password_verify($pwd, $row['password']);
	// 			if($hashedPwdCheck == false){
	// 				header("Location: login.php?login = error");
	// 				exit();
	// 			}elseif ($hashedPwdCheck == true) {
	// 				//log in the user here 
	// 				$_SESSION['first']  = $row['firstname'];
	// 				$_SESSION['last']  = $row['last'];
	// 				$_SESSION['email']  = $row['email'];
	// 				$_SESSION['pwd']  = $row['password'];
	// 				header("Location: index.html?login=success");
	// 				exit();

	// 			}
	// 		}
	// 	}
	// }
	}else{
	header("Location: /login.php?login=error");
		exit();
	 }


