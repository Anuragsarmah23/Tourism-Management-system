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
			<img src="img/16.jpg" class="carouselImage">
			  <div class="carousel-caption">
				<p style="font-size:30px;"><b>MIZORAM</b><br>
					<b>Rs. 13999</b>
				</p>
				
				<?php
					$q9="select * from packages where id=10";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<a href="book.php?id=10" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
			  </div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="card-header bg-info mt-2"><b>TOUR PROGRAM</b></div>
			<div class="container-fluid mt-2">
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 1</h6>
					<span class="mt-1 text-primary"><b>REACH AIZAWL</b></span><br>
					<span class="text-dark" style="font-weight:500;">Our driver will receive you from the Aizawl Airport. From the Airport you will be transferred to your Home stay in Aizawl. You can explore the surrounding in the free time. Stay overnight.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 2</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO CHAMPHAI, STAY OVERNIGHT</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast, we will start our venture to the border town of India-Myanmar, Champhai (200 km). Upon reaching, check-in to the pre-booked Guest House. You can explore the surrounding in the free time. Stay overnight.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 3</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO RIH DIL, SIGHTSEEING</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we will leave for Myanmar to catch a glimpse of the stunning heart shaped lake, Rih Dil. After sightseeing in and around India-Myanmar border, we will drive back to Champhai town. We will arrange a Bike Taxi across the border for your trip. We will explore the town in the free time. Stay overnight in the same place.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 4</h6>
					<span class="mt-1 text-primary"><b>CHAMPHAI TO THENZAWL VIA ZIONA’S VILLAGE</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast, we will start our journey to Thenzawl. On our way to Thenzawl we will visit Ziona, the head of the largest family in the world. Our stay for the night will either be in Serchhip or Thenzawl.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 5</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO LUNGLEI, THENZAWL SIGHTSEEING</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we will set out for another adventurous road journey to Lunglei district. On our way, we will cover a few places in Thenzawl. The pristine beauty of the Vantawang fall will be a good buy in our journey. The drive takes us through some of the remotest places in the country. Thenzawl replicates Cherrapunjee in Meghalaya. Stay overnight in Lunglei.</span>
						
				</div>	
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 6</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO PHAWNGPUI NATIONAL PARK (BLUE MOUNTAIN)</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast, we will start our adventurous journey to the highest mountain peak in Mizoram, Phawngpui National Park (2157 m). Also known as Blue Mountain it is one of the Two National Parks in Mizoram.</span>
						
				</div>	
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 7</h6>
					<span class="mt-1 text-primary"><b>BACK TO AIZAWL</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast, we will either drive back to Aizawl or we will spend an extra day in the Blue Mountains. If you decide to leave today, we will spend the next day covering various places in and around Aizawl and a visit to Reiek.</span>
						
				</div>	
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 8</h6>
					<span class="mt-1 text-primary"><b>REIEK, AIZAWL SIGHTSEEING</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast we will leave for Reiek, which is 30 km from Aizawl. . Upon reaching, we will explore the hill and neighbouring villages. After exploration, we will drive back to Aizawl. We will also take you to a few other attractions in Aizawl. Stay overnight in the same Homestay.</span>
						
				</div>	
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 9</h6>
					<span class="mt-1 text-primary"><b>FLY</b></span><br>
					<span class="text-dark" style="font-weight:500;">After Breakfast, we will directly drive to Lenpui Airport in Aizawl.</span>
						
				</div>	
			</div>
			<div class="card-header bg-info mt-2"><b>DESTINATIONS & INCLUSIVES</b></div>	
			<div class="row container-fluid justify-content-center" style="width:100%;">
				<ul class="py-3" style="list-style:none;background:#f3f3f3;width:49%;margin-left:1%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>Aizawl</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Blue Mountains</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Champhai</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Rih Dil (Myanmar)</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Lunglei</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Ziona's Village</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Thenzawl</b></li>
				</ul>
				<ul class="py-3" style="list-style:none;background:#f1f2f3;width:50%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>Accommodation</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All the mentioned activities</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All hotel and service taxes</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All transfers and sightseeing by AC vehicles</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Entry fee in all mentioned locations (Excludes Camera fee)</b>.</li>
				</ul>
			</div>
			
		</div>	
		<center>
			<?php
					$q9="select * from packages where id=10";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<a href="book.php?id=10" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
		</center>
		<div id="footer" style="margin-top:10vh;">
			<center><p style="padding-top:10px;"><b>&copy TAMS</b> Copyright 2019.All Rights Reserved.</p></center>
		</div>

	</body>
	
</html>