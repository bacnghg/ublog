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
		
		
		
		<!-- Post Line starts-->

		<div class="panel panel-default">
			<div class="panel-heading">Lastest Posts</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Date</th>								
								<th>Image</th>
								<th>Title</th>
								<th>Description</th>
								<th>Author</th>
								<th>Status</th>
								<th>Edit</th>
								<th>View</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>18.3.2015</td>
								<td><img src="../images/bob2.JPG" width="50px" alt=""></td>
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>
								<td>bob</td>
								<td>Draft</td>
								<td><a href="" class="btn btn-primary btn-xs navbar-btn">Edit</a></td>
								<td><a href="" class="btn btn-success btn-xs navbar-btn">View</a></td>
								<td><a href="" class="btn btn-danger btn-xs navbar-btn">Delete</a></td>
							</tr>
							<tr>
								<td>2</td>
								<td>18.3.2015</td>
								<td><img src="../images/bob2.JPG" width="50px" alt=""></td>
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>
								<td>bob</td>
								<td>publish</td>
								<td><a href="" class="btn btn-primary btn-xs navbar-btn">Edit</a></td>
								<td><a href="" class="btn btn-success btn-xs navbar-btn">View</a></td>
								<td><a href="" class="btn btn-danger btn-xs navbar-btn">Delete</a></td>
							</tr>
							<tr>
								<td>3</td>
								<td>18.3.2015</td>
								<td><img src="../images/bob2.JPG" width="50px" alt=""></td>
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>
								<td>bob</td>
								<td>publish</td>
								<td><a href="" class="btn btn-primary btn-xs navbar-btn">Edit</a></td>
								<td><a href="" class="btn btn-success btn-xs navbar-btn">View</a></td>
								<td><a href="" class="btn btn-danger btn-xs navbar-btn">Delete</a></td>
							</tr>
							<tr>
								<td>4</td>
								<td>18.3.2015</td>
								<td><img src="../images/bob2.JPG" width="50px" alt=""></td>
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>
								<td>bob</td>
								<td>publish</td>
								<td><a href="" class="btn btn-primary btn-xs">Edit</a></td>
								<td><a href="" class="btn btn-success btn-xs">View</a></td>
								<td><a href="" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>
							<tr>
								<td>5</td>
								<td>18.3.2015</td>
								<td><img src="../images/bob2.JPG" width="50px" alt=""></td>
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>
								<td>bob</td>
								<td>publish</td>
								<td><a href="" class="btn btn-primary btn-xs navbar-btn">Edit</a></td>
								<td><a href="" class="btn btn-success btn-xs navbar-btn">View</a></td>
								<td><a href="" class="btn btn-danger btn-xs navbar-btn">Delete</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		<div class="clearfix"></div>
		<div class="text-right">
			<ul class="pagination">
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">6</a></li>
				<li><a href="#">7</a></li>
				<li><a href="#">8</a></li>
			</ul>
		</div>
	</div>
	
	<footer></footer>
</body>

<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="../../js/jquery.js"></script>
</html>