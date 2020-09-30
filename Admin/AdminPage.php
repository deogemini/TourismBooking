 <?php
     include_once 'admindb.php';

     ?>
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
  <link rel="stylesheet" type="text/css" href="/Allinoneproject/bootstrap/bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="bootstrap/bootstrap/js/bootstrap.js"></script>
  	<link rel="stylesheet" href="/Allinoneproject/Assert/style.css">
	<link rel="stylesheet" href="/Allinoneproject/Assert/slick.css">
  <style>
  	table{
  		border-collapse: collapse;
  		width: 100%;
  		color: #fffff;
  		font-family: monospace;
  		font-size: 25px;
  		text-align: left;

  	}
  	th{
  		background-color: #588c7e;
  		color: white;
  	}
  	tr:nth-child(even){background-color: #ffff}
  </style>
  </head>

 <body style="background-color: orange" >

  <?php
  session_start();
  if(isset($_SESSION['updated_success'])){
    print("<p style='background-color: green;color:white;padding:10px 20px;'>".$_SESSION['updated_success']."</p>");
  }
  session_destroy();
  
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
        <a class="nav-link" href="#request">See Requests</a>
      </li>
     <!--  <li class="nav-item">
        <a class="nav-link" href="#nationalpark">National Parks </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About us</a>
      </li> -->
       <li class="nav-item">
        <a class="nav-link" href="/Allinoneproject">LOGOUT</a>
      </li>
    </ul>
  </div>
</nav> 
<br>
</div>

<div class="about-section" id="about" style="background-color: light-orange">
	<div class="container-fluid">
		<div class="col-sm -d-flex-column justify-content-centeralign-items-center">
  <h1>About You As Admin </h1>
  <h3>Basic functinality of admin is to contact with customers,make follow up on the hotel booking to a particular hotel mentioned by a customer,</h3>
  <h3>be Able to see the pictures of different national parks which are found in Tanzania With they are names will help to be more exited to visit  different places with the beauty of Tanzania</h3>
  <strong><br></strong>

</div>
</div>
</div>
<div class="container-fluid" id="request">

	<table class="table table-bordered">
		
	<tr>
		<h3 style="text-decoration: all;"> These Are The Requests</h3>
		<th>Hotel</th>
		<br>
		<th>Entry Date</th>
		<br>
		<th>Exit Date</th>
		<br>
		<th>Phone No</th>
		<br>
    <th>Status</th>
	</tr>


	<?php
	$sql = "SELECT * FROM booking;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);


	if($resultCheck > 0){
    $test =1;
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>
      <td>" .$row['hotel']."<br>".
			"</td>
      <td>". $row["entryDate"]. "</td>
      <td>".
			$row["exitDate"].
			"</td>
      <td>".$row["phoneNo"]."</td>
      <td> <form method='POST' action='status.php'>
             <input type='hidden' name= 'bookingId' value= '".$row['id']."'>
            <input type='submit' name='submit' value='".checkStatus($row['status'])."'>
        </form>
        </td>
</tr>";
		}
	}
	?>

</table>
</div>
</div>

  <section class="fh5co-social">
    <div class="site-container">
      <div class="social">
        <h5>Follow US!!</h5>
        <div class="social-icons">
          <a href="#" target="_blank"><img src="/Allinoneproject/Assert/social-twitter.png" alt="social icon"></a>
          <a href="#" target="_blank"><img src="/Allinoneproject/Assert/social-pinterest.png" alt="social icon"></a>
          <!--<a href="#" target="_blank"><img src="All in oneproject/Assert/social-youtube.png" alt="social icon"></a>-->
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
 </body>
 </html>


 <?php 
  
  function checkStatus($s){
    if($s==1){
      return 'Approved';
    }
    return 'Aprove now';
  }

  ?>