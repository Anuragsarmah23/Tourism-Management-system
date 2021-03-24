<?php
	session_start();
	$uid='';
	if(isset($_SESSION['uid']))
		$uid=$_SESSION["uid"];
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
		<div id="mainC" class="carousel slide" data-ride="carousel" style="height:80vh;">
		  <ul class="carousel-indicators">
			<li data-target="#mainC" data-slide-to="0" class="active"></li>
			<li data-target="#mainC" data-slide-to="1"></li>
			<li data-target="#mainC" data-slide-to="2"></li>
			<li data-target="#mainC" data-slide-to="3"></li>
		  </ul>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="img/c4.jpg" class="carouselImage">
			  <div class="carousel-caption">
				<?php
					$con=mysqli_connect("localhost","root","","tams");
					if(!$con)
						die("error");
					$q="select * from user where id='$uid'";
					$q_run=mysqli_query($con,$q);
					$row=mysqli_fetch_assoc($q_run);
					if(mysqli_num_rows($q_run)==0){
				?>
				<a href="register.php" class="btn regbtn">Register</a>
				<a href="login.php" class="btn loginbtn">Login</a>
				<?php
					}
				?>
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="img/c5.jpg" class="carouselImage">
			  <div class="carousel-caption">
				<?php
				if(mysqli_num_rows($q_run)==0){
				?>
				<a href="register.php" class="btn regbtn">Register</a>
				<a href="login.php" class="btn loginbtn">Login</a>
				<?php
					}
				?>
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="img/c6.jpg" class="carouselImage">
			  <div class="carousel-caption">
				<?php
				if(mysqli_num_rows($q_run)==0){
				?>
				<a href="register.php" class="btn regbtn">Register</a>
				<a href="login.php" class="btn loginbtn">Login</a>
				<?php
					}
				?>
			  </div>
			</div>
			<div class="carousel-item">
			  <img src="img/c7.jpg" class="carouselImage">
			  <div class="carousel-caption">
				<?php
				if(mysqli_num_rows($q_run)==0){
				?>
				<a href="register.php" class="btn regbtn">Register</a>
				<a href="login.php" class="btn loginbtn">Login</a>
				<?php
					}
				?>
			  </div>
			</div>	
		  </div>
		  <a class="carousel-control-prev" href="#mainC" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#mainC" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		  </a>

		</div>
		<nav class="navbar navbar-expand sticky-top" style="margin-top:9vh;">
			<div class="container">
				<ul class="navbar-nav mr-auto">
					<a class="navbar-brand" href="index.php">
						<img src="img/logo2.png" alt="Logo" height="100" width="100">
					</a>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
					  <a class="nav-link active" href="index.php"><i class="fa fa-home text-primary"></i> HOME</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#contact"><i class="fa fa-phone text-primary"></i> CONTACT US</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#about"><i class="fa fa-question text-primary"></i> ABOUT US</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#offers"><i class="fa fa-gift text-primary"></i> OFFERS</a>
					</li>
					<li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
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
					<li class="nav-item">
					  <a class="nav-link" href="myBookings.php"><i class="fa fa-ticket text-primary"></i> MY BOOKINGS</a>
					</li>
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
		<div id="about">
			<div class="row text-dark" style="width:100vw;">
				<div class="image col-md-4">
					<center><img src="img/logo2.png" height="300" width="300"></center>
				</div>
				<div class="col-md-8 aboutC px-5 pt-3">
					<div class="card-header">
						<span style="font-size:18px;font-weight:900;">
							<i class="fa fa-question"></i> FEW WORDS ABOUT US
						</span>
					</div>	
						<div class="mx-3 mt-3" style="text-align:justify;font-weight:500;font-size:16px;">	
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The journey to every great destiny starts with a vision, a dream. 
							But for those with wanderlust in their heart, the journey is both the destiny and the dream. 
							Travel is what fuels the desire of inner fulfilment, it is what builds intellect and cultivates the mind. 
							We have always believed in this statement and envisioned of a dream to show the world the uncharted virgin landscapes hidden in a world untouched – North East India. 
							And this dream, our vision has materialised in the form of ‘Discover Northeast’! We welcome all ardent souls to come and experience breathtaking beauty and a bag full of adventures we have to offer.
							<span id="dots">...</span><span id="more">
							We offer luxury, adventure and budget tours that will fill the soul of any travel enthusiast or adrenaline junkie! Go through our insightful blogs and learn about things you never knew the Northeast has to offer. 
							Stream our videos as we document our travels and know what life is all about here. 
							Get mesmerised by knowing about the rich history and cultural heritage of the Northeast.

							These are just baby steps in our journey in which we are preparing to bring in front of you all the immense possibilities this region of the country has to offer in the form of ethnic merchandising, 
							documentary films that explore to the roots about life in Northeast India and bring to you stories from the various colourful tribes and festivals of the region. 
							So come be a part of our journey and let your soul embrace the tranquillity in the valleys and hills!<br><br></span>
							<button onclick="myFunction()" class="btn btn-dark" id="myBtn">Read more</button><br><br>
						</div>	
						
				</div>
			</div>	
		</div>
		<div id="offers">
			<div class="container text-light" style="font-size:18px;">
				<br><center><h4 class="text-info">BEST OFFERS</h4></center>
				<div class="row col-md-12 offset-md-1">
					<div class="card col-md-3 offerCard i1"><a href="heritage.php" class="text-light">
						<div class="olb p-3">
							<span class="ml-auto">HERITAGE ASSAM  </span><b><span class="ml-auto"> RS 36499</span></b>
							
						</div></a>
					</div>
					<div class="card col-md-3 offerCard i2"><a href="hornbill.php" class="text-light">
						<div class="olb p-3">
							<span class="ml-auto">HORNBILL TOUR </span><b><span class="ml-auto"> RS 19999</span></b>
						</div></a>
					</div>
					<div class="card col-md-3 offerCard i3"><a href="dzukou.php" class="text-light">
						<div class="olb p-3">
							<span class="ml-auto">DZUKOU TREK </span><b><span class="ml-auto"> RS 15499</span></b>
						</div></a>
					</div>
				</div>
				<div class="row col-md-12 offset-md-1">
					
					<div class="card col-md-3 offerCard i4"><a href="meghalaya.php" class="text-light">
						<div class="olb p-3">
							<span class="ml-auto" style="font-size:16px;">MEGHALAYA TOUR </span><b><span class="ml-auto"> RS 17999</span></b>
						</div></a>
					</div>
					<div class="card col-md-3 offerCard i5"><a href="root.php" class="text-light">
						<div class="olb p-3">
							<span class="ml-auto">LIVING ROOTS </span><b><span class="ml-auto"> RS 7499</span></b>
						</div></a>
					</div>
					<div class="card col-md-3 offerCard i6"><a href="tawang.php" class="text-light">
						<div class="olb p-3">
							<span class="ml-auto">TAWANG </span><b><span class="ml-auto"> RS 13999</span></b>
						</div></a>
					</div>
				</div>
			</div>
		</div>
		<div id="contact" class="bg-dark p-1 text-light">
			<div class="card-header container">
				<span style="font-size:18px;font-weight:900;">
					<i class="fa fa-phone"></i> CONTACT US
				</span>
			</div>
			<div class="container p-5">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.3119031407264!2d91.74517632750556!3d26.186530237181692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5a24e37c48b9%3A0x977c2803c45a5749!2sCotton+University%2C+Guwahati!5e0!3m2!1sen!2sin!4v1557699655078!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				<br><br><span class="text-info" style="font-weight:900;"><i class="fa fa-map-marker"></i> ADDRESS</span><span style="font-weight:500;margin-left:55px;"> PAN BAZAR, GHY - 781007</span>
				<br><br><span class="text-info" style="font-weight:900;"><i class="fa fa-envelope"></i> MAIL US</span><span style="font-weight:500;margin-left:55px;"> iamgroot@avengers.com</span>
				<br><br><span class="text-info" style="font-weight:900;"><i class="fa fa-phone"></i> CONTACT US</span><span style="font-weight:500;margin-left:20px;"> +91 9090121256</span>
			</div>
		</div>
		<div id="footer">
			<center><p style="padding-top:10px;"><b>&copy TAMS</b> Copyright 2019.All Rights Reserved.</p></center>
		</div>
		<script>
			function myFunction() {
			  var dots = document.getElementById("dots");
			  var moreText = document.getElementById("more");
			  var btnText = document.getElementById("myBtn");

			  if (dots.style.display === "none") {
				dots.style.display = "inline";
				btnText.innerHTML = "Read more"; 
				moreText.style.display = "none";
			  } else {
				dots.style.display = "none";
				btnText.innerHTML = "Read less"; 
				moreText.style.display = "inline";
			  }
			}
		</script>
		<script>
			$('a[href*="#"]').on('click', function (e) {
				e.preventDefault();

				$('html, body').animate({
					scrollTop: $($(this).attr('href')).offset().top
				}, 1000, 'linear');
			});
			$('a').on('click', function(){
				$('a').removeClass('active');
				$(this).addClass('active');
			});
		</script>
	</body>
	
</html>