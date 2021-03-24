<?php
	session_start();
	$con=mysqli_connect('localhost','root','','tams');
	if(!$con)
 		die("CONNECTION NOT FOUND".mysqli_error());
	$id=$_GET['id'];
	$q1="delete from bookings where id='$id'";
	$q1_run=mysqli_query($con,$q1);
	if($q1_run){
		echo '<script>alert("Successfully Deleted..")</script>';
		echo '<script>location.href="bookings.php"</script>';
	}
	else{
		echo '<script>alert("Something went wrong while deleting...")</script>';
		echo '<script>location.href="bookings.php"</script>';
	}