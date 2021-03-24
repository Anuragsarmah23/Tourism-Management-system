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
			<img src="img/c1.jpg" class="carouselImage">
			  <div class="carousel-caption">
				<p style="font-size:30px;"><b>MEGHALAYA ADVENTURE</b><br>
					<b>Rs. 17999</b>
				</p>
				
				<?php
					$q9="select * from packages where id=3";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<a href="book.php?id=3" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
			  </div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="card-header bg-info mt-2"><b>TOUR PROGRAM</b></div>
			<div class="container-fluid mt-2">
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 1</h6>
					<span class="mt-1 text-primary"><b>RIVER CANYONING AND KAYAKING IN MAWLYNGBNA, CAMPING IN MAWLYNGBNA</b></span><br>
					<span class="text-dark" style="font-weight:500;">We will receive you from the Guwahati Airport at 12 noon and will immediately leave for Mawlyngbna. The journey will take 4hrs and it passes though Mawsynram, which is the wettest place on earth. In Mawlyngbna you will experience River Canyoning and Kayaking in the Umkhakoi reservoir. Activities will be done in the next morning. We will Camp in the Traveller’s Nest, Mawlyngbna.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 2</h6>
					<span class="mt-1 text-primary"><b>CHERRAPUNJEE SIGHTSEEING, CAVING IN MAUMLUH, CAMPING IN CHERRAPUNJEE</b></span><br>
					<span class="text-dark" style="font-weight:500;">Next morning, after the activities we will go to Cherrapunjee. We spend the day in Cherrapunjee experiencing various caves and waterfalls in and around the town. The prime activity for the day will be caving in the Maumluh cave. We will camp in Cherrapunjee in our camping location which is located near the Daintlem Falls.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 3</h6>
					<span class="mt-1 text-primary"><b>DOUBLE DECKER ROOT BRIDGE TREK, CAMPING IN NONGRIAT</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we will visit a few more places in Cherrapunjee and then leave for Tryna Village which is the starting point to the Nongriat Village Trek(Double Decker Root Bridge Trek). The trek is about 2hrs. We will have our lunch in the Nongriat Village. After lunch we will visit the famous double Decker root bridge. We will camp in the village for the night.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 4</h6>
					<span class="mt-1 text-primary"><b>SIGHTSEEING IN DAWKI AND HOMESTAY IN MAWLYNNONG</b></span><br>
					<span class="text-dark" style="font-weight:500;">After Breakfast, we will trek back to Tryna Village from where we will leave for Dawki, which is bordering town in the Indo-Bangla Border. In Dawki we will have a boat ride in Umngot River. The river is famous for its crystal clear waters. After lunch we will go to Mawlynnong village, which is considered as one of the cleanest village in the world. Our stay will be in a homestay in the village.</span>
						
				</div>	
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 5</h6>
					<span class="mt-1 text-primary"><b>SHILLONG SIGHTSEEING</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we drive back to Guwahati. On our way back to Guwahati, we stop in Shillong for some sightseeing in and around the city.</span>
						
				</div>	
			</div>
			<div class="card-header bg-info mt-2"><b>ACTIVITIES & INCLUSIVES</b></div>	
			<div class="row container-fluid justify-content-center" style="width:100%;">
				<ul class="py-3" style="list-style:none;background:#f3f3f3;width:49%;margin-left:1%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>Double Decker Living Root Bridge trek</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>River Canoeing in Mawlyngbna</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Kayaking in Umkhakoi Reservoir</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Camping in Mawlyngbna, Cherrapunjee, Nongriat.</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Caving in Maumluh</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Bonfire in Mawlyngbna, Cherrapunjee</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Boating in Dawki</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Homestay in Mawlynnong</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Sightseeing in Shillong and Cherrapunjee</b></li>
				</ul>
				<ul class="py-3" style="list-style:none;background:#f1f2f3;width:50%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>All the mentioned activities</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Package is inclusive of all the taxes</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Driver Allowance, fuel and parking</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All transfers and sightseeing by AC vehicles</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Entry fee in all mentioned locations (Excludes Camera fee)</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Breakfast and Dinner (Dinner not included on Day 4)</b></li>
				</ul>
			</div>
			
		</div>	
		<center>
			<?php
					$q9="select * from packages where id=3";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<a href="book.php?id=3" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
		</center>
		<div id="footer" style="margin-top:10vh;">
			<center><p style="padding-top:10px;"><b>&copy TAMS</b> Copyright 2019.All Rights Reserved.</p></center>
		</div>

	</body>
	
</html>