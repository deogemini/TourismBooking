<?php


if(isset($_POST['submit'])){
	
	include_once 'bookingdb.php';
	


	$hotel = $_POST["hotel"];
	$numCustomer = $_POST["numCustomer"];
	$entryDate =$_POST["entryDate"];
	$exitDate =  $_POST["exitDate"];
	$phoneNumber = $_POST["phoneNo"];

	
 
// //Errors handlers
 	//check for empty fields
//  	if(empty($hotel) || empty($numCustomer)||empty($entryDate) || empty($exitDate) || empty($emailUser)){
//  		header("Location: /All in oneproject/Booking.php?Booking=empty");
// exit();


//  	//else{
// // 		//check if input characters are valid
// // 		if(!preg_match("/^[a-zA-Z]* $/", $first) || (preg_match("/^[a-zA-Z]* $/", $last))){
// // 			header("Location: index.php");
// // 	exit();

// // 		}else{
// // 			//check if email is valid
// // 			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
// // 				header("Location: index.php");
// // 	exit();
// // // }else{
// // // 	//check the exist username 
// // // 	$sql = "SELECT * FROM users WHERE user_uid = 'uid'";
// // 	// $result = mysqli_query($conn, $sql);
// // 	// $resultCheck = mysqli_num_rows($result);


// // 	// if($resultCheck > 0){
// // 	// header("Location: ../index.html?index=usertaken");
// // 	// exit();
// // 	// }
 
// 	//Hashing the password
// 	//$hashpwd= password_hash($pwd, PASSWORD_DEFAULT);
// 	//Insert the user into the database

 	$sql = "INSERT INTO booking (hotel, numCustomer,entryDate, exitDate, phoneNo) VALUES ('$hotel','$numCustomer' ,'$entryDate', '$exitDate', '$phoneNumber')";
 	  mysqli_query($conn, $sql);
 	  $_SESSION['success']="Success! Your booking sent successfully";
  	  	 	header("Location: Booking.php");
	 	 



// 			//}
 		}



	

// // }else{
// // 	
 


?>