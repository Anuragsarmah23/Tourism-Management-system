<?php
	session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width,initial-scale=1.0" name="viewport">
		<title>USER|TAMS</title>
		
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
		<link rel="icon" href="img/logo.png">
		<link href="css/bootstrap.min.css" rel="stylesheet" >
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="css/animate.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.bootstrap4.min.css" rel="stylesheet">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-2.1.0.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
		<script src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
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
							$uid=$_SESSION['uid'];
							$q="select * from user where id='$uid'";
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
					<a href="index.php" class="side-link"><i class="fa fa-dashboard"></i><span class="ml-3">HOME</span></a>
				</li><hr style="border-color:grey;">
				<li class="side-item">
					<a href="bookings.php" class="side-link active"><i class="fa fa-ticket"></i><span class="ml-3">BOOKINGS</span></a>
				</li><hr style="border-color:grey;">
			</ul>
		</div>
		<div style="margin-left:16vw;padding-top:78px;margin-right:1vw;">
			<div class="p-4 text-light" style="background:rgba(0,0,0,0.5);min-height:88vh;">
			<div class="row bg-transparent text-light mx-2 p-3" style="border:1px solid black;">
				<span class="mr-auto">MY BOOKINGS</span>
			</div><br>
			<?php
				//Radhe
				$con=mysqli_connect("localhost","root","","tams");
				if(!$con)
					die("Error");
				$q="select * from bookings where userID='$_SESSION[uid]'";
				$q_run=mysqli_query($con,$q);
				$rows=mysqli_num_rows($q_run);
				if($rows > 0){
			?>
				<table id="userList" class="table table-striped table-bordered bg-transparent text-light" style="width:100%">
				
					<thead>
						<tr>
							<th>BOOKING ID</th>
							<th>PACKAGE NAME</th>
							<th>BOOKING DATE</th>
							<th>TOUR START DATE</th>
							<th>TOUR END DATE</th>
							<th>TOTAL PERSON</th>
							<th>TOTAL AMOUNT(Rs. )</th>
							<th>STATUS</th>
							<th>CANCEL</th>
						</tr>
					</thead>
					<tbody>
					<?php
						while($row=mysqli_fetch_assoc($q_run)){
							$q1="select name from packages where id='$row[packageID]'";
							$q1_run=mysqli_query($con,$q1);
							$row1=mysqli_fetch_assoc($q1_run);
					?>
						<tr>
							<td><?php echo $row["id"]; ?></td>
							<td><?php echo $row1["name"]; ?></td>
							<td><?php echo $row["bookingDate"]; ?></td>
							<td><?php echo $row["startDate"]; ?></td>
							<td><?php echo $row["endDate"]; ?></td>
							<td><?php echo $row["totalPerson"]; ?></td>
							<td><?php echo $row["totalAmount"]; ?></td>
							<td><?php echo $row["status"]; ?></td>
							<?php if($row["status"] != "confirmed"){ ?>
							<td><a href="cancelTour.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger"><i class="fa fa-times"></i> Cancel</a></td>
							<?php }else{ ?>
							<td><a class="btn" style="cursor:no-drop;background:#a1a2a3;"><i class="fa fa-times"></i> Cancel</a></td>
							<?php } ?>
						</tr>	
					<?php
						}
					?>	
					</tbody>
					
				</table>
			<?php
				}else{
					echo "<b>No records to display</b>";
				}
			?>	
			</div>
		</div>
		
		<script>
			$(document).ready(function() {
				$('#userList').DataTable({
					scrollX:true,
				});
			} );
		</script>

	</body>
	
</html>