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
						<h4 class="modal-title">EDIT AVAILABILITY</h4>
						<button type="button" class="close closeBtn text-light" data-dismiss="modal">&times;</button>
					</div>
					<form method="POST" action="updatePackage.php" id="loginForm">
						<div class="modal-body">
							<div class="form-group row">
							<?php
								$con=mysqli_connect("localhost","root","","tams");
								if(!$con)
									die("Error");
								$q="select * from packages where id='$_GET[id]'";
								$q_run=mysqli_query($con,$q);
								$row=mysqli_fetch_assoc($q_run);
								
							?>
								<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
								<label for="id" class="col-md-4 col-form-label text-md-right">PACKAGE TYPE</label>

								<div class="col-md-8" style="color:red;">
									<input type="text" class="form-control" value="<?php echo $row['type']; ?>" readonly>	
								</div>
							</div>
							<div class="form-group row">
								<label for="id" class="col-md-4 col-form-label text-md-right">PACKAGE NAME</label>

								<div class="col-md-8" style="color:red;">
									<input type="text" class="form-control" value="<?php echo $row['name']; ?>" readonly>	
								</div>
							</div>
							<div class="form-group row">
								<label for="id" class="col-md-4 col-form-label text-md-right">PACKAGE COST</label>

								<div class="col-md-8" style="color:red;">
									<input type="text" class="form-control" value="<?php echo 'Rs.'.$row['cost']; ?>" readonly>	
								</div>
							</div>
							<div class="form-group row">
								<label for="id" class="col-md-4 col-form-label text-md-right">PACKAGE AVAILABILITY</label>

								<div class="col-md-8" style="color:red;">
									<input type="text" class="form-control" name="availability" value="<?php echo $row['availability']; ?>">	
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
	