<?php 
	include 'connection/auth.php';
?>
<form action="addcandidate.php" method="POST" enctype="multipart/form-data">
Position<br>
<select name="position">
	<?php
	include('connection/connect.php');
	$result = $db->prepare("SELECT * FROM position ORDER BY id ASC");
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
<select name="party">
	<?php
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
<input type="text" name="name" value="" required/><br>
Picture: <br />
<input type="file" name="image" class="ed" required><br />
<input type="submit" value="Save" />
</form>