<?php 
	include 'connection/auth.php';
?>
<?php
include('connection/connect.php');

// new data
$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);
		if ($image_size==FALSE) {
		
?>
	<script>
		alert("That's not an image!");
		window.location = "candidates.php";
	</script>		
		
<?php
			
		}else{
		move_uploaded_file($_FILES["image"]["tmp_name"],"candidates/" . $_FILES["image"]["name"]);
		$name = $_POST['name'];
		$position = $_POST['position'];
		$location=$_FILES["image"]["name"];
		$d=$_POST['party'];

// query
$sql = "INSERT INTO candidates (name,position,image,party) VALUES (:a,:b,:c,:d)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$name,':b'=>$position,':c'=>$location,':d'=>$d));
header("location: candidates.php");
}


?>