<?php
	require_once('auth.php');
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
	
	
	<title>WELCOME <?php echo $_SESSION['NAME']; ?></title>
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
							<li><a href="#">about</a></li>
							
							<li><a href="voting.php">voting</a></li>
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
									<li><a href="#">laws and prcedures</a></li>
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
									<li><a href="#">election laws</a></li>
									<li><a href="#">election laws</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-7 middle-area"> 
					<div class="content"> 
						<h1 class="text-capitalize text-center">electronic voting system</h1>
						
						<!-- vote -->
						
<?php
include('admin/connection/connect.php');
$dsdsss='Senator';
$sadsdsd = $db->prepare("SELECT count(*) FROM candidates WHERE position= :a");
	$sadsdsd->bindParam(':a', $dsdsss);
	$sadsdsd->execute();
	$rowaas = $sadsdsd->fetch(PDO::FETCH_NUM);
	$wapakpak=$rowaas[0];
?>

<style class="csscreations">

/*basic reset*/
* {margin: 0; padding: 0;}

html {
	height: 100%;
	background: #ffffff;
}

body {
	font-family: montserrat, arial, verdana;
}
/*form styles*/
#msform {
	width: 600px;
	margin: 50px auto;
	text-align: center;
	position: relative;
	margin-top: 25px;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	text-align: left;
	
	-moz-box-sizing: border-box;
	width: 100%;
	
	/*stacking fieldsets above each other*/
	position: absolute;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea, #msform select {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	-moz-box-sizing: border-box;
	color: #2C3E50;
	font-size: 13px;
}
/*buttons*/
#msform .action-button {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
#msform #submit {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform #submit:hover, #msform #submit:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
	width: 100%;
	text-align: center;
}
#progressbar li {
	list-style-type: none;
	color: white;
	text-transform: uppercase;
	font-size: 9px;
	width: 9.1%;
	float: left;
	position: relative;
	text-align: center;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
}
#logo {
	margin: 25px auto;
	width: 500px;
}
#logo img {
	float: left;
}
.clearfix {
	clear: both;
}
#logo span {
	display: inline-block;
    font-size: 17px;
    vertical-align: middle;
	margin-top: 34px;
	color: #000000;
}



</style>
<script type="text/javascript">
// function UpdateCost() {
//   var sum = 0;
//   var gn, elem;
//   for (i=0; i<<?php echo $wapakpak ?>; i++) {
//     gn = 'sum_m_'+i;
//     elem = document.getElementById(gn);
//     if (elem.checked == true) { sum += 1; }
// 	//if (elem.checked == true) { sum += Number(elem.value); }
//   }
//   document.getElementById('totalcost' ).value = sum.toFixed(0);
// }
// window.onload=UpdateCost
 </script>
 <script type="text/javascript">
// function sapatka() {
// var y=document.forms["joe"]["sen"].value;
// if ((y > 12))
//   {
//   alert("you must select Only 12 senators");
//   return false;
//   }
// }
</script>

	<!-- multistep form -->
