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
		<!-- <?php 
	//include_once 'registration.php';
		?>  -->

		<div class="wrapper" style="background-color: #ccb779">
			<div class="inner" style="background-color: #ccb779">
				<div class="image-holder">
					<img src="tz.jpg" alt="image">
				</div>
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
				<!-- 	<div class="form-wrapper">
						<select name="" id="" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option> 							<option value="other">Other</option>
 --						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div> -->
						<!-- <div class="form-wrapper">
						<select name="" id="" class="form-control">
							<option value="" disabled selected>Country</option>
							<option value="male">Tanzania</option>
							<option value="femal">United State of America</option>
							<option value="male">Mali</option>
							<option value="femal">Kenya</option>
							<option value="male">China</option>
							<option value="femal">Brazil</option  							<option value="other">Other</option>
 						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div> -->
					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" name="pwd">
						<i class="zmdi zmdi-lock"></i>
					</div>
				<!-- 	<div class="form-wrapper">
						<input type="password" placeholder="Confirm Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div> -->
					<button type="submit" name="submit" <a href="index.html">Save your Details here
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>
</html>