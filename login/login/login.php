<?php 
  session_start();
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

		<div class="wrapper" style="background-color: #ccb779 ">
			<div class="inner" style="background-color: #ccb779">
				<div class="image-holder">
					<img src="tips.jpg" alt="">
				</div>
				<form action="login.inc.php" method="POST">
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
					<button>Press To Login
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>