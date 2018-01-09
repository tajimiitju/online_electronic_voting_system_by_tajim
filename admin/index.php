<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>EVS | Electronic Voting System</title>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="This is a online voting website in Bangladesh. We are providing easiest online service for election." >
	<meta name="keywords" content="Online voting system, electronic voting system, electronic voting system in Bangladesh" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Nazifa Tabassum Mina">
	
	<!-- style sheets -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all">
	<link rel="stylesheet" type="text/css" href="admin.css" media="all">
	
	
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Diplomata+SC" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Merriweather" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">  
	
	<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
		
	<!-- header-area starts -->
	<div class="header-area" id="top"> 
		<div class="logo-menu">
			<div class="container"> 
				<div class="row ">
					
					<div class="logo-area col-md-2"> 
						<a href="#"><h1>EVS</h1></a>
						<p>Electronic Voting System</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<!-- header area ends -->
	
	<div class="admin-login"> 
		<div class="container"> 
			<form method="POST" action="connection/login.php">
				<div class="row">
					
					<b class="col-md-offset-3 col-md-6"><i class="fa fa-unlock-alt" aria-hidden="true"></i> &nbsp; Please enter your login details.</b>
					
				</div>
				<div class="row">
					<div class="col-md-offset-3 col-md-6">
						<hr />
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-offset-3 col-md-6 ">
						<label for="username" >Username</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" name="username" class="form-control" placeholder="Username" id="username" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-3 col-md-6">
						<hr />
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-offset-3 col-md-6 ">
						<label for="password" >Password</label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
							<input type="password" name="password" class=" form-control" placeholder="Password" />
						</div>
					</div>
				
				</div>
				<div class="row"> 
					<div class="col-md-offset-3 col-md-3">
						<a href="#">Forgotten Password?</a>
					</div>
					<div class="col-md-offset-2 col-md-3"> 
						<input type="submit" value="Login" name="submit" class="btn btn-primary">
					</div>
				</div>
		
			</form>
		</div>
	</div>
<?php 
	include 'footer.php';
?>