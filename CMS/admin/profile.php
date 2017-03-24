<?php	session_start();
	include '../includes/db.php';
	if(isset($_SESSION['user']) && isset($_SESSION['password']) == true){
		$sel_sql = "SELECT * FROM users WHERE user_email = '$_SESSION[user]' AND user_password = '$_SESSION[password]'";
		if($run_sql = mysqli_query($conn, $sel_sql)){
			while($rows = mysqli_fetch_assoc($run_sql)){
				$user_f_name = $rows['user_f_name'];
				$user_l_name = $rows['user_l_name'];
				$user_gender = $rows['user_gender'];
				$user_marital_status = $rows['user_marital_status'];
				$user_email = $rows['user_email'];
				$user_mobile = $rows['user_mobile'];
				$user_designation = $rows['user_designation'];
				$user_website = $rows['user_website'];
				$user_address = $rows['user_address'];
				$user_about_me = $rows['user_about_me'];
				if(mysqli_num_rows($run_sql) == 1){
					if($rows['role'] == 'admin'){

					} else {
						header('Location:../index.php');
					}
				} else{
					header('Location:../index.php');
				}
			}
			
		}
	} else{
		header('Location:../index.php');
	}
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
						<h3><u><?php echo $user_f_name . ' ' . $user_l_name; ?></u></h3>
						<p><i class="glyphicon glyphicon-heart"></i>	<?php echo $user_designation;?></p>
						<p><i class="glyphicon glyphicon-road"></i> 	<?php echo $user_address; ?></p>
						<p><i class="glyphicon glyphicon-phone"></i> 	<?php echo $user_mobile; ?></p>
						<p><i class="glyphicon glyphicon-envelope"></i> 	<?php echo $_SESSION['user'];?></p>
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
								<td><?php echo ucfirst($user_gender);?></td>
							</tr>
							<tr>
								<th>Marital Status</th>
								<td><?php echo ucfirst($user_marital_status); ?></td>
							</tr>
							<tr>
								<th>Offical Website</th>
								<td><?php echo ucfirst($user_website);?></td>
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
					<p><?php echo ucfirst($user_about_me);?></p>
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