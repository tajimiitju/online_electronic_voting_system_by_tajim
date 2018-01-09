<?php 
	include 'connection/auth.php';
?>
<?php
include('connection/connect.php');

	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);
	if ($image_size==FALSE) {
		
		?>
			<script type="text/javascript">
				alert("That's not an image!");
				window.location = 'parties.php';
			</script>
		<?php
			
	}else{
		move_uploaded_file($_FILES["image"]["tmp_name"],"partyImg/" . $_FILES["image"]["name"]);
		$name = $_POST['name'];
		$position = $_POST['position'];
		$location=$_FILES["image"]["name"];


		$a = $_POST['name'];
		$b = $_POST['description'];
		// query
		$sql = "INSERT INTO party (name,description,symbol) VALUES (:a,:b,:c)";
		$q = $db->prepare($sql);
		$q->execute(array(':a'=>$a,':b'=>$b, ':c'=>$location));
		header("location: parties.php");

}
?>