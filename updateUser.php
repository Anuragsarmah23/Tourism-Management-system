<?php
	session_start();
	$con=mysqli_connect("localhost","root","","tams");
	if(!$con)
		die("error");
	$id=$_POST["id"];
	$fname=$_POST["fname"];
	$mname=$_POST["mname"];
	$lname=$_POST["lname"];
	$dob=$_POST["dob"];
	$address=$_POST["address"];
	$contact=$_POST["contact"];
	$email=$_POST["email"];
	$q="update user set fname='$fname',mname='$mname',lname='$lname',dob='$dob',address='$address',contact='$contact',email='$email' where id='$id'";
	$q_run=mysqli_query($con,$q);
	if($q_run){
		echo'<script>alert("updated succesfully")</script>';
		echo'<script>location.href="users.php"</script>';
	}else
		echo'<script>alert("Something went wrong... Please try again")</script>';