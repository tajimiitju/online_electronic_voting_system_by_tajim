
<?php 
	include 'connection/auth.php';
?> 

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
	<link rel="stylesheet" type="text/css" href="css/facebox.css" media="all">
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
	<script type="text/javascript" src="js/search.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/popup.js"></script>
	<script type="text/javascript" src="js/facebox.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'images/loading.gif',
      closeImage   : 'images/closelabel.png'
    })
  })
</script>

<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=700, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
	<style type="text/css">
		.error_hide{
			display: none;
		}
		.error_show{
			color: red;
		}

		.success_hide{
			display: none;
		}
		.success_show{
			color: green;
		}
	</style>
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
					<div class="menu col-md-offset-1 "> 
						<ul>
							<li class="current"><a href="home.php">Home</a></li>
							<!-- <li><a href="electiontype.php">election type</a></li> -->
							<li><a href="parties.php">parties</a></li>
							<li><a href="position.php">position</a></li>
							<li><a href="candidates.php">candidates</a></li>
							<li><a href="voterinfo.php">voters info</a></li>
							<li><a href="voters.php">voters</a></li>
							<li><a href="winner.php">winner</a></li>
							<li><a href="register.php">Registration</a></li>

							<li><a href="admin.php">admin</a></li>
							<li><a href="logout.php">log out</a></li>
							
						</ul>
					</div>
										
					
				</div>
			</div>
		</div>
		
	</div>
	<!-- header area ends -->

	<!-- form-area starts -->



	<div class="container  clearfix">
 
 		<div class="two-thirds1 column">
 			<div class="thewraper">
 			<div style="margin-top: 18px;">
 			<!-- <a id="addd" href="javascript:Clickheretoprint()">Print</a> -->
 			</div>
 				<div class="content" id="content">
 					<h1 class="text-center">Registration</h1>

						<script type="text/javascript">
						function validateForm()
						{
						var a=document.forms["frmOne"]["password"].value;
						var b=document.forms["frmOne"]["rpassword"].value;
						if (a!=b)
						  {
						  alert("Password Mismatch");
						  return false;
						  }
						
						}
						</script>

						<div class="col-sm-offset-2 success_hide" id="success">
							<h4> >> Successfully Regigtered! <br>  <!-- >> You can now login to vote <a rel="facebox" href="voting.php">Here</a>. --></h4>					
						</div>
						<div class="col-sm-offset-2 error_hide" id="error">
							<h4> >> ID Number Does Not exist Or Already Taken.</h4>					
						</div>
						
						<form class="form-horizontal" name = "frmOne" method="POST" onsubmit="return validateForm()" id="regForm">

						<div class="form-group">
						<label class="col-sm-3 control-label">NID</label>
						<div class="col-sm-6">
						  <input type="text" name="nid" class="form-control" id="inputEmail3" placeholder="NID" required>
						</div>
						</div>
						<div class="form-group">
						<label class="col-sm-3 control-label">Username</label>
						<div class="col-sm-6">
						  <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username" required>
						</div>
						</div>
						<div class="form-group">
						<label class="col-sm-3 control-label">Password</label>
						<div class="col-sm-6">
						  <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
						</div>
						</div>
						<div class="form-group">
						<label class="col-sm-3 control-label">Re-Enter Password</label>
						<div class="col-sm-6">
						  <input type="password" name="rpassword" class="form-control" id="inputPassword3" placeholder="Password" required>
						</div>
						</div>
						<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
						  <input type="submit" value="Save" class="btn btn-default" />
						</div>
					<!-- 	<div class="col-sm-offset-2 col-sm-9">
						  <label class="col-sm-8 control-label">Already a member? Login
	  					  <a rel="facebox" href="voting.php">Here</a><br></label><br>
						</div> -->
						</div>
						</form>

 				
 			<!-- 	<?php
 				include('connection/connect.php');
 				$result = $db->prepare("SELECT * FROM position ORDER BY id ASC");
 					$result->bindParam(':userid', $res);
 					$result->execute();
 					for($i=0; $row = $result->fetch(); $i++){
 					$dsds=$row['name'];
 					
 					$resulta = $db->prepare("SELECT sum(votes) FROM candidates WHERE position= :a");
 					$resulta->bindParam(':a', $dsds);
 					$resulta->execute();
 					for($i=0; $rowa = $resulta->fetch(); $i++){
 					$dsada=$rowa['sum(votes)'];
 					}
 					echo '<div style="margin-top: 18px;">';
 					echo '<strong>'.$row['name'].'&nbsp;&nbsp;Total Votes&nbsp;&nbsp;'.$dsada.'</strong><br>';
 					
 					$results = $db->prepare("SELECT * FROM candidates WHERE position= :a ORDER BY votes DESC");
 					$results->bindParam(':a', $dsds);
 					$results->execute();
 					for($i=0; $rows = $results->fetch(); $i++){
 					
 					
 						if($dsds=='Representative'){
 						echo $rows['course'].'&nbsp;&nbsp;'.$rows['name'].'&nbsp;&nbsp;=&nbsp;&nbsp;'.$rows['votes'];
 						}
 						else {
 						echo $rows['name'].'&nbsp;&nbsp;=&nbsp;&nbsp;'.$rows['votes'];
 						}
 						$sdsd=$dsada
 						?>
 						<img src="pollyes.gif"
 						width='<?php //echo(100*round($rows['votes']/($sdsd),2)); ?>'
 						height='10'>
 						<?php //echo(100*round($rows['votes']/($sdsd),2)); ?>%<br>
 						<?php
 						
 						
 						
 					}
 					echo '</div>';
 					
 					
 					
 				}
 				?> -->
 				</div>
 			</div>
 		</div>
 	</div> 
	<!-- form-area ends -->
	<script type="text/javascript">
	    $('form').on('submit', function (e) {
	      e.preventDefault();
	      $.ajax({
	        type: 'post',
	        url: 'save.php',
	        data: $('form').serialize(),
	        success: function (data) {
	          if(data == "success"){
	          	$("#success").removeClass('success_hide');
	          	$("#error").removeClass('error_show');
	          	$("#error").addClass('error_hide');
				$("#success").addClass('success_show');
				
						
	          }else{				
				$("#error").removeClass('error_hide');
				$("#success").removeClass('success_show');
				$("#success").addClass('success_hide');
				$("#error").addClass('error_show');

	          }

	        }

	      });
	      document.getElementById('regForm').reset();
	    });

	</script>
	<?php 
	include 'footer.php';
	?>
	
	
