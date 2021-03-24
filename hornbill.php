<?php
	session_start();
	$uid='';
	if(isset($_SESSION['uid']))
		$uid=$_SESSION["uid"];
	$con=mysqli_connect("localhost","root","","tams");
	if(!$con)
		die("error");
	$q="select * from user where id='$uid'";
	$q_run=mysqli_query($con,$q);
	$row=mysqli_fetch_assoc($q_run);
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width,initial-scale=1.0" name="viewport">
		<title>TAMS</title>
		
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
		<link rel="icon" href="img/logo.png">
		<link href="css/bootstrap.min.css" rel="stylesheet" >
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="css/animate.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-2.1.0.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
	</head>
	<body>
	<nav class="navbar navbar-expand sticky-top">
			<div class="container">
				<ul class="navbar-nav mr-auto">
					<a class="navbar-brand" href="index.php">
						<img src="img/logo2.png" alt="Logo" height="100" width="100">
					</a>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
					  <a class="nav-link" href="index.php"><i class="fa fa-home text-primary"></i> HOME</a>
					</li>
					
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle active" href="#" data-toggle="dropdown">
						<i class="fa fa-train text-primary"></i> TOURS
					  </a>
					  <div class="dropdown-menu bg-info">
							<a class="dropdown-item mb-2" href="adventure.php" style="border-bottom:1px solid black;">
								<i class="fa fa-tasks text-dark"></i><span style="margin-left:7px;color:#111;"> ADVENTURE TOUR</span>
							</a>
							<a class="dropdown-item mb-2" href="luxury.php" style="border-bottom:1px solid black;">
								<i class="fa fa-rupee text-dark"></i><span style="margin-left:14px;color:#111;"> LUXURY TOUR</span>
							</a>
							<a class="dropdown-item mb-2" href="budget.php" style="border-bottom:1px solid black;">
								<i class="fa fa-address-book text-dark"></i><span style="margin-left:7px;color:#111;"> BUDGET TOUR</span>
							</a>
							<a class="dropdown-item mb-1" href="scheduled.php">
								<i class="fa fa-history text-dark"></i><span style="margin-left:7px;color:#111;"> SCHEDULED TOUR</span>
							</a>
					  </div>
					</li>
					<?php
						if(mysqli_num_rows($q_run)>0){
					?>	
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							<i class="fa fa-user"></i><span style="margin-left:7px;"><?php echo $row['id']; ?>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="logout.php"><i class="fa fa-arrow-left text-dark"></i><span style="margin-left:7px;color:#111;"> Log out</span></a>
						</div>
					</li>
					
						<?php } ?>
				</ul>
			</div>
		</nav>
		<div id="mainC" class="carousel slide" data-ride="carousel" style="height:100vh;">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			<img src="img/19.jpg" class="carouselImage">
			  <div class="carousel-caption">
				<p style="font-size:30px;"><b>HORNBILL FESTIVAL TOUR</b><br>
					<b>Rs. 19999</b>
				</p>
				
				<?php
					$q9="select * from packages where id=11";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<kbd class="bg-info p-2 mr-3" style="font-size:18px;">Date: 01 Dec - 10 Dec </kbd><kbd style="font-size:18px;" class="bg-warning p-2">Duration: 10 Days </kbd><br><br> <br>
				<?php
					if(date('m') > 10){
				?>
				
				<a href="book.php?id=11" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php }else echo '<span class="text-danger bg-white p-2">Booking will start from November</span>';} else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
			  </div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="card-header bg-info mt-2"><b>TOUR PROGRAM</b></div>
			<div class="container-fluid mt-2">
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 1</h6>
					<span class="mt-1 text-primary"><b>REACH DIMAPUR, DRIVE TO KOHIMA</b></span><br>
					<span class="text-dark" style="font-weight:500;">Our driver cum guide will receive you from the Dimapur Airport/Railway Station. From the Airport/ Railway Station you will leave for Kohima, the venue for the Hornbill Festival. Stay overnight at the pre-booked hotel/Camping site.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 2</h6>
					<span class="mt-1 text-primary"><b>HORNBILL CULTURAL EVENT, NIGHT CARNIVAL, MUSIC FESTIVAL</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we will leave for Kisama Heritage Village (place where Hornbill festival is held), which is 10 km from Kohima. After the cultural event, we will head towards the carnival in Kohima town. We will then head towards the Music festival venue where different bands from around the world will perform. Stay overnight in Camp/Hotel.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 3</h6>
					<span class="mt-1 text-primary"><b>HORNBILL CULTURAL EVENT, MUSIC FESTIVAL</b></span><br>
					<span class="text-dark" style="font-weight:500;">The day will comprise of the same activities as on the previous day. It will give you an opportunity to delve into the Cultural and Musical festival. The bands performing will not be the same as on previous day. Stay overnight in Camp/Hotel.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 4</h6>
					<span class="mt-1 text-primary"><b>KOHIMA SIGHTSEEING, DZUKOU VALLRY TREK</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we will leave for Kohima sightseeing and will explore the city. After sightseeing we will head towards the Dzukou Valley base camp and trek to the enchanting Dzukou valley. The valley is also famous as “valley of flowers” ogf the North East. Camping in Dzukou.</span>
						
				</div>	
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 5</h6>
					<span class="mt-1 text-primary"><b>VILLAGE TOUR</b></span><br>
					<span class="text-dark" style="font-weight:500;">Early morning we will trek back to base camp, leaving the magnificent trails behind. Upon reaching the base we will head for the famous Khonoma village tour, which is 20 km from Kohima. Return to Kohima, stay overnight in Hotel.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 6</h6>
					<span class="mt-1 text-primary"><b>RETURN TO DIMAPUR</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we will drop you at the Dimapur Airport/Railway Station for your onward journey.</span>
						
				</div>
			</div>
			<div class="card-header bg-info mt-2"><b>ACTIVITIES & INCLUSIVES</b></div>	
			<div class="row container-fluid justify-content-center" style="width:100%;">
				<ul class="py-3" style="list-style:none;background:#f3f3f3;width:49%;margin-left:1%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>Experence Naga cultural events and food in the main venue in Kisama Village.</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Hornbill Music Festival.</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Night Carnival.</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Trek to Dzukou Valley.</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Vist the World War 2 Museum and Cemetery.</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Khonoma village tour.</b></li>
				</ul>
				<ul class="py-3" style="list-style:none;background:#f1f2f3;width:50%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>Accommodation in a two bedded room with breakfast.</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Camping as mentioned in the Itinerary.</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All hotel taxes and service taxes.</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All transfers and sightseeing by AC vehicles</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Driver Allowance, fuel and parking</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Entry fee in all mentioned locations (Excludes Camera fee)</b>.</li>
					
				</ul>
			</div>
			
		</div>	
		<center>
			<?php
					$q9="select * from packages where id=11";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
						if(date('m') > 10){
				?>
				<a href="book.php?id=11" class="btn regbtn" style="width:200px;">BOOK NOW</a>
						<?php }else echo '<span class="bg-white text-danger p-2">Booking will start from november</span>';} else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
		</center>
		<div id="footer" style="margin-top:10vh;">
			<center><p style="padding-top:10px;"><b>&copy TAMS</b> Copyright 2019.All Rights Reserved.</p></center>
		</div>

	</body>
	
</html>