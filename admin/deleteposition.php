<?php 
	include 'connection/auth.php';
?>
<?php
	include('connection/connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM position WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>