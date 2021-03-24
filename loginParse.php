<?php
	session_start();
	$con=mysqli_connect("localhost","root","","tams");
	if(!$con)
		die("error");
	$id=$_POST["id"];
	$password=$_POST["password"];
	$q="select * from user where id='$id' and password='$password'";
	$q_run=mysqli_query($con,$q);
	$q1="select * from admin where id='$id' and password='$password'";
	$q1_run=mysqli_query($con,$q1);
	if(mysqli_num_rows($q1_run)>0){
		echo '<script>alert("Successfully Logged In As Admin")</script>';
		$_SESSION['aid']=$id;
		echo '<script>location.href="dash.php"</script>';
	}	
	else if(mysqli_num_rows($q_run)>0){
		echo '<script>alert("Successfully Logged In")</script>';
		$_SESSION['uid']=$id;
		echo '<script>location.href="index.php"</script>';
	}	
	else{
		echo '<script>alert("Invalid Credentials...")</script>';
		echo '<script>location.href="login.php"</script>';
	}