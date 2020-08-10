<?php

if(isset($_POST['submit'])){
	
	include_once 'db.php';
	//include 'index.js';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	//$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
 
//Errors handlers
	//check for empty fields
	if(empty($first) ||empty($last) || empty($email) || empty($pwd)){
		header("Location: index.php");
	
	exit();

 	}
 	//else{
// 		//check if input characters are valid
// 		if(!preg_match("/^[a-zA-Z]* $/", $first) || (preg_match("/^[a-zA-Z]* $/", $last))){
// 			header("Location: index.php");
// 	exit();

// 		}else{
// 			//check if email is valid
// 			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
// 				header("Location: index.php");
// 	exit();
// // }else{
// // 	//check the exist username 
// // 	$sql = "SELECT * FROM users WHERE user_uid = 'uid'";
// 	// $result = mysqli_query($conn, $sql);
// 	// $resultCheck = mysqli_num_rows($result);


// 	// if($resultCheck > 0){
// 	// header("Location: ../index.html?index=usertaken");
// 	// exit();
// 	// }
// }
	else{
	//Hashing the password
	//$hashpwd= password_hash($pwd, PASSWORD_DEFAULT);
	//Insert the user into the database
	$sql = "INSERT INTO user(firstname,lastname,email, password) VALUES ('$first' ,'$last', '$email', '$pwd')";
	 $ins = mysqli_query($conn, $sql);

	// $ins = mysqli_query($conn, $sql);
	 $_SESSION['success']="Success! You are successfully Registered";	
	  	header("Location: /Allinoneproject/register/register/index.php");
	 	 	exit();


	 // else{ echo "Not saved";}
	 //header("Location: index.php");
	// exit();
}

			//}
		}


	

// }else{
// 	
// }


?>