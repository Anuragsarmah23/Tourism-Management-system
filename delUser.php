<?php
	session_start();
	$con=mysqli_connect('localhost','root','','tams');
	if(!$con)
 		die("CONNECTION NOT FOUND".mysqli_error());
	$id=$_GET['id'];
	$q1="delete from bookings where userID='$id'";
	$q1_run=mysqli_query($con,$q1);
	$q="delete from user where id='$id'";
	$q_run=mysqli_query($con,$q);
	if($q1_run && $q_run)
		header("location:users.php");
	else{
		echo mysqli_error($con);
		echo '<script>alert("Something went wrong... Please try again...")</script>';
	}