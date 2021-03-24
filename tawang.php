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
			<img src="img/14.jpg" class="carouselImage">
			  <div class="carousel-caption">
				<p style="font-size:30px;"><b>TAWANG</b><br>
					<b>Rs. 13999</b>
				</p>
				
				<?php
					$q9="select * from packages where id=8";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<a href="book.php?id=8" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
			  </div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="card-header bg-info mt-2"><b>TOUR PROGRAM</b></div>
			<div class="container-fluid mt-2">
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 1</h6>
					<span class="mt-1 text-primary"><b>REACH GUWAHATI, DRIVE TO NAMERI</b></span><br>
					<span class="text-dark" style="font-weight:500;">Our driver will receive you from the Guwahati Airport/ Railway Station. He will then drive you to for Nameri National Park which is 3 hours from Guwahati. Nameri is famous for its elephants and other animals including tigers, leopards, gaurs, wild pigs, sambars, etc and also for being a bird watchers paradise. You stay in Nameri National Park will be in Nameri Eco Lodge.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 2</h6>
					<span class="mt-1 text-primary"><b>RAFTING IN NAMERI, DRIVE TO DIRANG</b></span><br>
					<span class="text-dark" style="font-weight:500;">In the morning we go for rafting in the Jai Bharali River. The rafting route is 13 km long and takes about 3 hours. A great, tiring and enjoyable experience. After lunch, we leave for Dirang, which is 140 kilometres away. You will check in to your hotel in Dirang.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 3</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO TAWANG, SIGHTSEEING IN DIRANG AND SELA PASS</b></span><br>
					<span class="text-dark" style="font-weight:500;">We drive to Tawang, which is 160 kilometres from Dirang. On your way to Tawang, you visit the famous Sela Pass, Jaswant Garh and Nuranang Waterfall. You will check in to your hotel in Tawang.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 4</h6>
					<span class="mt-1 text-primary"><b>SIGHTSEEING IN TAWANG</b></span><br>
					<span class="text-dark" style="font-weight:500;">We spend the entire day visiting the Tawang Monestery and various other places in and around Tawang. Your stay will be in the same hotel in Tawang.</span>
						
				</div>	
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 5</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO MADHURI LAKE AND BUMLA PASS</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast, we leave for Madhuri Lake. The Pictureque Lake is locally known as the Sangetsar Lake. From there we visit the Indo-China border at Bumla Pass. The Pass is locted at an altitute of 15,200 feet. We drive back to our hotel in Tawang.</span>
						
				</div>	
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 6</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO BOMDILLA, SIGHTSEEING</b></span><br>
					<span class="text-dark" style="font-weight:500;">Today we drive to Bomdilla. On our way back to Bomdila we visit the hot water spring in Dirang. We spend the evening visiting the various tourist attractions in Bomdilla.</span>
						
				</div>	
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 7</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO GUWAHATI</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast, we drive you back to Guwahati and drop you at the Airport/Railway Station.</span>
						
				</div>	
			</div>
			<div class="card-header bg-info mt-2"><b>DESTINATIONS & INCLUSIVES</b></div>	
			<div class="row container-fluid justify-content-center" style="width:100%;">
				<ul class="py-3" style="list-style:none;background:#f3f3f3;width:49%;margin-left:1%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>Tawang Monastery</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Ani Gompa</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Buddha Statue</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Birth Place Of 6th Dalai Lama</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Tawang Market</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Bomdila Monastery</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Hot Water Spring</b></li>
				</ul>
				<ul class="py-3" style="list-style:none;background:#f1f2f3;width:50%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>Accommodation in a two bedded room with breakfast</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All hotel taxes and service taxes</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Driver Allowance, fuel and parking</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All transfers and sightseeing by AC vehicles</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Entry fee in all mentioned locations (Excludes Camera fee)</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All the mentioned activities</b>.</li>
				</ul>
			</div>
			
		</div>	
		<center>
			<?php
					$q9="select * from packages where id=8";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<a href="book.php?id=8" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
		</center>
		<div id="footer" style="margin-top:10vh;">
			<center><p style="padding-top:10px;"><b>&copy TAMS</b> Copyright 2019.All Rights Reserved.</p></center>
		</div>

	</body>
	
</html>