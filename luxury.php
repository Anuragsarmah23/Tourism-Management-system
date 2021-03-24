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
	<body style="background:#f1f2f3;">
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
							<a class="dropdown-item mb-2 active" href="luxury.php" style="border-bottom:1px solid black;">
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
		<div class="container-fluid" style="width:100%;">
			<div class="card-header bg-info text-light"><b><i class="fa fa-tasks"></i> LUXURY TOUR</b></div>
			<div class="row ml-3 justify-content-center">
				<div class="card mt-2 mx-2" style="min-height:50vh;width:29.5vw;">
					<a href="heritage.php"><img src="img/11.jpg" style="height:35vh;width:30vw;margin-left:-0.25vw"></a>
					<p class="mx-auto mt-2"><b>HERITAGE ASSAM</b></p>
					<ul class="mx-auto" style="list-style:none;margin:0;padding:0;font-size:13px;color:grey;">
						<li class="mt-1"><i class="fa fa-hand-o-right mr-3"></i> Stay in the best and iconic resorts of the region</li>
						<li class="mt-1"><i class="fa fa-hand-o-right mr-3"></i> Jeep Safari in Kaziranga National Park</li>
						<li class="mt-1"><i class="fa fa-hand-o-right mr-3"></i> See the historical remains of the Ahom dynasty</li>
						<li class="mt-1"><i class="fa fa-hand-o-right mr-3"></i> Rafting in Nameri</li>
					</ul>
					<b><p class="mx-auto text-dark mt-3 mb-3" style="font-size:12px;">TOTAL COST <span style="font-size:16px;" class="ml-3 text-danger">Rs. 36499</span></b></p>
				</div>
				<div class="card mt-2 mx-2" style="min-height:50vh;width:29.5vw;">
					<a href="wildlife.php"><img src="img/12.jpg" style="height:35vh;width:30vw;margin-left:-0.25vw"></a>
					<p class="mx-auto mt-2"><b>ASSAM WILDLIFE CLASSIC</b></p>
					<ul class="mx-auto" style="list-style:none;margin:0;padding:0;font-size:13px;color:grey;">
						<li class="mt-1"><i class="fa fa-hand-o-right mr-3"></i> Rafting in Nameri National Park</li>
						<li class="mt-1"><i class="fa fa-hand-o-right mr-3"></i> Jeep and Elephant Safari in Kaziranga National Park</li>
						<li class="mt-1"><i class="fa fa-hand-o-right mr-3"></i> Taste of culture of the natives</li>
						<li class="mt-1"><i class="fa fa-hand-o-right mr-3"></i> Stay in some of the best wildlife resorts in the region</li>
					</ul>
					<b><p class="mx-auto text-dark mt-3 mb-3" style="font-size:12px;">TOTAL COST <span style="font-size:16px;" class="ml-3 text-danger">Rs. 47499</span></b></p>
				</div>
			</div>
		</div>
		<div id="footer" style="margin-top:10vh;">
			<center><p style="padding-top:10px;"><b>&copy TAMS</b> Copyright 2019.All Rights Reserved.</p></center>
		</div>
	</body>
	
</html>