<?php 
	include 'connection/auth.php';
?>
<?php
	include('connection/connect.php');
	$id=$_GET['id'];
	$results = $db->prepare("SELECT * FROM position WHERE id= :userid");
	$results->bindParam(':userid', $id);
	$results->execute();
	for($i=0; $rows = $results->fetch(); $i++){
?>
<form action="saveeditposition.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
Position<br>
<input type="text" name="position" value="<?php echo $rows['name']; ?>" required/><br>
<input type="submit" value="Save" />
</form>
<?php
}
?>