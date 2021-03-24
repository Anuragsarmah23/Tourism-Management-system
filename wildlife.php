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
			<img src="img/12.jpg" class="carouselImage">
			  <div class="carousel-caption">
				<p style="font-size:30px;"><b>ASSAM WILDLIFE CLASSIC</b><br>
					<b>Rs. 47499</b>
				</p>
				
				<?php
					$q9="select * from packages where id=6";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<a href="book.php?id=6" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
			  </div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="card-header bg-info mt-2"><b>TOUR PROGRAM</b></div>
			<div class="container-fluid mt-2">
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 1</h6>
					<span class="mt-1 text-primary"><b>REACH GUWAHATI, DRIVE TO MANAS NATIONAL PARK</b></span><br>
					<span class="text-dark" style="font-weight:500;">Our driver will receive you from the Guwahati Airport/ Railway Station. From the Airport/Railway station, we will head for our journey to Manas National Park. The drive from Guwahati to Manas is of 3 hour. The National Park is a UNESCO Natural World Heritage site, a Project Tiger reserve, an elephant reserve and a biosphere reserve. Located in the Himalayan foothills, it is known as Royal Manas National Park in Bhutan. The park is known for its rare and endangered endemic wildlife such as the Assam roofed turtle, hispid hare, golden langur and pygmy hog. Manas is also famous for its population of the wild water buffalo. The evening is reserved for a special cultural dance performed by the Bodo tribe of Assam. Stay overnight at Musa Resort.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 2</h6>
					<span class="mt-1 text-primary"><b>JEEP SAFARI IN MANAS, DRIVE TO NAMERI NATIONAL PARK</b></span><br>
					<span class="text-dark" style="font-weight:500;">Early Jeep safari to the UNESCO Natural World Heritage site will give the chance to spot some endangered endemic wildlife. After Breakfast, we leave for Nameri National Park which is 8 hours drive from Manas. Nameri is famous for its elephants and other animals including tigers, leopards, gaurs, wild pigs, sambars, etc and also for being a bird watchers paradise. After the tiring journey, we will check-in to Nameri Eco Lodge. The evening is free for leisure activities. Stay overnight.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 3</h6>
					<span class="mt-1 text-primary"><b>RAFTING IN NAMERI, DRIVE TO KAZIRANGA</b></span><br>
					<span class="text-dark" style="font-weight:500;">After breakfast, we go for rafting in the Jai Bharali River. The rafting route is 13 km long and takes about 3 hours. The experience will be tiresome yet enjoyable. After we are done with Nameri, we head towards our next destination – Kaziranga National Park. The drive is of 3hours. Home to the one horned Rhinoceros. It holds a record population of more than 80% of the one horned Rhinos in the world. Kaziranga also has the highest density of tiger population in any protected area in the world. Check-in to your stay in Borgos Resort. The evening is free for leisure activities. Stay overnight.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 4</h6>
					<span class="mt-1 text-primary"><b>ELEPHANT RIDE, JEEP SAFARI AND CULTURAL EVENTS</b></span><br>
					<span class="text-dark" style="font-weight:500;">Early morning, we start for the Elephant ride. The ride will take you through the jungles, increasing the chance of spotting various animals including Tigers. Jeep Safari in the Kohora range will also await for you. Kohora Range is famous for varous endangered animals like One Horned Rhinocerous, Wild Buffalo, Royal Bengal Tigers, etc. In the afternoon, we take you to another range, Agoratoli Range, which is famous for Bird Watching. In the evening, we go for the community tour experiencing the whereabouts of the cultural diversity. Your stay will be in the same resort in Kaziranga.</span>
						
				</div>	
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 5</h6>
					<span class="mt-1 text-primary"><b>RETURN TO GUWAHATI</b></span><br>
					<span class="text-dark" style="font-weight:500;">After Breakfast, we leave for Guwahati Airport for your onward journey</span>
						
				</div>	
			</div>
			<div class="card-header bg-info mt-2"><b>ACTIVITIES & INCLUSIVES</b></div>	
			<div class="row container-fluid justify-content-center" style="width:100%;">
				<ul class="py-3" style="list-style:none;background:#f3f3f3;width:49%;margin-left:1%;">
					<li><i class="fa fa-superpowers mr-3"></i><b> Cultural dance by Bodo Tribe</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b> Jeep Safari in Manas</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b> Rafting in Nameri National Park</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b> Jeep Safari in Kaziranga National Park</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b> Elephant Safari in Kaziranga National Park</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b> Community Tour in Kaziranga</b></li>
				</ul>
				<ul class="py-3" style="list-style:none;background:#f1f2f3;width:50%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>Accommodation in a two bedded room with breakfast</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All hotel taxes and service taxes</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All toll and driver fee</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All transfers and sightseeing by comfortable vehicles</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>All the mentioned activities</b>.</li>
				</ul>
			</div>
			
		</div>	
		<center>
			<?php
					$q9="select * from packages where id=6";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<a href="book.php?id=6" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
		</center>
		<div id="footer" style="margin-top:10vh;">
			<center><p style="padding-top:10px;"><b>&copy TAMS</b> Copyright 2019.All Rights Reserved.</p></center>
		</div>

	</body>
	
</html>