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
	$error = 'text';
	if(isset($_POST['submit_post'])){
		$title = strip_tags($_POST['title']);
		$date = date('Y-m-d h:i:s');
		if(isset($_FILES['image'])){
			$image_name = $_FILES['image']['name'];
			$image_tmp = $_FILES['image']['temp_name'];
			$image_size = $_FILES['image']['size'];
			$image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
			$image_path = '../images/'.$image_name;
			$image_db_path = 'images/'.$image_name;

			if($image_size < 1000000){
				if($image_ext == 'jpg' || $image_ext = 'png' || $image_ext == 'gif'){
					if(move_uploaded_file($image_tmp, $image_path)){
						$ins_sql = "INSERT INTO post (title, description, image, category, date, author) VALUES ('$title', '$_POST[description]', 'image_db_path', '$_POST[category]', '$date', '$_SESSION[user]')";
						if(mysqli_query($conn, $ins_sql)){
							header('post_list.php');

						} else{
							$error =  '<div class="alert alert-danger">"The Querry was not working"</div>';
						}
					} else{
						$error = '<div class="alert alert-danger">"Sorry, Unfortunately Image hos not been uploaded!"</div>';
					}
				} else {
					$error = '<div class="alert alert-danger">"Image Format was not Correct!"</div>';
				}
			} else {
				$error = '<div class="alert alert-danger">"Image File Size is much bigger then Expect!"</div>';
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Panel</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	 <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
  	 <script>tinymce.init({ selector:'textarea' });</script>
  	 <script src="http://cloud.tinymce.com/stable/tinymce.min.js?apiKey=cd75e87f8kyb5s8dpx53oiiyp7ey9v4oqbkhvk2uwnakooao"></script>
</head>
<body>
	<?php include "includes/header.php"; ?>

	<?php echo $error; include "includes/sidebar.php"; ?>
	<div class="col-lg-10">
		<div style="width:50px; height: 50px;"></div>
		<div class="page-header"><h1>New Post</h1></div>
		<div class="container-fluid">
			<form action="new_post.php" class="form-horizontal" method="post" enctype="multipard/form-data">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="title" id="title" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="image">Upload Image</label>
					<input type="file" id="image" name="image" class="btn btn-primary">
				</div>
				<div class="form-group">
					<label for="category">Category</label>
					<select name="category" id="category" class="form-control" required>
						<option value="">Select any Category</option>
						<?php
							$sel_sql = "SELECT * FROM category";
							$run_sql = mysqli_query($conn, $sel_sql);
							while($rows = mysqli_fetch_assoc($run_sql)){
								if($rows['category_name'] == 'home'){
									continue;
								}
								echo '<option value="' .$rows['category_name'].'">'. ucfirst($rows['category_name']).'</option>';
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea id="description" name="description" required>Check out</textarea>
				</div>
				<div class="form-group">
					<label for="status">Status</label>
					<select name="status" id="status" class="form-control">
						<option value=""></option>
						<option value="draft">Draft</option>
						<option value="publish">Publish</option>
					</select>
				</div>
				<div class="form-group">
					<label for="submit"></label>
					<input type="submit_post" id="submit" class="btn btn-primary btn-block">
				</div>
			</form>
		</div>
		
	</div>

	<footer></footer>
	
 
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>