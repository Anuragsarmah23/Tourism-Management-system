<?php
	session_start();
	if(!isset($_SESSION['uid'])){
		echo '<script>alert("You must be logged in to book a tour")</script>';
		echo '<script>location.href="login.php"</script>';
	}	
	
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width,initial-scale=1.0" name="viewport">
		<title>BOOK A TOUR|TAMS</title>
		
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
	<body style="background:url(img/f1.jpg) center;background-size:cover;">
		<div class="modal fade text-light" id="login">
			<div class="modal-dialog">
				<div class="modal-content bg-dark">
					<div class="modal-header">
						<h4 class="modal-title">BOOKING FORM</h4>
						<button type="button" class="close closeBtn text-light" data-dismiss="modal">&times;</button>
					</div>
					<form method="POST" action="bookingParse.php" id="bookingForm">
						<div class="modal-body">
							<?php
								$con=mysqli_connect("localhost","root","","tams");
								if(!$con)
									die("Error");
								$q="select * from packages where id='$_GET[id]'";
								$q_run=mysqli_query($con,$q);
								$row=mysqli_fetch_assoc($q_run);
								$name=strtoupper($row["name"]);
								?>
							<input type="hidden" name="package" value="<?php echo $_GET['id']; ?>">
							<div class="row">
								<div class="form-group col-md-12">
									<label>Package Name</label>
									<input type="text" readonly name="pname" value="<?php echo $name; ?>" class="form-control">
								</div>
								
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label>Price(Per Person)</label>
									<input type="text" readonly name="cost" value="Rs. <?php echo $row['cost']; ?>" class="form-control">
								</div>
								<div class="form-group col-md-6">
									<label>Total Persons</label>
									<input type="number" required id="persons" class="form-control" name="persons" placeholder="Enter number of persons" min="1" max="50">
								</div>
						
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label>Book From</label>
									<input type="date" id="start" name="start" class="form-control">
								</div>
								<div class="form-group col-md-6">
									<label>Book To</label>
									<input type="date" id="end" name="end" class="form-control">
								</div>
							</div>
							<div id="tA" class="row" style="display:none;">
								<div class="col-md-12">
									<kbd class="bg-info p-2">Total Amount: Rs. 
									<span id="tAF"></span></kbd>
									<input type="hidden" id="tAI" name="tA">
								</div>
							</div>
	
						</div>    
						<div class="modal-footer justify-content-center">
							<button type="submit" class="btn btn-primary btnw100">BOOK</button>
							<button type="button" class="btn btn-danger btnw100" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div> 
		<script>
			<?php
				if($_GET['id'] == 11){
			?>
			var today2 = new Date();
			var year = today2.getFullYear();
			var date1 = year + '-12-01';
			var today = new Date(date1);
			var dd = today.getDate();
			var mm = today.getMonth()+1; 
			var yyyy = today.getFullYear();
			Date.prototype.addDays = function(days) {
				var date = new Date(this.valueOf());
				date.setDate(date.getDate() + days);
				return date;
			}
				
			 if(dd<10){
					dd="0"+dd
				} 
				if(mm<10){
					mm="0"+mm
				} 
			var endD = today.addDays(9);
			endD = endD.getFullYear()+"-"+(endD.getMonth()+1)+"-"+endD.getDate();
			today = yyyy+"-"+mm+"-"+dd;
			
			document.getElementById("start").setAttribute("readonly", "readonly");
			document.getElementById("start").setAttribute("value", today);
			document.getElementById("end").setAttribute("readonly", "readonly");
			document.getElementById("end").setAttribute("value", endD);
				<?php }else if($_GET['id'] == 12){  ?>
				var today2 = new Date();
			var year = today2.getFullYear();
			var date1 = year + '-09-26';
			var today = new Date(date1);
			var dd = today.getDate();
			var mm = today.getMonth()+1; 
			var yyyy = today.getFullYear();
			Date.prototype.addDays = function(days) {
				var date = new Date(this.valueOf());
				date.setDate(date.getDate() + days);
				return date;
			}
			 if(dd<10){
					dd="0"+dd
				} 
				if(mm<10){
					mm="0"+mm
				} 
			var endD = today.addDays(5);
			endD = endD.getFullYear()+"-"+(endD.getMonth()+1)+"-"+("0"+endD.getDate());
			alert(endD);
			today = yyyy+"-"+mm+"-"+dd;
			
			document.getElementById("start").setAttribute("readonly", "readonly");
			document.getElementById("start").setAttribute("value", today);
			document.getElementById("end").setAttribute("readonly", "readonly");
			document.getElementById("end").setAttribute("value", endD);
				
			<?php }else if($_GET['id'] == 13){  ?>	
			var today2 = new Date();
			var year = today2.getFullYear();
			var date1 = year + '-10-26';
			var today = new Date(date1);
			var dd = today.getDate();
			var mm = today.getMonth()+1; 
			var yyyy = today.getFullYear();
			Date.prototype.addDays = function(days) {
				var date = new Date(this.valueOf());
				date.setDate(date.getDate() + days);
				return date;
			}	
			 if(dd<10){
					dd="0"+dd
				} 
				if(mm<10){
					mm="0"+mm
				} 
			var endD = today.addDays(3);
			endD = endD.getFullYear()+"-"+(endD.getMonth()+1)+"-"+endD.getDate();
			today = yyyy+"-"+mm+"-"+dd;
			
			document.getElementById("start").setAttribute("readonly", "readonly");
			document.getElementById("start").setAttribute("value", today);
			document.getElementById("end").setAttribute("readonly", "readonly");
			document.getElementById("end").setAttribute("value", endD);
			<?php }else{ ?>
			var today = new Date();
			Date.prototype.addDays = function(days) {
				var date = new Date(this.valueOf());
				date.setDate(date.getDate() + days);
				return date;
			}
			<?php
				if($_GET['id'] == 1){
			?>
			var end1 = today.addDays(4);
				<?php } ?>
				<?php
				if($_GET['id'] == 2){
			?>
			var end1 = today.addDays(5);
				<?php } ?>
				<?php
				if($_GET['id'] == 3){
			?>
			var end1 = today.addDays(5);
				<?php } ?>
				<?php
				if($_GET['id'] == 4){
			?>
			var end1 = today.addDays(8);
				<?php } ?>
				<?php
				if($_GET['id'] == 5){
			?>
			var end1 = today.addDays(7);
				<?php } ?>
				<?php
				if($_GET['id'] == 6){
			?>
			var end1 = today.addDays(5);
				<?php } ?>
				<?php
				if($_GET['id'] == 7){
			?>
			var end1 = today.addDays(8);
				<?php } ?>
				<?php
				if($_GET['id'] == 8){
			?>
			var end1 = today.addDays(7);
				<?php } ?>
				<?php
				if($_GET['id'] == 9){
			?>
			var end1 = today.addDays(7);
				<?php } ?>
				<?php
				if($_GET['id'] == 10){
			?>
			var end1 = today.addDays(9);
				<?php } ?>
			var dd = today.getDate();
			var mm = today.getMonth()+1; 
			var yyyy = today.getFullYear();
			var dd1 = end1.getDate();
			var mm1 = end1.getMonth()+1; 
			var yyyy1 = end1.getFullYear();
				
			 if(dd<10){
					dd="0"+dd
				} 
				if(mm<10){
					mm="0"+mm
				} 
				if(dd1<10){
					dd1="0"+dd1
				} 
				if(mm1<10){
					mm1="0"+mm1
				} 
			today = yyyy+"-"+mm+"-"+dd;
			end1 = yyyy1+"-"+mm1+"-"+dd1;
			document.getElementById("start").setAttribute("min", today);
			document.getElementById("start").setAttribute("value", today);
			document.getElementById("end").setAttribute("value", end1);
			document.getElementById("end").setAttribute("readonly", "readonly");
			<?php } ?>
		</script>
				
		<script>	
		
		$('#start').on('change',function(){
			var start = new Date($(this).val());
			Date.prototype.addDays = function(days) {
				var date = new Date(this.valueOf());
				date.setDate(date.getDate() + days);
				return date;
			}
			<?php
				if($_GET['id'] == 1){
			?>
			var today = start.addDays(4);
				<?php } ?>
				<?php
				if($_GET['id'] == 2){
			?>
			var today = start.addDays(5);
				<?php } ?>
				<?php
				if($_GET['id'] == 3){
			?>
			var today = start.addDays(5);
				<?php } ?>
				<?php
				if($_GET['id'] == 4){
			?>
			var today = start.addDays(8);
				<?php } ?>
				<?php
				if($_GET['id'] == 5){
			?>
			var today = start.addDays(7);
				<?php } ?>
				<?php
				if($_GET['id'] == 6){
			?>
			var today = start.addDays(5);
				<?php } ?>
				<?php
				if($_GET['id'] == 7){
			?>
			var today = start.addDays(8);
				<?php } ?>
				<?php
				if($_GET['id'] == 8){
			?>
			var today = start.addDays(7);
				<?php } ?>
				<?php
				if($_GET['id'] == 9){
			?>
			var today = start.addDays(7);
				<?php } ?>
				<?php
				if($_GET['id'] == 10){
			?>
			var today = start.addDays(9);
				<?php } ?>
				
			var dd = today.getDate();
			var mm = today.getMonth()+1; 
			var yyyy = today.getFullYear();
			
			 if(dd<10){
					dd='0'+dd
				} 
				if(mm<10){
					mm='0'+mm
				} 

			today = yyyy+'-'+mm+'-'+dd;
			
			document.getElementById("end").setAttribute("value", today);
			document.getElementById("end").setAttribute("readonly", "readonly");
		});	

		</script>
		<script>
			$('#persons').on('input',function(){
				var num = $('#persons').val();
				if(num > 0){
					var unit = <?php echo $row["cost"]; ?>;
					var tA = num*unit;
					$('#tA').css('display','block');
					document.getElementById("tAF").innerHTML=tA;
					$('#tAI').attr("value",tA);
				}
			});
			
				
		</script>
		<script>
			$('#loginForm').validate();
			$("#login").on("hidden.bs.modal", function () {
				location.href = "index.php";
			});
			$(window).on('load',function(){
				$('#login').modal('show');
			});
		</script>
	</body>