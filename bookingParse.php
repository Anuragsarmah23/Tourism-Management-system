<?php
	session_start();
	$con=mysqli_connect("localhost","root","","tams");
	if(!$con)
		die("error");
	$packageID=$_POST["package"];
	$userID=$_SESSION["uid"];
	$date=date('Y-m-d');
	$sD=$_POST["start"];
	$eD=$_POST["end"];
	$persons=$_POST["persons"];
	$tA=$_POST["tA"];
	$q1="select * from bookings where userID='$userID'";
	$q1_run=mysqli_query($con,$q1);
	$row=mysqli_fetch_assoc($q1_run);
	$time=strtotime($row['startDate']);
	$time2=strtotime($row['endDate']);
	$time3=strtotime($sD);
	$time4=strtotime($eD);
	$day3=date('Y-m-d', $time2);
	if(mysqli_num_rows($q1_run)>0 && (($time3 == $time) || ($time3 <= $time2))){
		echo '<script>var day2 = "'.$day3.'"; alert("You have already booked a tour.. No more bookings allowed before " +day2)</script>';
		echo '<script>location.href="book.php?id='.$packageID.'"</script>';
		die();
	}
	$id=$userID.rand(10,99);
	
	$q="insert into bookings value('$id','$userID','$packageID','$date','$sD','$eD','$persons','$tA','pending')";
	$q_run=mysqli_query($con,$q);
	if($q_run){
		echo '<script>alert("Booking Confirmed with total amount Rs. '.$tA.'")</script>';
		echo '<script>location.href="myBookings.php"</script>';
	}else{
		echo '<script>alert("Error While Booking...Please Try Again")</script>';
		echo '<script>location.href="book.php?id='.$packageID.'"</script>';
	}