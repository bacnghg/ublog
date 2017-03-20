<?php 
include '../includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
	
</head>
<body>
	<?php include "includes/header.php";?>
	<!--<div style="width:50px; height:50px"></div> -->
	
	<?php include "includes/sidebar.php"; ?>
	<div class="col-lg-10">

		<!---Top Block end-->
		<!--- Users Area -->

		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="col-md-3">
						<img src="../images/bob.jpg" width="100%"" class="img-thumbnail">
					</div>
					<div class="col-md-7">
						<h3><u>King Bob</u></h3>
						<p><i class="glyphicon glyphicon-heart"></i>	Web Developer</p>
						<p><i class="glyphicon glyphicon-road"></i> 	Hai Ba Trung street, Ha Noi</p>
						<p><i class="glyphicon glyphicon-phone"></i> 	0985641269</p>
						<p><i class="glyphicon glyphicon-envelope"></i> 	nhb.fit.hut@gmail.com</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>	
		</div>
		
		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-condensed">
						<tbody>
							<tr>
								<th>Gender</th>
								<td>Male</td>
							</tr>
							<tr>
								<th>Marital Status</th>
								<td>Single</td>
							</tr>
							<tr>
								<th>Offical Website</th>
								<td>abc.com.vn</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
				<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-condensed">
						<tbody>
							<tr>
								<td width="10%">1</td>
								<td>
								<a href="#">The First Post</a></td>
							</tr>
							<tr>
								<td width="10%">2</td>
								<td>
								<a href="#">The First Post</a></td>
							</tr>
							<tr>
								<td width="10%">3</td>
								<td><a href="#">The First Post</a></td>
								
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>About me</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillu...</p>
				</div>
			</div>
		</div>
			
	</div>
	
	<footer></footer>
</body>

<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="../../js/jquery.js"></script>
</html>