<html>
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width,initial-scale=1.0" name="viewport">
		<title>EDIT|TAMS</title>
		
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
						<h4 class="modal-title">EDIT STATUS</h4>
						<button type="button" class="close closeBtn text-light" data-dismiss="modal">&times;</button>
					</div>
					<form method="POST" action="updateBooking.php" id="loginForm">
						<div class="modal-body">
							<div class="row">
							<?php
								$con=mysqli_connect("localhost","root","","tams");
								if(!$con)
									die("Error");
								$q="select * from bookings where id='$_GET[id]'";
								$q_run=mysqli_query($con,$q);
								$row=mysqli_fetch_assoc($q_run);
								$q1="select * from packages where id='$row[packageID]'";
								$q1_run=mysqli_query($con,$q1);
								$row1=mysqli_fetch_assoc($q1_run);
								$q2="select * from user where id='$row[userID]'";
								$q2_run=mysqli_query($con,$q2);
								$row2=mysqli_fetch_assoc($q2_run);
								
							?>
								<div class="form-group col-md-6">
									<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
									<label>USER NAME</label>								
									<input type="text" class="form-control" value="<?php echo $row2['fname'].' '.$row2['mname'],' '.$row2['lname']; ?>" readonly>	
								</div>
								<div class="form-group col-md-6">
									<label>PACKAGE NAME</label>
									<input type="text" class="form-control" value="<?php echo $row1['name']; ?>" readonly>	
								</div>	
							</div>								
							
							<div class="row">
								<div class="form-group col-md-12">
									<label>BOOKING DATE</label>
									<input type="text" class="form-control" value="<?php echo $row['bookingDate']; ?>" readonly>	
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label>START DATE</label>
									<input type="text" class="form-control" value="<?php echo $row['startDate']; ?>" readonly>	
								</div>
								<div class="form-group col-md-6">
									<label>END DATE</label>
									<input type="text" class="form-control" value="<?php echo $row['endDate']; ?>" readonly>	
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label>TOTAL PERSON</label>
									<input type="text" class="form-control" value="<?php echo $row['totalPerson']; ?>" readonly>	
								</div>
								<div class="form-group col-md-6">
									<label>TOTAL AMOUNT</label>
									<input type="text" class="form-control" value="<?php echo 'Rs.'.$row['totalAmount']; ?>" readonly>	
								</div>	
							</div>
							
							
							<div class="row">
								<div class="from-group col-md-12">
									<label>STATUS</label>
									<input type="text" class="form-control" name="status" value="<?php echo $row['status']; ?>">	
								</div>
							</div>

						</div>    
						<div class="modal-footer justify-content-center">
							<button type="submit" class="btn btn-primary btnw100">Update</button>
							<button type="button" class="btn btn-danger btnw100" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div> 
		<script>
			$('#loginForm').validate();
			$("#login").on("hidden.bs.modal", function () {
				location.href = "packages.php";
			});
			$(window).on('load',function(){
				$('#login').modal('show');
			});
		</script>
	</body>
</html>
	