<form id="msform" name="joe" action="preview.php" method="POST" onsubmit="return sapatka()">
	<!-- progressbar -->
	
	<!-- fieldsets -->
	<?php
	$resultasa = $db->prepare("SELECT * FROM position");
		$resultasa->execute();
		for($i=0; $rowasa = $resultasa->fetch(); $i++){
		$exrxrxrx=$rowasa['name'];
		$candidate = str_replace(" ", "", $exrxrxrx);
		// if($exrxrxrx=='President'){
		?>
		
	<fieldset>
		<h2 class="fs-title"><?php echo $rowasa['name'] ?></h2>
		<h3 class="fs-subtitle">Pls. Select Only One</h3> 
		<select name="<?php echo $candidate; ?>">
		<option value="No Candidate">Pls. Select <?php echo $rowasa['name'] ?></option>
		<?php
		$dsds=$rowasa['name'];
		$results = $db->prepare("SELECT * FROM candidates WHERE position= :a");
			$results->bindParam(':a', $dsds);
			$results->execute();
			for($j=0; $rows = $results->fetch(); $j++){
				?>
				<option value="<?php echo $rows['name'] ?>"><?php echo $rows['name'] ?> - <?php echo $rows['party'] ?></option>
				<?php
			}
		?>
		</select>
		<?php if($i != 0){
			echo '<input type="button" value="Previous" class="previous action-button" name="previous">';
			} ?>		
		<input type="button" value="Next" class="next action-button" name="next">
	
	</fieldset>
	<?php
	// }
	/*
	if(($exrxrxrx!='President') AND ($exrxrxrx!='Senator') AND ($exrxrxrx!='Representative')){
	?>
	<fieldset>
		<h2 class="fs-title"><?php echo $rowasa['name'] ?></h2>
		<h3 class="fs-subtitle">Pls. Select Only One</h3>
		<select name="<?php echo $rowasa['name'] ?>" style="height: 51px;">
		<option value="0">Pls. Select <?php echo $rowasa['name'] ?></option>
		<?php
		include('admin/connection/connect.php');
		$dsds=$rowasa['name'];
		$results = $db->prepare("SELECT * FROM candidates WHERE position= :a");
			$results->bindParam(':a', $dsds);
			$results->execute();
			for($i=0; $rows = $results->fetch(); $i++){
				?>
				
				<option style="padding: 35px 50px 35px 80px; background:url('admin/candidates/<?php echo $rows['image']; ?>')  no-repeat scroll 5px 7px / 70px auto rgba(0, 0, 0, 0);" value="<?php echo $rows['name'] ?>"><?php echo $rows['name'] ?> - <?php echo $rows['party'] ?></option>
				
				<?php
			}
		?>
		</select>
		<input type="button" value="Previous" class="previous action-button" name="previous">
		<input type="button" value="Next" class="next action-button" name="next">
	</fieldset>
	<?php
	}
	if($exrxrxrx=='Senator'){
	?>
	<fieldset>
		<h2 class="fs-title">Senator</h2>
		<h3 class="fs-subtitle">Pls. Select Only 12 <span id="payment-total"></span></span>
		</h3>
		<?php
		$dsds=$rowasa['name'];
		$results = $db->prepare("SELECT * FROM candidates WHERE position= :a");
			$results->bindParam(':a', $dsds);
			$results->execute();
			for($i=0; $rows = $results->fetch(); $i++){
		?>
		<div style="height: 64px; padding-top: 10px; padding-bottom: 10px;"><INPUT TYPE="checkbox" NAME="votes[]" value="<?php echo $rows['name'] ?>" id="sum_m_<?php echo $i ?>" onclick="UpdateCost()" style="width: 21px;">
		<img src="admin/candidates/<?php echo $rows['image']; ?>" width="70" height="70" style="margin-bottom: -26px;" /><?php echo $rows['name']; ?> - <?php echo $rows['party']; ?></div>
		<?php
		}
		?>
		<input type="button" value="Previous" class="previous action-button" name="previous">
		<input type="button" value="Next" class="next action-button" name="next" onclick="sapatka()">
		<input type="hidden" name="sen" id="totalcost" value="">
	</fieldset>
	<?php
	}
	if($exrxrxrx=='Representative'){
	?>
	<fieldset>
		<h2 class="fs-title"><?php echo $rowasa['name'] ?></h2>
		<h3 class="fs-subtitle">Pls. Select Only One</h3>
		<select name="<?php echo $rowasa['name'] ?>" style="height: 51px;">
		<option value="0">Pls. Select <?php echo $rowasa['name'] ?></option>
		<?php
		include('admin/connection/connect.php');
		$dsds=$rowasa['name'];
		$faunc=$_SESSION['SESS_COURSE'];
		$results = $db->prepare("SELECT * FROM candidates WHERE position= :a AND course= :b");
			$results->bindParam(':a', $dsds);
			$results->bindParam(':b', $faunc);
			$results->execute();
			for($i=0; $rows = $results->fetch(); $i++){
				?>
				
				<option style="padding: 35px 50px 35px 80px; background:url('admin/candidates/<?php echo $rows['image']; ?>')  no-repeat scroll 5px 7px / 70px auto rgba(0, 0, 0, 0);" value="<?php echo $rows['name'] ?>"><?php echo $rows['name'] ?> - <?php echo $rows['party'] ?></option>
				
				<?php
			}
		?>
		</select>
		<input type="button" value="Previous" class="previous action-button" name="previous">
		<input type="button" value="Next" class="next action-button" name="next">
	</fieldset>
	<?php
	}*/
	}
	?>
	<fieldset>
		<h2 class="fs-title">You Are now About to Submit your votes</h2>
		<input type="button" value="Previous" class="previous action-button" name="previous">
		<input type="submit" value="Submit" name="submit" id="submit">
	</fieldset>
</form>
<!-- jQuery -->
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<!-- jQuery easing plugin -->
<script type="text/javascript" src="jquery.easing.min.js"></script><script>//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})
</script>
				<!-- vote -->
						
					</div>
				</div>
				<div class="col-md-2 right-area"> 
					<h4 class="welcome"> Welcome to Electronic Voting System!</h4>
					<img class="img-responsive" src="images/voting.jpg" alt="kbd" /><br />
					
					<a href="#" class="link">Contact Us</a>
					<a href="#" class="fb-icon"><i class="fa fa-twitter"></i></a>
					
				
				</div>
				
			</div>
		</div>
	</div>
	<!-- content-area ends -->
	
	
	<!-- question-area starts -->
	<div class="question-area"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-offset-2 col-md-9 question"> 
					<h2>FAQ (Frequently Asked Question)</h2>
					
				</div>
			</div>
		</div>
	</div>
	<!-- question-area ends -->
	
	
	
	<!-- footer-area starts -->
	<div class="footer-area1"> 
		<div class="container"> 
			<div class="footer-menu"> 
				<ul class="text-capitalize list-inline text-center">
					<li><a href="#">home</a></li>
					<li><a href="#">contact</a></li>
					<li><a href="#">about us</a></li>
					<li><a href="#">help</a></li>
					<li><a href="#">terms & codition</a></li>
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
	
	<!-- <div class="sign-up">  -->
		<!-- <a href="#" class="btn btn-info" data-toggle="modal" data-target="#reg-btn">sign up</a> -->
		<!-- <div class="modal fade" id="reg-btn"> -->
			<!-- <div class="modal-dialog form">  -->
				<!-- <div class="modal-header"></div> -->
				<!-- <div class="modal-body">  -->
					<!-- <form action="#"> -->
						<!-- <input type="email" class="form-control"/> -->
					<!-- </form> -->
				<!-- </div> -->
				<!-- <div class="modal-footer">  -->
					<!-- <a href="#" class="btn btn-primary" data-dismiss="modal">close</a> -->
				<!-- </div> -->
			<!-- </div> -->
		<!-- </div> -->
	<!-- </div> -->
		
					
	
					
</body>
</html>