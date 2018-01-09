<?php 
	include 'connection/auth.php';
?>
<?php
	include('connection/connect.php');
	$id=$_GET['id'];
	$results = $db->prepare("SELECT * FROM candidates WHERE id= :userid");
	$results->bindParam(':userid', $id);
	$results->execute();
	for($i=0; $rows = $results->fetch(); $i++){
?>
<form action="saveeditcandidate.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" /><br>
Position<br>
<select name="position" required>
	<option><?php echo $rows['position']; ?></option>
	<?php
	include('connection/connect.php');
	$result = $db->prepare("SELECT * FROM position");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option><?php echo $row['name']; ?></option>
	<?php
	}
	?>
</select><br>
Party<br>
<select name="party" required>
	<option><?php echo $rows['party']; ?></option>
	<?php
	include('connection/connect.php');
	$result = $db->prepare("SELECT * FROM party");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option><?php echo $row['name']; ?></option>
	<?php
	}
	?>
</select><br>
Name<br>
<input type="text" name="name" value="<?php echo $rows['name']; ?>" required/><br>
<input type="submit" value="Save" />
</form>
<?php
}
?>