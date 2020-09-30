
 <!DOCTYPE html>
 <html>
 <head>
   <title>Tourisim</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="bootstrap/bootstrap/js/bootstrap.js"></script>
  	<link rel="stylesheet" href="/Allinoneproject/Assert/style.css">
	<link rel="stylesheet" href="/Allinoneproject/Assert/slick.css">
  </head>
 <body style="background-color: orange" >
 	<?php
 	// session_start();
 	if(isset($_SESSION['success'])){
 		print("<p style='background-color: green;color:white;padding:10px 20px;'>".$_SESSION['success']."</p>");
 	}
 	?>
  <div class="header" align="center" >

      <h1 class="branding-title">Tourism booking page </h1>
      <div class="header" id="header">
      <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
 

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar" >
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#booking">Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#nationalpark">National Parks </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About us</a>
      </li>
      <li class="nav-item">
       	<form action="/Allinoneproject/logout.php" method="POST">
       		<button type="submit" name="submit" class="nav-item">LOGOUT</button>
       		
       	</form>
      </li>

    </ul>
    <?php
    	include_once 'bookingdb.php';
    	$sql = "SELECT * FROM booking WHERE id=1";
		$result = mysqli_query($conn, $sql);
		$status = mysqli_num_rows($result);
		if ($status>0) {
			print("<p style='background-color: blue;color:white;padding:10px 20px;'>APPROVED</p>");
		}
    ?>
  </div>

</nav> 
<br>
</div>

<div class="about-section" id="about" style="background-color: light-orange">
	<div class="container-fluid">
		<div class="col-sm -d-flex-column justify-content-centeralign-items-center">
  <h1>About this </h1>
  <h3>when your planning for your tour you can make booking by visiting this page fill the options and  submit the request to us we will save your details for booking application in order to help you to enjoy your trip</h3>
  <h3>be Able to see the pictures of different national parks which are found in Tanzania With they are names will help to be more exited to visit  different places with the beauty of Tanzania</h3>
  <strong><br></strong>

</div>
</div>
</div>

<div class="site-container" id="booking" >
<form  action="bookingRegister.php" method="POST">
<h1> Book Every Thing You Need </h1 >
<div class="form-group">
<label><h4> Hotels</h4></label>
<select name="hotel" class="form-control">
	<option value="Serena Hotel">Serena Hotel</option>
	<option value="Tiffa's Hotel" >Tiffa's Hotel</option>
	<option value="Millenium Hotel">Millenium Hotel</option>
	<option value="Sheraton Hote">Sheraton Hotel</option>
	<option value="New African Hotel">New African Hotel</option>
	<option value="Serengeti Hotel">Serengeti Hotel</option>
	<option value="Sea Cliff Hotel">Sea Cliff Hotel</option>
	<option value="Belmountain Hotel">Belmountain Hotel</option>
	<option value="Hyatt Regency Hotel<">Hyatt Regency Hotel</option>
	<option value="Sheraton Hotel">Sheraton Hotel</option>
	<option value="New African Hotel">New African Hotel</option>
	<option value="Orion Hotel">Orion Hotel</option>
	<option value="Golden Tulip Hotel">Golden Tulip Hotel</option>
	<option value="Tiffa's Hotel">Tiffa's Hotel</option>
	<option value="Amverton Bay view Hotel">Amverton Bay view Hotel</option>
	<option value="Kilimanjaro Hotel">Kilimanjaro Hotel</option>
	<option value="Ramada Hotel">Ramada Hotel</option>
	<option value="Lamada Hotel">Lamada Hotel</option>
	<option value="Landmark Hotel">Landmark Hotel</option>
	<option value="Lantana Hotel">Lantana Hotel</option>
	<option value="Jangwani Sea Breaze Hotel">Jangwani Sea Breaze Hotel</option>
	<option value="Sheraton Hotel">Sheraton Hotel</option>
	<option value="LeGrande Hotel">LeGrande Hotel</option>
	<option value="Rovvenpec Hotel">Rovvenpec Hotel</option>
</select>
</div>
<label><h4> Number of Customers</h4></label>
<input type="Number" name="numCustomer" placeholder="Number of Customer" class="form-control">
	<label ><h4> Entry Date:</h4></label>
