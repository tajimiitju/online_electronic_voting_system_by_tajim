<?php 
	include 'connection/auth.php';
?>
<?php

include('connection/connect.php');

// new data
if(isset($_POST['savePhoto']) && $_POST['savePhoto']!=null){
$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);
		if ($image_size==FALSE) {
	?>
	<script>
		alert("That's not an image!");
		window.location = "parties.php";
	</script>		
		
<?php
		
		}else{
		move_uploaded_file($_FILES["image"]["tmp_name"],"partyImg/" . $_FILES["image"]["name"]);
		$b = $_POST['memids'];
		$a=$_FILES["image"]["name"];
$sql = "UPDATE party 
        SET symbol=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b));
header("location: parties.php");
}
}
else{
header("location: parties.php");
	
}


?>