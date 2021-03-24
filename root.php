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
			<img src="img/5.jpeg" class="carouselImage">
			  <div class="carousel-caption">
				<p style="font-size:30px;"><b>LIVING ROOT BRIDGES OF MEGHALAYA</b><br>
					<b>Rs. 7499</b>
				</p>
				
				<?php
					$q9="select * from packages where id=1";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<a href="book.php?id=1" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
			  </div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="card-header bg-info mt-2"><b>TOUR PROGRAM</b></div>
			<div class="container-fluid mt-2">
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 1</h6>
					<span class="mt-1 text-primary"><b>DOUBLE DECKER ROOT BRIDGE TREK, CAMPING IN NONGRIAT.</b></span><br>
					<span class="text-dark" style="font-weight:500;">We will receive you from the pickup point and then leave for Tryna Village which is the starting point to the Nongriat Village Trek(Double Decker Living Root Bridge Trek). The trek is about 2hrs. On our way to Nongriat, we will also visit the first village – Nongthymmai, home to the longest living root bridge. We will have our lunch in the Nongriat Village. After lunch, we will visit the famous double Decker root bridge. We will camp in the village for the night.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 2</h6>
					<span class="mt-1 text-primary"><b>TREK TO RAINBOW FALLS, CAMPING NEAR RAINBOW FALLS.</b></span><br>
					<span class="text-dark" style="font-weight:500;">Next morning after breakfast, we will trek to the Rainbow falls for an ultimate experience and mesmerizing beauty of the Natural ponds. We will spend the evening with bonfire amidst the jungles of the Khasi hills. We camp near the Rainbow Falls.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 3</h6>
					<span class="mt-1 text-primary"><b>TREK TO NOHKALIKAI FALLS, DRIVE TO MAWLYNNONG.</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast, we will trek to Nohkalikai falls and then drive towards Cherrapunjee. The trek is a bit longer and takes about 5 hours to reach the top. After lunch, we will start our journey to Asia’s cleanest village – Mawlynnong. Stay overnight in the pre-booked homestay.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 4</h6>
					<span class="mt-1 text-primary"><b>VISIT REWAI VILLAGE, BACK TO GUWAHATI.</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast, we will head towards Rewai village – home to another living root bridge. The root bridge is a popular tourist attraction. After exploring the village, we will leave back for Guwahati. Drop at preferred location.</span>
						
				</div>	
			</div>
			<div class="card-header bg-info mt-2"><b>DESTINATIONS & INCLUSIVES</b></div>	
			<div class="row container-fluid justify-content-center" style="width:100%;">
				<ul class="py-3" style="list-style:none;background:#f3f3f3;width:49%;margin-left:1%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>Nongthymmai Village</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Nongriat Vilage</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Rainbow Falls</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Nohkalikai Falls</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Mawlynnong Village</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Rewai Village</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Cherrapunjee</b></li>
				</ul>
				<ul class="py-3" style="list-style:none;background:#f1f2f3;width:50%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>Camping and Homestay</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All the mentioned activities</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>GST, all toll and driver fee</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All transfers and sightseeing by AC vehicles</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Meal includes – 3 (Breakfast, Lunch, Dinner)</b>.</li>
				</ul>
			</div>
			
		</div>	
		<center>
			<?php
					$q9="select * from packages where id=1";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<a href="book.php?id=1" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
		</center>
		<div id="footer" style="margin-top:10vh;">
			<center><p style="padding-top:10px;"><b>&copy TAMS</b> Copyright 2019.All Rights Reserved.</p></center>
		</div>

	</body>
	
</html>