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
			<div class="panel panel-primary">
				<div class="panel-heading">Lastest Comments</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Date</th>
								<th>Author</th>
								<th>Email</th>
								<th>Post</th>
								<th>Comments</th>
								<th>Status</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>18.3.2015</td>
								<td>F Torres</td>
								<td>Tores@yahoo.com</td>
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>								
								<td><a href="#" class="btn btn-warning btn-xs">Approve</a></td>
								<td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>
							<tr>
								<td>1</td>
								<td>18.3.2015</td>
								<td>F Torres</td>
								<td>Tores@yahoo.com</td>
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>	
								<td><a href="#" class="btn btn-warning btn-xs">Approve</a></td>
								<td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>
							<tr>
								<td>1</td>
								<td>18.3.2015</td>
								<td>F Torres</td>
								<td>Tores@yahoo.com</td>
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>	
								<td><a href="#" class="btn btn-warning btn-xs">Approve</a></td>
								<td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>
							<tr>
								<td>1</td>
								<td>18.3.2015</td>
								<td>F Torres</td>
								<td>Tores@yahoo.com</td>
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>			
								<td><a href="#" class="btn btn-warning btn-xs">Approve</a></td>
								<td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>
							<tr>
								<td>1</td>
								<td>18.3.2015</td>
								<td>F Torres</td>
								<td>Tores@yahoo.com</td>
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>		
								<td><a href="#" class="btn btn-warning btn-xs">Approve</a></td>
								<td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
	</div>
	
	<footer></footer>
</body>

<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="../../js/jquery.js"></script>
</html>