<input type="Date" name="entryDate" class="form-control">
<label><h4>Exit Date:</h4></label>
<input type="Date" name="exitDate"  class="form-control">
<label><h4>Phone Number:</h4></label>
<input type="tel" name="phoneNo" class="form-control" placeholder="123-4567-8901" >
<button value="submit" class="btn btn-outline-success" name="submit"><h3>Finish your booking</h3> </button>
</form>
</div>
<!-- <div class="form-group">
<form action="uploads.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file" class="form" placeholder="We need you to Upload your image">
	<button name="submit" type="submit" style="cursor: progress;" class="btn-outline-success"><h4>Upload Your image</h4></button>
-- <input type="file" name="" accept="image/*" style="display: none;" placeholder="Picture"> --
</form>
</div> -->
	<!-- Quotes -->
	<section class="fh5co-quotes">
		<div class="site-container" id="nationalpark">
			<div class="about-me-slider">
				<div>
					<h2 class="universal-h2 universal-h2-bckg" ><a href="https://www.serengeti.com/">Serengeti National Park</a></h2>
					<img src="/Allinoneproject/Assert/serenget.jpg" alt="quotes svg">
					<!-- <h4>David Dixon</h4>
					<p>Reader</p> -->
				</div>
				<div>
					<h2 class="universal-h2 universal-h2-bckg"><a href="https://www.tanzaniatourism.go.tz/en/destination/kitulo-national-park">Kitulo National Park</a></h2>
					<img src="/Allinoneproject/Assert/kitulo.jpg" alt="quotes svg">
					<!-- <h4>David Dixon</h4>
					<p>Reader</p> -->
				</div>
					<div>
					<h2 class="universal-h2 universal-h2-bckg"><a href="https://www.ngorongorocrater.org/">Ngorongoro Conservation Area</a></h2>
					<img src="/Allinoneproject/Assert/ngoro.jpg" alt="quotes svg">
					<!-- <h4>David Dixon</h4>
					<p>Reader</p> -->
				</div>
	<div>
					<h2 class="universal-h2 universal-h2-bckg"><a href="http://www.gombenationalpark.com/">Gombe National Park</a></h2>
					<img src="/Allinoneproject/Assert/gombe.jpg" alt="quotes svg">
					<!-- <h4>David Dixon</h4>
					<p>Reader</p> -->
				</div>
	<div>
					<h2 class="universal-h2 universal-h2-bckg"><a href="https://www.kilimanjaroparktanzania.com/">Mountain Kilimanjaro</a></h2>
					<img src="/Allinoneproject/Assert/kilimanjaro.jpg" alt="quotes svg">
					<!-- <h4>David Dixon</h4>
					<p>Reader</p>
 -->				</div>
	<div>
					<h2 class="universal-h2 universal-h2-bckg"><a href="http://www.mkomazi.info/">Mkomazi National Park</a></h2>
					<img src="/Allinoneproject/Assert/mkomazi.jpg" alt="quotes svg">
				</div>
	<div>
					<h2 class="universal-h2 universal-h2-bckg"><a href="https://www.tanzaniatourism.go.tz/en/destination/saadani-national-park">Saadani National Park</a></h2>
				
					<img src="/Allinoneproject/Assert/saadani.jpg" alt="quotes svg">
									</div>

			</div>
		</div>
	</section>
  <section class="fh5co-social">
    <div class="site-container">
      <div class="social">
        <h5>Follow US!!</h5>
        <div class="social-icons">
          <a href="#" target="_blank"><img src="/Allinoneproject/Assert/social-twitter.png" alt="social icon"></a>
          <a href="#" target="_blank"><img src="/Allinoneproject/Assert/social-pinterest.png" alt="social icon"></a>
          <a href="#" target="_blank"><img src="/Allinoneproject/Assert/social-youtube.png" alt="social icon"></a>
          <a href="#" target="_blank"><img src="/Allinoneproject/Assert/social-twitter.png" alt="social icon"></a>
        </div>
        <h5>Share it! to others</h5>
      </div>
    </div>
  </section>

  <!---scripts--->
  	<script src="/Allinoneproject/Assert/jquery.min.js"></script>
	<script src="/Allinoneproject/Assert/slick.min.js"></script>
	<script src="/Allinoneproject/Assert/main.js"></script>
	<script src="/Allinoneproject/bootstrap/bootstrap/js/bootstrap.js"></script>
 </body>
 </html>