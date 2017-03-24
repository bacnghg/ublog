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
</head>
<body>
	<?php include "includes/header.php"; ?>
	<?php include "includes/sidebar.php"; ?>
	<div class="col-lg-10">
		<div style="width:50px; height: 50px;"></div>
		<div class="page-header"><h1>New Category</h1></div>
		<div class="container-fluid">
			<form action="new_category.php" class="form-horizontal col-lg-5" method="post" enctype="multipard/form-data">
				<div class="form-group">
					<label for="category">Category</label>
					<input type="text" id="category" class="form-control">
				</div>				
				<div class="form-group">
					<input type="submit" name="submit_category" id="submit" class="btn btn-primary btn-block">
				</div>
			</form>
		</div>
		
	</div>

	<footer></footer>
	
 
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>