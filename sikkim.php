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
			<img src="img/15.jpg" class="carouselImage">
			  <div class="carousel-caption">
				<p style="font-size:30px;"><b>INCREDIBLE SIKKIM</b><br>
					<b>Rs. 13999</b>
				</p>
				
				<?php
					$q9="select * from packages where id=9";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<a href="book.php?id=9" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
			  </div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="card-header bg-info mt-2"><b>TOUR PROGRAM</b></div>
			<div class="container-fluid mt-2">
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 1</h6>
					<span class="mt-1 text-primary"><b>REACH SILIGURI, DRIVE TO GANGTOK</b></span><br>
					<span class="text-dark" style="font-weight:500;">Our driver will receive you from the New Jalpaiguri railway station/Bagdogra Airport. From the Airport/ Railway Station, we will leave for Gangtok, Sikkim’s capital. The 4-5 hour journey is likely to be a treat, with the views of the mountains, Teesta River, and small towns on the way. On arrival, check into the hotel. The day is free for exploring the city. Stay overnight.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 2</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO LACHEN, STAY IN LACHEN</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we will leave for Lachen from Gangtok (110 km). Enjoy the scenic beauty on your way to Lachen. On reaching, check into your hotel. You can explore the small town, and take a dip in the culture of these hills. Stay overnight.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 3</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO THANGU AND GURUDONGMAR LAKE</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we drive to Thangu (13,500 ft, 31 km from Lachen). We will then drive towards Gurudongmar Lake (17,000 ft), one of the highest situated lakes in North Sikkim. On our way to Gurudongmar, we will pass through Chopta Valley (13,200 ft), rich in alpine vegetation. After Gurudongmar Lake, we head to Lachung for the night. Stay overnight.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 4</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO YUMTHANG VALLEY, STAY IN THE VALLEY</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we head towards Yumthang valley (26 km from Lachung), situated at an elevation of 11800 ft. On our way back to Gangtok from Yumthang valley, we may visit the famous hot spring (known for curative properties) and Seven Sisters Fall for a while. On reaching, check-in to the hotel. Stay overnight.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 5</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO NATHULA PASS AND BABA MANDIR</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we drive up for a memorable excursion tour to Himalayas in the eastern part of Sikkim. We will pay a visit to the Nathula Pass, with an additional permit from Gangtok Tourism. We then move towards Tsomgo Lake (39 km from Gangtok), one of the highest altitude Himalayan Lake. After this, we drive to Baba Mandir (15 km from Tsomgo Lake). Stay overnight.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 6</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO NAMCHI AND TEMI TEA GARDEN</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we proceed to Namchi (80 km). On our way we will cross Temi Tea Garden (Sikkim’s sole Tea estate). We then head towards Char Dham, replicas of the four most revered Dhams. We will then proceed towards Ravangla, we may also visit Tendong Hills (which has a huge Buddhist statue). Check-in to the pre-booked hotel. Stay overnight.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 7</h6>
					<span class="mt-1 text-primary"><b>GANGTOK SIGHTSEEING, RETURN TO SILIGURI</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we will drop you at the New Jalpaiguri railway station/Bagdogra Airport for your onward journey.</span>
						
				</div>
				
			</div>
			<div class="card-header bg-info mt-2"><b>DESTINATIONS & INCLUSIVES</b></div>	
			<div class="row container-fluid justify-content-center" style="width:100%;">
				<ul class="py-3" style="list-style:none;background:#f3f3f3;width:49%;margin-left:1%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>Baba Mandir,</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Char Dhams</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Tendong Hills</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Tsomgo Lake</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Yumthang valley</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Temi Tea Estate</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Ravangla</b></li>
				</ul>
				<ul class="py-3" style="list-style:none;background:#f1f2f3;width:50%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>River Beach camping with food while Rafting</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All hotel taxes and service taxes</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All toll and driver fee</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All transfers and sightseeing by comfortable vehicles</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Accommodation in two bedded room with breakfast</b>.</li>
				</ul>
			</div>
			
		</div>	
		<center>
			<?php
					$q9="select * from packages where id=9";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<a href="book.php?id=9" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
		</center>
		<div id="footer" style="margin-top:10vh;">
			<center><p style="padding-top:10px;"><b>&copy TAMS</b> Copyright 2019.All Rights Reserved.</p></center>
		</div>

	</body>
	
</html>