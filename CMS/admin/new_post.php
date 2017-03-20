<?php include "../includes/db.php"; ?>
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
	<?php include "includes/sidebar.php"; ?>
	<div class="col-lg-10">
		<div style="width:50px; height: 50px;"></div>
		<div class="page-header"><h1>New Post</h1></div>
		<div class="container-fluid">
			<form action="new_post.php" class="form-horizontal" method="post" enctype="multipard/form-data">
				<div class="form-group">
					<label for="title">Title</label>
					<input type="title" id="title" class="form-control">
				</div>
				<div class="form-group">
					<label for="image">Upload Image</label>
					<input type="file" id="image" name="image" class="btn btn-primary">
				</div>
				<div class="form-group">
					<label for="category">Category</label>
					<select name="category" id="category" class="form-control">
						<option value=""></option>
						<option value="nature">Nature</option>
						<option value="minion">Minion</option>
					</select>
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea id="description" name="description">Check out</textarea>
				</div>
				<div class="form-group">
					<label for="status">Status</label>
					<select name="status" id="status" class="form-control">
						<option value=""></option>
						<option value="publish">Publish</option>
						<option value="draft">Draft</option>
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