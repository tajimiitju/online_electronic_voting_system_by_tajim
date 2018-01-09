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
	<link rel="stylesheet" type="text/css" href="style.css" media="all">
	<link rel="stylesheet" type="text/css" href="process.css" media="all">
	
	<!-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"> -->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
	
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Diplomata+SC" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Merriweather" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">  	
	

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="admin/js/bootstrap.min.js"></script>
	
	
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
							<li ><a href="index.php">home</a></li>
							<li class="current"><a href="about.php">about</a></li>
							<!-- <li><a href="#">services</a>  -->
									
							<!-- 	<ul>
									
									<li><a href="#">add vote</a></li>
									<li><a href="#">validity of registration</a></li>
									<li><a href="#">re-registration services</a></li>
									<li><a href="#">Other services</a></li>
									
								</ul>
								
							</li> -->
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
				<div class="">
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
				</div>
				<div class="col-md-7 middle-area"> 
					<div class="content"> 
						
						<div class="address-area">
							<h2 class="text-center"><b>GET IN TOUCH</b></h2>
							<div class="row"> 

								<div class="col-md-offset-2 col-md-3"> 
									<a href="#"><i class="glyphicon glyphicon-map-marker"></i></a>
									<h5><b>ADDRESS</b></h5>
									<p>Jahangirnagar University</p>
									<p>Savar, Dhaka</p>
									
								</div>
								<div class="col-md-3"> 
									<a href="#"><i class="glyphicon glyphicon-earphone"></i></a>
									<h5><b>PHONE</b></h5>
									<p>EVS Management:</p>
									<b>+8801763026458</b>
									<b>+8801989758985</b>
									
									
								</div>
								<div class="col-md-3"> 
									<a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
									<h5><b>E-MAIL</b></h5>
									<email>evs.ju@gmail.com</email>
									<b>Website: www.evs.org</b>

									
								</div>
							</div>
						</div>
						<div class="text-center contact-form "> 
							<h2 class="text-center"><b>Message Us</b></h2>
							<form action="#"> 
								<div class="row"> 
									<div class="col-md-offset-3 col-md-3"> 
										<input class="form-control" type="text" placeholder="First Name">
									</div>
									<div class="col-md-3"> 
										<input class="form-control" type="text" placeholder="Last Name">
									</div>


								</div>
								<div class="row"> 
									<div class="col-md-offset-3 col-md-6"> 
										<input class="form-control" type="email" placeholder="Email Address">
									</div>
								</div>
								<div class="row"> 
									<div class="col-md-offset-3 col-md-6"> 
										<textarea  rows="7" cols="38" name="comment">Enter Your Comment Here..... </textarea>
									</div>
								</div>
								<div class="row"> 
									<div class="col-md-offset-7 col-md-2"> 
										<button class="btn btn-primary">Submit</button>
									</div>
								</div>
							</form>
						</div>
						
						
					</div>
				</div>
				<div class="col-md-2 right-area"> 
					<h4 class="welcome"> Welcome to Electronic Voting System!</h4>
					<img class="img-responsive" src="images/voting.jpg" alt="kbd" /><br />
					
					<a href="#" class="link">Contact Us</a>
					<a href="#" class="fb-icon"><i class="fa fa-twitter"></i></a>
					<a href="faq.php" class="link2">FAQ </a>
					
				
				</div>
				
			</div>
		</div>
	</div>
	<!-- content-area ends -->
	
	
	
	
	
	
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
			
			</div>
		</div>
	</div>
	<div class="footer-area2">
		<div class="copyright text-center"> 
			<p>EVS_IIT_JU &copy;  2017 &nbsp; |&nbsp; All rights reserved.</p>
		</div>
	</div>
	<!-- footer-area ends -->
	

		
					
	
					
</body>
</html>