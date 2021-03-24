
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
			<img src="img/18.jpg" class="carouselImage">
			  <div class="carousel-caption">
				<p style="font-size:30px;"><b>ZIRO MUSIC FESTIVAL TOUR</b><br>
					<b>Rs. 17500</b>
				</p>
				
				<?php
					$q9="select * from packages where id=12";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
				?>
				<kbd class="bg-info p-2 mr-3" style="font-size:18px;">Date: 26 Sept - 01 Oct </kbd><kbd style="font-size:18px;" class="bg-warning p-2">Duration: 6 Days </kbd><br><br> <br>
				<?php
					if(date('m') > 6){
				?>
				<a href="book.php?id=12" class="btn regbtn" style="width:200px;">BOOK NOW</a>
					<?php }else echo '<span class="text-danger bg-white p-2">Booking will start from August</span>'; } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
			  </div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="card-header bg-info mt-2"><b>TOUR PROGRAM</b></div>
			<div class="container-fluid mt-2">
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 1</h6>
					<span class="mt-1 text-primary"><b>REACH GUWAHATI, DRIVE TO ZIRO</b></span><br>
					<span class="text-dark" style="font-weight:500;">Reach Guwahati by afternoon to make sure you have ample time to relax before boarding. The train from Guwahati for Naharlagun (the nearest station to Ziro) will leave at 9:20 pm. All the festival goers will assemble at the station by 8 pm.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 2</h6>
					<span class="mt-1 text-primary"><b>WELCOME TO CAMP ZINGAROS</b></span><br>
					<span class="text-dark" style="font-weight:500;">Upon reaching Naharlagun, we head for a 3-4 hour bumpy ride to the awaited town of Ziro. Camp Zingaros (Discover Northeast campsite) waits to host you for the greater experience. Get some rest in the prearranged tent, freshen up and enjoy your breakfast in front of the god chosen panoramic view. Head out for the festival.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 3</h6>
					<span class="mt-1 text-primary"><b>SIT BACK, RELAX AND ENJOY THE MUSIC</b></span><br>
					<span class="text-dark" style="font-weight:500;">This retreat is the perfect escape from the Urban Jungle, where you just relax, enjoy, listen to some music and try the local cuisine along with some rice beer. The evening Jamming session continues in our Campsite by some local singers accompanying us throughout our journey. Lie down and take in the pleasure of stargazing. The night is young.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 4</h6>
					<span class="mt-1 text-primary"><b>MEET THE LOCALS</b></span><br>
					<span class="text-dark" style="font-weight:500;">Discover Northeast’s guide takes you to a walk through the Apatani way of life. A cup of tea along with some snacks in addition while you sit and chitchat inside a traditional Apatani house.
Head to the festival ground, enjoy the performances and come back whenever you feel like your campsite, where our Jamming awaits you for some thrilling performances by the local singers.</span>
						
				</div>	
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 5</h6>
					<span class="mt-1 text-primary"><b>EAT, SLEEP, MUSIC, REPEAT</b></span><br>
					<span class="text-dark" style="font-weight:500;">Try out different activities organized by the Camp Zingaro (football game, trek to the woods, music activities). The Camp will be full of throttle experiences. Head to the festival at 1 pm and party into the night. Camp Zingaros will wait for you to come back and a Gala for the final night and never forgetting experiences.</span>
						
				</div>
				<div class="container-fluid mt-1" style="text-align:justify;border:1px solid #8931ee;background:#f3f3f3;padding:20px;">
					<h6 class="mt-1 text-danger">DAY 6</h6>
					<span class="mt-1 text-primary"><b>RETURN TO GUWAHATI</b></span><br>
					<span class="text-dark" style="font-weight:500;">Freshen up in the morning, get some snaps with all the awesome people you’ve met and bid your new friends’ goodbye. Drive towards the station after breakfast and board your overnight train for Guwahati.</span>
						
				</div>
			</div>
			<div class="card-header bg-info mt-2"><b>ACTIVITIES & INCLUSIONS</b></div>	
			<div class="row container-fluid justify-content-center" style="width:100%;">
				<ul class="py-3" style="list-style:none;background:#f3f3f3;width:49%;margin-left:1%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>Guided village walk where you get to interact with, and photograph Apatani people and their lives, try traditional attire and jewellery and have a cup of tea with them. – Rs 500/- per person</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>A walking tour covering the village life of Ziro</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Game of Football and Volleyball.</b></li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Bath Tubs</b></li>

				</ul>
				<ul class="py-3" style="list-style:none;background:#f1f2f3;width:50%;">
					<li><i class="fa fa-superpowers mr-3"></i><b>Festival tickets</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Campsite jam sessions with local musicians</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Train Ticket from Guwahati to Naharlagun</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Tata Sumo from Naharlagun to Ziro</b>.</li>
					<li><i class="fa fa-superpowers mr-3"></i><b>Inner Line Permits for entering Arunachal Pradesh</b>.</li>
				</ul>
			</div>
			
		</div>	
		<center>
			<?php
					$q9="select * from packages where id=12";
					$q9_run=mysqli_query($con,$q9);
					$row=mysqli_fetch_assoc($q9_run);
					if($row['availability']=='yes'){
						if(date('m') > 6){
				?>
				<a href="book.php?id=12" class="btn regbtn" style="width:200px;">BOOK NOW</a>
						<?php }else echo '<span class="text-danger bg-white p-2">Booking will start from August</span>'; } else  { echo '<span class="text-danger bg-white p-3"><b>Currently Not Available</b></span>'; }?>
		</center>
		<div id="footer" style="margin-top:10vh;">
			<center><p style="padding-top:10px;"><b>&copy TAMS</b> Copyright 2019.All Rights Reserved.</p></center>
		</div>

	</body>
	
</html>