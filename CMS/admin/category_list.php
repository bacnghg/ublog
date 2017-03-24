<?php	session_start();
	include '../includes/db.php';
	if(isset($_SESSION['user']) && isset($_SESSION['password']) == true){
		$sel_sql = "SELECT * FROM users WHERE user_email = '$_SESSION[user]' AND user_password = '$_SESSION[password]'";
		if($run_sql = mysqli_query($conn, $sel_sql)){
			if(mysqli_num_rows($run_sql) == 1){

			} else{
				header('Location:../index.php');
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
	
	<?php include "includes/sidebar.php"; ?>

		
		
		<!---Top Block end-->
		<!--- Users Area -->
		<div class="col-lg-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4>Categories</h4>
				</div>
				<div class="panel-body navbar-btn">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>S.NO</th>
								<th>Category Name</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Nature</td>
								<td><a href="#" class="btn btn-warning btn-xs">Edit</a></td>
								<td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Minion</td>
								<td><a href="#" class="btn btn-warning btn-xs">Edit</a></td>
								<td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Technology</td>
								<td><a href="#" class="btn btn-warning btn-xs">Edit</a></td>
								<td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>
							<tr>
								<td>4</td>
								<td>Art</td>
								<td><a href="#" class="btn btn-warning btn-xs">Edit</a></td>
								<td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>
							<tr>
								<td>5</td>
								<td>Blog</td>
								<td><a href="#" class="btn btn-warning btn-xs">Edit</a></td>
								<td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>	
		</div>

		
		<!-- Post Line starts-->

		
	</div>
	
	<footer></footer>
</body>

<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="../../js/jquery.js"></script>
</html>