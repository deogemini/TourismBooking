<?php 
  session_start();
 

if(isset($_POST['submit'])){

	include 'dbh.php'; 

	$email = $_POST["email"];
	$pwd = $_POST["pwd"]; 

	//Error handlers 
	//Check if input are empty
	if(empty($email) || empty($pwd)){
		header("Location: /login.php?login=empty");

			exit();
	}
	else{
		$sql = "SELECT id FROM user WHERE email='$email' and password = '$pwd' ";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1){
			header("Location: /login/login.php?login=error");
			exit();
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

					$_SESSION['success']="Success! You are successfully login";
					header("Location: /Allinoneproject/Booking/Booking.php");
					exit();

				}
			
	header("Location: deos.php");
	exit();
	 
 }
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>This Will be login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
			<?php
 	 	if(isset($_SESSION['success'])){
 		print("<p style='background-color: green;color:white;padding:10px 20px;'>".$_SESSION['success']."</p>");
 	}
 	session_destroy();
 	
 	?>

		<div class="wrapper" style="background-color: #ccb779 ">
			<div class="inner" style="background-color: #ccb779">
				<div class="image-holder">
					<img src="tips.jpg" alt="">
				</div>
				<form action="" method="POST">
					<h3>Welcome to login page</h3>
					<!-- <div class="form-group">
						<input type="text" placeholder="First Name" class="form-control">
						<input type="text" placeholder="Last Name" class="form-control">
					</div> -->
					<!-- <div class="form-wrapper">
						<input type="text" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>
 -->					<div class="form-wrapper">
						<input type="text" name="email" placeholder="Email Address" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<!-- <div class="form-wrapper">
						<select name="" id="" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
 -->						<!-- </select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div> -->
 					<div class="form-wrapper">
						<input type="password" 
						name = "pwd" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<!-- <div class="form-wrapper">
						<input type="password" placeholder="Confirm Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div> -->
					<button name ="submit" class="btn">Press To Login
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>