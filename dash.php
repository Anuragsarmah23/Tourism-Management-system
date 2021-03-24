<?php
	session_start();
	if(!isset($_SESSION["aid"]))
		header("location:index.php");
	$con=mysqli_connect("localhost","root","","tams");
	if(!$con)
		die("error");
	$q="select * from user";
	$q_run=mysqli_query($con,$q);
	$rows=mysqli_num_rows($q_run);
	$q2="select * from packages";
	$q2_run=mysqli_query($con,$q2);
	$rows2=mysqli_num_rows($q2_run);
	$q3="select * from bookings";
	$q3_run=mysqli_query($con,$q3);
	$rows3=mysqli_num_rows($q3_run);
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width,initial-scale=1.0" name="viewport">
		<title>ADMIN DASH|TAMS</title>
		
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
	<body style="background:url('img/c4.jpg');">
		<nav class="navbar navbar-expand fixed-top">
			<div class="container">
				<ul class="navbar-nav mr-auto">
					<a class="navbar-brand" href="index.php">
						<img src="img/logo2.png" alt="Logo" height="100" width="100">
					</a>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<?php
							$con=mysqli_connect("localhost","root","","tams");
							if(!$con)
								die("error");
							$aid=$_SESSION['aid'];
							$q="select * from admin where id='$aid'";
							$q_run=mysqli_query($con,$q);
							$row=mysqli_fetch_assoc($q_run);
						?>
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							<i class="fa fa-user"></i><span style="margin-left:7px;"><?php echo $row['id']; ?>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="logout.php"><i class="fa fa-arrow-left text-dark"></i><span style="margin-left:7px;color:#111;"> Log out</span></a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		<div class="sidebar">
			<ul class="sidebar-nav">
				<li class="side-item">
					<a href="dash.php" class="side-link active"><i class="fa fa-dashboard"></i><span class="ml-3">DASHBOARD</span></a>
				</li><hr style="border-color:grey;">
				<li class="side-item">
					<a href="users.php" class="side-link"><i class="fa fa-users"></i><span class="ml-3">VIEW USERS</span></a>
				</li><hr style="border-color:grey;">
				<li class="side-item">
					<a href="packages.php" class="side-link"><i class="fa fa-gift"></i><span class="ml-3">PACKAGES</span></a>
				</li><hr style="border-color:grey;">
				<li class="side-item">
					<a href="bookings.php" class="side-link"><i class="fa fa-ticket"></i><span class="ml-3">BOOKINGS</span></a>
				</li><hr style="border-color:grey;">
			</ul>
		</div>
		<div style="margin-left:16vw;padding-top:78px;margin-right:1vw;">
			<div class="row" style="margin-left:0.1px;margin-right:0.1px;">
				<div class="card" style="width:24vw;background:rgba(0,0,0,0.5);">
					<div class="card-header" style="font-size:54px;background:transparent;">
						<i class="fa fa-user text-light"></i>
					</div>
					<div class="card-content text-light text-center" style="font-size:28px;">
						<p>USERS <b><span class="ml-5"><?php echo $rows; ?></span></b></p>
					</div>
				</div>
				<div class="card" style="width:24vw;margin-left:5vw;background:rgba(0,0,0,0.5);">
					<div class="card-header" style="font-size:54px;background:transparent;">
						<i class="fa fa-gift text-light"></i>
					</div>
					<div class="card-content text-light text-center" style="font-size:28px;">
						<p>PACKAGES <b><span class="ml-5"><?php echo $rows2; ?></span></b></p>
					</div>
				</div>
				<div class="card" style="width:24vw;margin-left:4.5vw;background:rgba(0,0,0,0.5);">
					<div class="card-header" style="font-size:54px;background:transparent;">
						<i class="fa fa-ticket text-light"></i>
					</div>
					<div class="card-content text-light text-center" style="font-size:28px;">
						<p>BOOKINGS <b><span class="ml-5"><?php echo $rows3; ?></span></b></p>
					</div>
				</div>
			</div>
			<div class="card mt-2" style="background:rgba(0,64,0,0.5);height:65vh;">
				<canvas id="myChart" style="height:100% !important;"></canvas>
			</div>
			<div id="footer" class="mt-2 bg-dark">
				<center><p style="padding-top:10px;"><b>&copy TAMS</b> Copyright 2019.All Rights Reserved.</p></center>
			</div>
		</div>

	</body>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<script>
		var ctx = document.getElementById('myChart').getContext('2d');
		var user="<?php echo $rows; ?>";
		var packages="<?php echo $rows2; ?>";
		var bookings="<?php echo $rows3; ?>";
		var chart = new Chart(ctx, {
			// The type of chart we want to create
			type: 'line',

			// The data for our dataset
			data: {
				labels: ['TAMS','USERS', 'PACKAGES', 'BOOKINGS','PAYMENTS','TAMS'],
				datasets: [{
					label: 'TOTAL',
					backgroundColor: 'rgba(255,255,255,0.5)',
					borderColor: '#fff',
					data: [0,user,packages,bookings,0,0],
				}]
				
			},
			maintainAspectRatio: false,
			// Configuration options go here
			options: {
				legend: {
						// This more specific font property overrides the global property
					labels: {	
						fontColor: 'white'
					}
				
				},
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true,
							fontColor: 'white',
							stepSize: 1,
							max: 20
						},
						gridLines: {
							tickMarkLength: 5, 
							color:'rgba(255,255,255,0.2)',
							borderDash:[2]
						},
					}],
				  xAxes: [{
						ticks: {
							fontColor: 'white'
						},
						gridLines: {
							tickMarkLength: 5, 
							color:'rgba(255,255,255,0.4)'
						},
					}],
				}
			}
		});
	</script>
</html>