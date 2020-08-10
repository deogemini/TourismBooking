<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<?php
 	session_start();
 	if(isset($_SESSION['success'])){
 		print("<p style='background-color: green;color:white;padding:10px 20px;'>".$_SESSION['success']."</p>");
 	}
 	session_destroy();
 	
 	?>

		<div class="wrapper" style="background-color: #ccb779">
			<div class="inner" style="background-color: #ccb779">
				<div class="image-holder">
					<img src="tz.jpg" alt="image">
				</div>
				<!-- tag ya registration -->
				<form action="registration.php" method="POST">
					<h3>Customer self registration</h3>
					<div class="form-group">
						<input type="text" placeholder="First Name" class="form-control" name="first" >
						<input type="text" placeholder="Last Name" class="form-control" name="last">
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" class="form-control" name="email">
						<i class="zmdi zmdi-email"></i>
					</div>
				
					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" name="pwd">
						<i class="zmdi zmdi-lock"></i>
					</div>
			
					<button type="submit" name="submit" <a href="index.html">Save your Details here
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
					<button type="submit" ><a href="/Allinoneproject/login/login/login.php">Click here to login</a>
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>
</html>