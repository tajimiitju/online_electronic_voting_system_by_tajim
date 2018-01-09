<?php
	//Start session
	session_start();
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['NAME']);
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta data -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="This is a online voting website in Bangladesh. We are providing easiest online service for election." >
	<meta name="keywords" content="Online voting system, electronic voting system, electronic voting system in Bangladesh" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Nazifa Tabassum Mina">
	
	<!-- style sheets -->
	<link rel="stylesheet" type="text/css" href="admin/css/bootstrap.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="admin/css/font-awesome.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="admin/css/normalize.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all">
	<link rel="stylesheet" type="text/css" href="process.css" media="all">
	
	<!-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"> -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon2.png" />
	
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Diplomata+SC" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Merriweather" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">  	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="admin/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	
	
	<title>EVS | Electronic Voting System</title>
	<script type="text/javascript">
	  jQuery(document).ready(function($) {
	    $('a[rel*=facebox]').facebox({
	      loadingImage : 'admin/images/loading.gif',
	      closeImage   : 'admin/images/closelabel.png'
	    })
	  })
	</script>
</head>
<body>
	<!-- header-area starts -->
	<div class="header-area"> 
		<div class="logo-menu">
			<div class="container"> 
				<div class="row ">
					
					<div class="logo-area col-md-2"> 
						<a href="#"><h1>EVS</h1></a>
						<p>Electronic Voting System</p>
					</div>
					<div class="menu col-md-offset-1 col-md-7"> 
						<ul>
							<li class="current"><a href="index.php">home</a></li>
							<li><a href="about.php">about</a></li>
						
							<li><a href="voting.php">Vote</a></li>
							<li><a href="#">voter registration</a> 
								<ul>
									<li><a href="process.php">registration process</a></li>
									<!-- <li><a href="register.php">registration form</a></li> -->
								</ul>
							</li>
							<li><a href="result.php">result</a></li>
						</ul>
					</div>
										
					<div class="input-group search col-md-2">
						<input type="text" class="form-control" placeholder="Search">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="button">Go</button>
						</span>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<!-- header-area ends -->
	
	<!-- content-area starts -->
	<div class="content-area"> 
		<div class="container"> 
			<div class="row"> 
				
					<div class="col-md-offset-1 col-md-2 left-area ">
						<div class="commission">
							<div class="title">
								<h5 class="text-capitalize">online election commission</h5>
							</div>
							<div class="lists">
								<ul class="text-capitalize ">
									<li><a href="#">election statistics</a></li>
									<li><a href="laws.php">laws and prcedures</a></li>
									<li><a href="#">video gallary</a></li>
									<li><a href="#">research</a></li>
									<li><a href="#">newsletter</a></li>
									
								</ul>
							</div>
						</div>
						<div class="observation">
							<div class="title">
								<h5 class="text-capitalize ">online election observation</h5>
							</div>
							<div class="lists">
								<ul class="text-capitalize">
									<li><a href="#">online election ovservation policy</a></li>
									<li><a href="#">observer forms</a></li>
									<li><a href="#">observer lists</a></li>
									<li><a href="laws.php">election laws</a></li>
									
								</ul>
							</div>
						</div>
					</div>
				
				<div class="col-md-7 middle-area"> 
					<!-- <div class="container"> -->
						<div class="content content-slider img-responsive"> 
							<!-- <h1 class="text-capitalize text-center">electronic voting system</h1> -->
													
							
								
							
								
							
							
						</div>
					<!-- </div> -->
				</div>
				<div class="col-md-2 right-area"> 
					<h4 class="welcome"> Welcome to Electronic Voting System!</h4>
					<a href="voting.php"><img class="img-responsive" src="images/voting.jpg" alt="kbd" /></a><br />
					
					<a href="contact.php" class="link">Contact Us</a>
					<a href="#" class="fb-icon"><i class="fa fa-twitter"></i></a><br>
					<a href="faq.php" class="link2">FAQ </a>
					
				
				</div>
				
			</div>
		</div>
	</div>
	<!-- content-area ends -->
	
	
	<!-- question-area starts -->
	<!-- <div class="question-area"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-offset-2 col-md-9 question"> 
					<h2>FAQ (Frequently Asked Question)</h2>
					
				</div>
			</div>
		</div>
	</div> -->
	<!-- question-area ends -->
	
	
	
	<!-- footer-area starts -->
	<div class="footer-area1"> 
		<div class="container"> 
			<div class="footer-menu"> 
				<ul class="text-capitalize list-inline text-center">
					<li><a href="index.php">home</a></li>
					<li><a href="contact.php">contact</a></li>
					<li><a href="about.php">about us</a></li>
					<li><a href="faq.php">help</a></li>
					<li><a href="laws.php">terms & codition</a></li>
					<li><a href="#">privacy</a></li>
				</ul>
			</div>
			<div class="social-area text-center"> 
				<ul class="list-unstyled list-inline">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					
				</ul>
				<!-- <nav class="social-icons text-center"> -->
					<!-- <ul class="text-center"> -->
						<!-- <li class="twitter"><a href="#"></a></li> -->
						<!-- <li class="facebook"><a href="#"></a></li> -->
						<!-- <li class="google-plus"><a href="#"></a></li> -->
						<!-- <li class="linkedin"><a href="#"></a></li> -->
					<!-- </ul> -->
				<!-- </nav> -->
			</div>
		</div>
	</div>
	<div class="footer-area2">
		<div class="copyright text-center"> 
			<p>EVS_IIT_JU &copy;  2017 &nbsp; |&nbsp; All rights reserved.</p>
		</div>
	</div>
	<!-- footer-area ends -->
	
	
		
	 <script type="text/javascript" src="js/jquery.js"> </script>
	 <script type="text/javascript" src="js/jquery.backstretch.js"> </script>
	 <script type="text/javascript" src="js/custom.js"> </script>				
	   
	
					
</body>
</html>