<?php
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width,initial-scale=1.0" name="viewport">
		<title>REGISTER|TAMS</title>
		
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
						<h4 class="modal-title">REGISTER YOUR DETAILS</h4>
						<button type="button" class="close closeBtn text-light" data-dismiss="modal">&times;</button>
					</div>
					<form method="POST" action="regParse.php" id="regForm">
						<div class="modal-body">
							<div class="row">
								<div class="form-group col-md-4">
								<label for="fname" class="col-form-label ml-3 text-md-right">First Name</label>

								<div class="col-md-12" style="color:red;">
									<input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" data-rule-required="true" data-msg-required="Please enter your first name" data-rule-lettersonly="true" autofocus>	
								</div>
								</div>
								<div class="form-group col-md-4">
									<label for="mname" class="col-form-label ml-3 text-md-right">Middle Name</label>

									<div class="col-md-12" style="color:red;">
										<input type="text" class="form-control" id="mname" name="mname" placeholder="Enter Middle Name">	
									</div>
								</div>
								<div class="form-group col-md-4">
									<label for="lname" class="col-form-label ml-3 text-md-right">Last Name</label>

									<div class="col-md-12" style="color:red;">
										<input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" data-rule-required="true" data-msg-required="Please enter your last name" data-rule-lettersonly="true">	
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label for="dob" class="ml-3 col-form-label text-md-right">Date of Birth</label>

									<div class="col-md-12" style="color:red;">
										<input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date Of Birth" data-rule-required="true" data-msg-required="Please enter your date of birth" min="1960-01-01" max="2005-01-01" value="1996-01-01">	
									</div>
								</div>
								<div class="form-group col-md-6">
									<label for="address" class="ml-3 col-form-label text-md-right">Address</label>

									<div class="col-md-12" style="color:red;">
										<input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" data-rule-required="true" data-msg-required="Please enter your address">	
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label for="contact" class="ml-3 col-form-label text-md-right">Contact</label>

									<div class="col-md-12" style="color:red;">
										<input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact Number" data-rule-required="true" data-msg-required="Please enter your contact number" data-rule-numbersonly="true" data-msg-numbersonly="Contact number cannot contain alphabets" data-rule-minlength="10" data-rule-maxlength="10">	
									</div>
								</div>
								<div class="form-group col-md-6">
									<label for="email" class="ml-3 col-form-label text-md-right">E-Mail</label>

									<div class="col-md-12" style="color:red;">
										<input type="email" class="form-control" id="email" name="email" placeholder="Enter E-Mail" data-rule-required="true" data-msg-required="Please enter your email">	
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label for="password" class="ml-3 col-form-label text-md-right">Password</label>

									<div class="col-md-12" style="color:red;">
										<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" data-rule-minlength="8" data-rule-maxlength="16" data-msg-minlength="Password should contain atleast 8 characters" data-rule-required="true" data-msg-required="Please enter your password" data-rule-password="true" >	
									</div>
								</div>
								<div class="form-group col-md-6">
									<label for="cnfpass" class="ml-3 col-form-label text-md-right">Confirm Password</label>

									<div class="col-md-12" style="color:red;">
										<input type="password" class="form-control" id="cnfpass" name="cnfpass" placeholder="Confirm Your Password" data-rule-required="true" data-msg-required="Please confirm your password"  data-rule-minlength="8" data-rule-maxlength="16" data-rule-password="true">	
									</div>
								</div>
							</div>
						</div>    
						<div class="modal-footer justify-content-center">
							<a href="login.php">Already Registered?</a>
							<button type="submit" class="btn btn-primary btnw100">REGISTER</button>
							<button type="button" class="btn btn-danger btnw100" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div> 
		<script>
			jQuery.validator.addMethod("lettersonly", function(value, element) {
				return this.optional(element) || /^[A-Za-z]+$/i.test(value);
			}, "Letters only please");
		</script>
		<script>
			jQuery.validator.addMethod("numbersonly", function(value, element) {
				return this.optional(element) || /^[0-9]+$/i.test(value);
			}, "Enter Number");
		</script>
			
		<script>
			jQuery.validator.addMethod("password", function(value, element) {
				return this.optional(element) || /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/i.test(value);
			}, "Enter combination of numbers and alphabets containing atleast 8 charcters");
		</script>
		<?php
			if(isset($_SESSION['aid'])){
		?>
			<script>
				$('#regForm').validate();
				$("#reg").on("hidden.bs.modal", function () {
					location.href = "dash.php";
				});
				$(window).on('load',function(){
					$('#reg').modal('show');
				});
			</script>
		<?php
			}else{
		?>
		<script>
			$('#regForm').validate();
			$("#reg").on("hidden.bs.modal", function () {
				location.href = "index.php";
			});
			$(window).on('load',function(){
				$('#reg').modal('show');
			});
		</script>
			<?php } ?>
	</body>
</html>
	