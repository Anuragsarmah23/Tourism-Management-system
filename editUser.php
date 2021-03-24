<?php
	session_start();
	$con=mysqli_connect("localhost","root","","tams");
	if(!$con)
		die("error");
	$id=$_GET['id'];
	$q="select * from user where id='$id'";
	$q_run=mysqli_query($con,$q);
	$row=mysqli_fetch_assoc($q_run);
?>	
<html>
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width,initial-scale=1.0" name="viewport">
		<title>EDIT USER|TAMS</title>
		
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
		<div class="modal fade text-light" id="reg">
			<div class="modal-dialog modal-lg">
				<div class="modal-content bg-dark">
					<div class="modal-header">
						<h4 class="modal-title">Edit <b><u><?php echo $row['id']; ?></u></b> Details</h4>
						<button type="button" class="close closeBtn text-light" data-dismiss="modal">&times;</button>
					</div>
					<form method="POST" action="updateUser.php" id="regForm">
						<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
						<div class="modal-body">
							<div class="row">
								<div class="form-group col-md-4">
								<label for="fname" class="col-form-label ml-3 text-md-right">First Name</label>

								<div class="col-md-12" style="color:red;">
									<input value="<?php echo $row['fname']; ?>" type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" data-rule-required="true" data-msg-required="Please enter first name" autofocus>	
								</div>
								</div>
								<div class="form-group col-md-4">
									<label for="mname" class="col-form-label ml-3 text-md-right">Middle Name</label>

									<div class="col-md-12" style="color:red;">
										<input value="<?php echo $row['mname']; ?>" type="text" class="form-control" id="mname" name="mname" placeholder="Enter Middle Name">	
									</div>
								</div>
								<div class="form-group col-md-4">
									<label for="lname" class="col-form-label ml-3 text-md-right">Last Name</label>

									<div class="col-md-12" style="color:red;">
										<input value="<?php echo $row['lname']; ?>" type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" data-rule-required="true" data-msg-required="Please enter last name">	
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label for="dob" class="ml-3 col-form-label text-md-right">Date of Birth</label>

									<div class="col-md-12" style="color:red;">
										<input value="<?php echo $row['dob']; ?>" type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date Of Birth" data-rule-required="true" data-msg-required="Please enter date of birth" min="1960-01-01" max="2005-01-01">	
									</div>
								</div>
								<div class="form-group col-md-6">
									<label for="address" class="ml-3 col-form-label text-md-right">Address</label>

									<div class="col-md-12" style="color:red;">
										<input value="<?php echo $row['address']; ?>" type="text" class="form-control" id="address" name="address" placeholder="Enter Address" data-rule-required="true" data-msg-required="Please enter address">	
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label for="contact" class="ml-3 col-form-label text-md-right">Contact</label>

									<div class="col-md-12" style="color:red;">
										<input value="<?php echo $row['contact']; ?>" type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact Number" data-rule-required="true" data-msg-required="Please enter contact number">	
									</div>
								</div>
								<div class="form-group col-md-6">
									<label for="email" class="ml-3 col-form-label text-md-right">E-Mail</label>

									<div class="col-md-12" style="color:red;">
										<input value="<?php echo $row['email']; ?>" type="email" class="form-control" id="email" name="email" placeholder="Enter E-Mail" data-rule-required="true" data-msg-required="Please enter email">	
									</div>
								</div>
							</div>
						</div>    
						<div class="modal-footer justify-content-center">
							<button type="submit" class="btn btn-primary btnw100">UPDATE</button>
							<button type="button" class="btn btn-danger btnw100" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div> 
		<script>
			$('#regForm').validate();
			$("#reg").on("hidden.bs.modal", function () {
				location.href = "users.php";
			});
			$(window).on('load',function(){
				$('#reg').modal('show');
			});
		</script>
	</body>
</html>
	