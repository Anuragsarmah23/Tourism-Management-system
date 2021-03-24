<?php
	session_start();
	$con=mysqli_connect("localhost","root","","tams");
	if(!$con)
		die("error");
	$id=$_GET["id"];
	$q="delete from bookings where id='$id'";
	$q_run=mysqli_query($con,$q);
	if($q_run){
		echo '<script>alert("Booking has been cancelled")</script>';
		echo '<script>location.href="myBookings.php"</script>';
	}
	else{
		echo '<script>alert("Error while cancelling...Please Try Again..")</script>';
		echo '<script>location.href="myBookings.php"</script>';
	}
		
	