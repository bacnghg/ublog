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
	<header id="header" class="navbar navbar-default navbar-static-top">
		<div class="container">
			<a href="index.php" class="navbar-brand">CMS System</a>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home</a></li>
				<li><a href="">Log Out</a></li>
			</ul>
		</div>		
	</header><!-- /header -->
	<!--<div style="width:50px; height:50px"></div> -->
	<div class="col-lg-2">
		<ul class="navbar navbar-default nav" style="height:650px">
			<li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a></li>
			<li><a href="#new-items" data-toggle="collapse"><i class="glyphicon glyphicon-plus"></i> New Items</a>
				<ul class="nav collapse" id="new-items">
					<li><a href="#"><div class="col-sm-1"></div><i class="glyphicon glyphicon-pencil"></i> New Post</a></li>
					<li><a href="#"><div class="col-sm-1"></div><i class="glyphicon glyphicon-edit"></i> New Category</a></li>
				</ul>
			</li>
			<li><a href="#"><i class="glyphicon glyphicon-list"></i> Post</a></li>
			<li><a href="#"><i class="glyphicon glyphicon-tasks"></i> Categories</a></li>
			<li><a href="#"><i class="glyphicon glyphicon-comment"></i> Comments</a></li>
			<li><a href="#"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
		</ul>
	</div>

	<div class="col-lg-10">
		<div class="col-md-3">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3"><i class="glyphicon glyphicon-signal" style="font-size:4.5em"></i></div>
						<div class="col-xs-9 text-right">
							<div style="font-size:2.5em">20</div>
							<div>Post</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<div class="pull-left">View Post</div>
						<div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-left"></i></div>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

		<div class="col-md-3">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3"><i class="glyphicon glyphicon-th-list" style="font-size:4.5em"></i></div>
						<div class="col-xs-9 text-right">
							<div style="font-size:2.5em">5</div>
							<div>Categories</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<div class="pull-left">View Categories</div>
						<div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3"><i class="glyphicon glyphicon-user" style="font-size:4.5em"></i></div>
						<div class="col-xs-9 text-right">
							<div style="font-size:2.5em">5</div>
							<div>User</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<div class="pull-left">View User</div>
						<div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></div>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>

		<div class="col-md-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3"><i class="glyphicon glyphicon-comment" style="font-size:4.5em"></i></div>
						<div class="col-xs-9 text-right">
							<div style="font-size:2.5em">20</div>
							<div>Comments</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<div class="pull-left">View Comments</div>
						<div class="pull-right"><i class="glyphicon glyphicon-circle-arrow-left"></i></div>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="clearfix"></div>

		<!---Top Block end-->
		<!--- Users Area -->
		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4>Users List</h4>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>S.NO</th>
								<th>Name</th>
								<th>Role</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>King Bob</td>
								<td>Admin</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Bob</td>
								<td>Smod</td>
							</tr>
							<tr>
								<td>3</td>
								<td>J Bob</td>
								<td>Admin</td>
							</tr>
							<tr>
								<td>4</td>
								<td>KBob</td>
								<td>Smod</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>	
		</div>

		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4>Profile</h4>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>S.NO</th>
								<th>Name</th>
								<th>Role</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>King Bob</td>
								<td>Admin</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Bob</td>
								<td>Smod</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>	
		</div>
		<div class="clearfix"></div>
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
							</tr>
							<tr>
								<td>2</td>
								<td>18.3.2015</td>
								<td><img src="../images/bob2.JPG" width="50px" alt=""></td>
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>
								<td>bob</td>
							</tr>
							<tr>
								<td>3</td>
								<td>18.3.2015</td>
								<td><img src="../images/bob2.JPG" width="50px" alt=""></td>
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>
								<td>bob</td>
							</tr>
							<tr>
								<td>4</td>
								<td>18.3.2015</td>
								<td><img src="../images/bob2.JPG" width="50px" alt=""></td>
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>
								<td>bob</td>
							</tr>
							<tr>
								<td>5</td>
								<td>18.3.2015</td>
								<td><img src="../images/bob2.JPG" width="50px" alt=""></td>
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>
								<td>bob</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel panel-default">
			<div class="panel-heading">Lastest Posts</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>S.No</th>
								<th>Date</th>
								<th>Author</th>
								<th>Email</th>
								<th>Post</th>
								<th>Comment</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>18.3.2015</td>
							
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>
								<td>bob</td>
							</tr>
							<tr>
								<td>2</td>
								<td>18.3.2015</td>
								
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>
								<td>bob</td>
							</tr>
							<tr>
								<td>3</td>
								<td>18.3.2015</td>
								
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>
								<td>bob</td>
							</tr>
							<tr>
								<td>4</td>
								<td>18.3.2015</td>
								
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>
								<td>bob</td>
							</tr>
							<tr>
								<td>5</td>
								<td>18.3.2015</td>
								
								<td>The First Post</td>
								<td>This is a comment. Lorem is a backgroud page</td>
								<td>bob</td>
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