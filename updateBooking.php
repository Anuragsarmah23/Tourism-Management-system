<?php
	session_start();
	$con=mysqli_connect("localhost","root","","tams");
	if(!$con)
		die("error");
	$id=$_POST["id"];
	$status=$_POST["status"];
	$q="update bookings set status='$status' where id='$id'";
	$q_run=mysqli_query($con,$q);
	if($q_run){
		echo '<script>alert("Successfully updated");</script>';
		echo '<script>location.href="bookings.php";</script>';
	}else{
		echo '<script>alert("Error While Updating");</script>';
		echo '<script>location.href="bookings.php";</script>';
	}
		
	