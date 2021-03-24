<?php
	session_start();
	$con=mysqli_connect("localhost","root","","tams");
	if(!$con)
		die("error");
	$fname=$_POST["fname"];
	$id=$fname.rand(1000,9999);
	$mname=$_POST["mname"];
	$lname=$_POST["lname"];
	$lname=$_POST["lname"];
	$dob=$_POST["dob"];
	$address=$_POST["address"];
	$contact=$_POST["contact"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$cnfpass=$_POST["cnfpass"];
	if($password != $cnfpass){
		echo '<script>alert("Passwords do not matched")</script>';
		echo '<script>location.href="register.php"</script>';
		die();
	}
	$q9="select * from user where email='$email'";
	$q9_run=mysqli_query($con,$q9);
	$rows9=mysqli_num_rows($q9_run);
	if($rows9 > 0){
		echo '<script>alert("E-Mail already exist.. Try another")</script>';
		echo '<script>location.href="register.php"</script>';
		die();
		
	}
	$q91="select * from user where contact='$contact'";
	$q91_run=mysqli_query($con,$q91);
	$rows91=mysqli_num_rows($q91_run);
	if($rows91 > 0){
		echo '<script>alert("Contact number already exist.. Try another")</script>';
		echo '<script>location.href="register.php"</script>';
		die();
		
	}
	$q="insert into user values('$id','$fname','$mname','$lname','$dob','$address','$contact','$email','$password')";
	$q_run=mysqli_query($con,$q);
	if($q_run){
		echo '<script>alert("Successfully Registered with ID='.$id.'")</script>';
		$_SESSION["uid"]=$id;
		echo '<script>location.href="index.php"</script>';
	}	
	else
		echo '<script>alert("Error while registering.. Please Try Again")</script>';
?>