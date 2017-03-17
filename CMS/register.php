<?php include 'includes/db.php';
	$match = '';
	if(isset($_POST['submit_register'])){
		if($_POST['password'] == $_POST['con_password']){
		$date = date('Y-m-d h:i:s');
		$ins_sql = "INSERT INTO users (user_f_name, user_l_name, user_email, user_password, user_gender, user_marital_status, user_mobile, user_designation, user_website, user_address, user_about_me, user_date) VALUES('$_POST[first_name]', '$_POST[last_name]', '$_POST[email]', '$_POST[password]', '$_POST[gender]', '$_POST[marital_status]', '$_POST[mobile]', '$_POST[designation]', '$_POST[website]', '$_POST[address]', '$_POST[about_me]', '$date')";
		$run_sql = mysqli_query($conn, $ins_sql);			
	} else {
		$match = '<div class="alert alert-danger">Password doesn&apos;t match! </div>';
	}

		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contacts Us</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="includes/asset/styles.css">
	
</head>
<body>
	<?php 
		include 'includes/header.php';
	?>
	<?php
		if(isset($_POST['submit_register'])){
			echo '
						<div class="container">
							<div class="panel-body">
								<h4>Thanks for Register. Welcome to CMS System.</h4>
								
								
							</div>
						</div>
					 ';
					  if($_SESSION['timeout'] + 5 < time()){
					  	header("Location: index.php");
					  }
					  
					} else{
						echo '
						<div class="container">
							<article class="row">
								<section class="col-lg-8">
									<div class="page-header">
										<h2>Form Register</h2>
									</div>
									<?php echo $match; ?>
									<form class="form-horizontal" action="register.php" method="post" role="form">
										<div class="form-group">
											<label for="first_name"  class="control-label col-sm-3">First Name *</label>
											<div class="col-sm-8">
												<input type="text" id="first_name" class="form-control" value="" placeholder="Full Name" name="first_name" required>
											</div>
										</div>
										<div class="form-group">
											<label for="name"  class="control-label col-sm-3">Last Name *</label>
											<div class="col-sm-8">
												<input type="text" id="last_name" class="form-control" value="" placeholder="Full Name" name="last_name" required>
											</div>
										</div>
										<div class="form-group">
											<label for="email" class="control-label col-sm-3" role="form">Email *</label>
											<div class="col-sm-8">
												<input type="email" id="email" name="email" class="form-control" value="" placeholder="Input Email Adresss" required>
											</div>
										</div>
										<div class="form-group">
											<label for="password" class="control-label col-sm-3" role="form">Password *</label>
											<div class="col-sm-8">
												<input type="password" id="password" name="password" class="form-control" value="" placeholder="Input Password" required>
											</div>
										</div>			
										<div class="form-group">
											<label for="con_password" class="control-label col-sm-3">Confirm Password *</label>
											<div class="col-sm-8">
												<input type="password" id="con_password" name="con_password" class="form-control" value="" placeholder="Re-input Password" required>
											</div>
										</div>
										
										<div class="form-group">
											<label for="gender" class="control-label col-sm-3">Gender</label>
											<div class="col-sm-3">
												<select name="gender" id="gender" class="form-control">
													<option value="">Select Gender</option>
													<option value="male">Male</option>
													<option value="female">Female</option>
													<option value="other">Other</option>}
													option
												</select>
											</div>					
											<label for="marital_status" class="control-label col-sm-2">Marital Status</label>
											<div class="col-sm-3">
												<select name="marital_status" id="marital_status" class="form-control">
													<option value="">Select Status</option>
													<option value="single">Single</option>
													<option value="married">Married</option>
													<option value="divorced">Divorced</option>
													<option value="other">Other</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="mobile" class="control-label col-sm-3">Mobile</label>
											<div class="col-sm-8">
												<input type="number" id="mobile" name="mobile" class="form-control" value="" placeholder="Input Mobile" >
											</div>
										</div>
										<div class="form-group">
											<label for="designation" class="control-label col-sm-3">Designation *</label>
											<div class="col-sm-8">
												<input type="text" name="designation" class="form-control" placeholder="Input your Designation">
											</div>
										</div>
										<div class="form-group">
											<label  for="address" class="control-label col-sm-3">Address *</label>
											<div class="col-sm-8">
												<textarea name="address" id="address" class="form-control"></textarea>
											</div>
										</div>
										<div class="form-group">
											<label  for="about_me" class="control-label col-sm-3">About me *</label>
											<div class="col-sm-8">
												<textarea name="about_me" id="about_me" class="form-control"></textarea>
											</div>
										</div>
										<div class="form-group">
											<label  class="control-label col-sm-3">Website</label>
											<div class="col-sm-8">
												<input type="text" name="website" id="ưebsite" class="form-control" value="" placeholder="Website">
											</div>
										</div>	
										<div class="form-group">
											<label for="" class="control-label col-sm-3"></label>
											<div class="col-sm-8">
												<input type="submit" class="btn btn-primary btn-block" value="Register" name="submit_register">
											</div>
										</div>
									</form>					
								</section>
								<?php include "includes/sidebar.php" ?>
							</article>
						</div>
			';
		}
	?>
	<div style="width:50px; height: 50px"></div>
	<?php include 'includes/footer.php' ?>

	
</body>
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>