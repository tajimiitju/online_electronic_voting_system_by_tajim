<?php 
	include 'connection/auth.php';
?>
<?php
	include('connection/connect.php');
	$id=$_GET['id'];

	$resu = $db->prepare("DELETE FROM candidates WHERE id= :memid");
	$resu->bindParam(':memid', $id);
	$resu->execute();
?>