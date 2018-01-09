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
							<li><a href="home.php">Home</a></li>
							<!-- <li><a href="electiontype.php">election type</a></li> -->
							<li><a href="parties.php">parties</a></li>
							<li><a href="position.php">position</a></li>
							<li class="current"><a href="candidates.php">candidates</a></li>
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

	<div class="container  clearfix">
		<div class="two-thirds1 column">
			<div class="thewraper">
			<div id="formdesign"><input type="text" name="filter" value="" id="filter" placeholder="search..." autocomplete="off" /></div>
			<a rel="facebox" href="addcandidates.php"> Add Candidates </a>
			<table id="resultTable" data-responsive="table">
				<thead>
					<tr>
						<th> Image </th>
						<th> Name </th>
						<th> Position </th>
						<th> Party </th>
						<th> Votes </th>
						<th> Action </th>
					</tr>
				</thead>
				<tbody>
					<?php
						include('connection/connect.php');
						$result = $db->prepare("SELECT * FROM candidates ORDER BY position DESC");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++){
					?>
					<tr class="record">
						<td><a rel="facebox" href="editcandidatesphoto.php?id=<?php echo $row['id']; ?>"><img src="candidates/<?php echo $row['image']; ?>" /></a></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['position']; ?></td>
						<td><?php echo $row['party']; ?></td>
						<td><a rel="facebox" href="breakdown.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>&position=<?php echo $row['position']; ?>&party=<?php echo $row['party']; ?>&numberofvotes=<?php echo $row['votes']; ?>" title="click to view the breakdown of votes"><?php echo $row['votes']; ?></a></td>
						<td><a rel="facebox" href="editcandidates.php?id=<?php echo $row['id']; ?>"> Edit </a> | <a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete">Delete</a></td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
<?php 
	include 'footer.php';
?>

<script>
	$(function() {


	$(".delbutton").click(function(){

	//Save the link in a variable called element
	var element = $(this);

	//Find the id of the link that was clicked
	var del_id = element.attr("id");

	//Built a url to send
	var info = 'id=' + del_id;
	 if(confirm("Sure you want to delete this update? There is NO undo!"))
			  {

	 $.ajax({
	   type: "GET",
	   url: "deletecandidates.php",
	   data: info,
	   success: function(){
	   
	   }
	 });
	         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
			.animate({ opacity: "hide" }, "slow");

	 }

	return false;

	});

	});
</script>