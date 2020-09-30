<?php

include 'admindb.php';


if (isset($_POST['submit'])) {

	$bookingId = $_POST['bookingId'];


	$sql= "UPDATE booking SET status = 1 WHERE id= '$bookingId'";
    
    $result = mysqli_query($conn, $sql);

    if($result == 1){
    	$_SESSION['updated_success']="Success! Your booking Approved successfully";
  	  	 	header("Location: AdminPage.php");
    }
 	 
    }
	 	 


?>