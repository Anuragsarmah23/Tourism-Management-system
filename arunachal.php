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
			<img src="img/13.jpg" class="carouselImage">
			  <div class="carousel-caption">
				<p style="font-size:30px;"><b>EASTERN ARUNACHAL</b><br>
					<b>Rs. 13999</b>
				</p>
				<?php
					$q9="select * from packages where id=7";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<a href="book.php?id=7" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
			  </div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="card-header bg-info mt-2"><b>TOUR PROGRAM</b></div>
			<div class="container-fluid mt-2">
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 1</h6>
					<span class="mt-1 text-primary"><b>REACH DIBRUGARH, TEA TOUR</b></span><br>
					<span class="text-dark" style="font-weight:500;">Our driver cum guide will receive you from the Dibrugarh Airport/Railway Station. From the Airport/ Railway Station you will transferred to the pre-booked hotel in Dibrugarh. After completing the check-in process, we will take you to explore the surroundings of the “tea city of India”. Stay overnight.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 2</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO PASIGHAT, FERRY RIDE IN BRAHMAPUTRA</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we will leave for Pasighat from Dibrugarh (154 km). The journey will be enthralling as it will also include a ferry ride in the mighty ‘Brahmaputra’ to reach Pasighat. The day is free for leisure activities. You can explore the surroundings on foot. Stay overnight.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 3</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO KEKAR MONYING, OUTDOOR ACTIVITIES</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we will be heading to explore the scenic beauty of Arunachal’s oldest town. The places covered will be Daying Ering Wildlife Sanctuary, Kekar Monying (a mountain cliff of historical importance). You may also opt for outdoor activities (rafting in River Siang). Stay overnight.</span>
						
				</div>	
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 4</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO MECHUKA</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we will leave for Mechuka from Pasighat (290 km). The striking picturesque throughout the journey will make you fall for it. The distance covers many astonishing places in between where you can spend some time. On arrival, check into your hotel. Stay overnight.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 5</h6>
					<span class="mt-1 text-primary"><b>MECHUKA SIGHTSEEING</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we will leave to explore the forgotten paradise on earth. We will move to discover the historical and religious significance of the town. We will trek to the 400-year-old Buddhist Monastery, located at the hill top. The valley is 29 km from Indo-Tibet border, a nearby visit won’t disappoint. Adventure activities available on demand include trekking, hiking, rafting and angling. Stay overnight.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 6</h6>
					<span class="mt-1 text-primary"><b>RETURN TO PASIGHAT</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we drive back to Pasighat (290 km). You may take a halt to enjoy the scenic beauty of the journey. On arrival, check into the hotel. The day is free for leisure activities. You can explore the surroundings on foot. Stay overnight</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 7</h6>
					<span class="mt-1 text-primary"><b>RETURN TO DIBRUGARH, DIBRUGARH SIGHTSEEING</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we drive towards our final destination, Dibrugarh (154 km). Once again you will be able to enjoy your ferry ride in the mighty ‘Brahmaputra’. On arrival, check into hotel. You can explore the “tea city of India” in the free time. Stay overnight.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 8</h6>
					<span class="mt-1 text-primary"><b>ONWARD JOURNEY FROM DIBRUGARH</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we will drop you at the Dibrugarh Airport/ Railway Station for your onward journey.</span>
						
				</div>
			</div>
			<div class="card-header bg-info mt-2"><b>DESTINATIONS & INCLUSIVES</b></div>	
			<div class="row container-fluid justify-content-center" style="width:100%;">
				<ul class="py-3" style="list-style:none;background:#f3f3f3;width:49%;margin-left:1%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>Dibrugarh</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Pasighat</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Ering Wildlife Sanctuary</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Kekar Monying</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Mechuka</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Buddhist Monastery</b></li>
				</ul>
				<ul class="py-3" style="list-style:none;background:#f1f2f3;width:50%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>Accommodation in a two bedded room with breakfast</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All hotel taxes and service taxes</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Driver Allowance, fuel and parking</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All transfers and sightseeing by AC vehicles</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Entry fee in all mentioned locations (Excludes Camera fee)</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Ferry Ride</b>.</li>
				</ul>
			</div>
			
		</div>	
		<center>
			<?php
					$q9="select * from packages where id=7";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<a href="book.php?id=7" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
		</center>
		<div id="footer" style="margin-top:10vh;">
			<center><p style="padding-top:10px;"><b>&copy TAMS</b> Copyright 2019.All Rights Reserved.</p></center>
		</div>

	</body>
	
</html>