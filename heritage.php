
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
			<img src="img/11.jpg" class="carouselImage">
			  <div class="carousel-caption">
				<p style="font-size:30px;"><b>HERITAGE ASSAM</b><br>
					<b>Rs. 36499</b>
				</p>
				
				<?php
					$q9="select * from packages where id=5";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<a href="book.php?id=5" class="btn regbtn" style="width:200px;">BOOK NOW</a>
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
					<span class="text-dark" style="font-weight:500;">Our driver will receive you from the Dibrugarh Airport/ Railway Station. Your stay will be in Dibrugarh, which is called the Tea city of India. In the evening we take you for a guidied tour to one of the Tea Estates in Dibrugarh. Your stay will be in Mancotta Chang Bungalow.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 2</h6>
					<span class="mt-1 text-primary"><b>DIBRU SAIKHOWA NATIONAL PARK, STAY IN A BOAT HOUSE</b></span><br>
					<span class="text-dark" style="font-weight:500;">Today, we leave for Dibru Saikhowa National Park, which is an hours drive from Dibrugarh. The National Park is famous for its moist semi evergreen forests, wild horses, and migratory birds. We take you for a boat ride and a trek within the national park. Your stay will be in a boat house in Guijan ghat.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 3</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO MAJULI VIA SIVASAGAR, SIVASAGAR SIGHTSEEING.</b></span><br>
					<span class="text-dark" style="font-weight:500;">After Breakfast, we leave for Majuli, which is the largest river island in the world. It is a lush green environment friendly, pristine and pollution free fresh water island in the river Brahmaputra. To reach Majuli, we have to cross the river Brahmaputra from Nimati Ghat which is 3 hours from Dibrugarh. The island attracts tourists from all over the world. Among one of the most surreal places in India, Majuli is also strong contender for a place in UNESCO’s World Heritage Sites. Mostly, inhabited by tribals, the culture of Majuli is unique and quite interesting and is one of the key reasons why people love this place so much. On our way to Majuli, we visit the historic town of Sivasagar where we visit the historical remains of the Ahom dynasty. Your stay will be in Dekachang Resort resort in Majuli.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 4</h6>
					<span class="mt-1 text-primary"><b>MAJULI SIGHTSEEING</b></span><br>
					<span class="text-dark" style="font-weight:500;">We spend the entire day visiting the various Satras and other cultural centres in the Majuli Island. You will stay in the same resort.</span>
						
				</div>	
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 5</h6>
					<span class="mt-1 text-primary"><b>DRIVE TO KAZIRANGA, ATTEND CULTURAL EVENT</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast, we leave for Kaziranga National Park, home to the one horned Rhinoceros and hold a record population of more than 80% of the one horned Rhinos in the world. Kaziranga also has the highest density of tiger population in any protected area in the world. Upon arrival at Kaziranga, we check into the wildlife resort. In the evening we will organise cultural events for all our guests. Overnight stay at Borgos resort.</span>
						
				</div>	
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 6</h6>
					<span class="mt-1 text-primary"><b>JEEP SAFARI IN KAZIRANGA, DRIVE TO NAMERI</b></span><br>
					<span class="text-dark" style="font-weight:500;">Today, we go for a morning Jeep Safari in the Kohora range. After the Safari, we leave for Nameri National Park which is 3 hours from Kaziranga. Nameri is famous for its elephants and other animals including tigers, leopards, gaurs, wild pigs, sambars, etc and also for being a bird watchers paradise. You stay in Nameri National Park will be in Nameri Eco Lodge.</span>
						
				</div>	
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 7</h6>
					<span class="mt-1 text-primary"><b>RAFTING IN NAMERI, DRIVE TO GUWAHATI</b></span><br>
					<span class="text-dark" style="font-weight:500;">In the morning we go for rafting in the Jai Bharali River. The rafting route is 13 km long and takes about 3 hours. A great, tiring and enjoyable experience. After lunch, we leave for Guwahati.</span>
						
				</div>	
			</div>
			<div class="card-header bg-info mt-2"><b>ACTIVITIES & INCLUSIVES</b></div>	
			<div class="row container-fluid justify-content-center" style="width:100%;">
				<ul class="py-3" style="list-style:none;background:#f3f3f3;width:49%;margin-left:1%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>Boathouse Stay in Dibru Saikhowa National Park</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Jeep Ride in Kaziranga National Park</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>River Rafting in Nameri National Park</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Ferry Ride in Brahmaputra</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Majuli and Sivsagar Sightseeing</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Rewai Village</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Cherrapunjee</b></li>
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
					$q9="select * from packages where id=5";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<a href="book.php?id=5" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
		</center>
		<div id="footer" style="margin-top:10vh;">
			<center><p style="padding-top:10px;"><b>&copy TAMS</b> Copyright 2019.All Rights Reserved.</p></center>
		</div>

	</body>
	
</html>