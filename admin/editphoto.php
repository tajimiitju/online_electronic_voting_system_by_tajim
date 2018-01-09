<?php 
	include 'connection/auth.php';
?>
<?php
	include('connection/connect.php');
	$id=$_GET['id'];
	$results = $db->prepare("SELECT * FROM party WHERE id= :userid");
	$results->bindParam(':userid', $id);
	$results->execute();
	for($i=0; $rows = $results->fetch(); $i++){
?>
<img src="partyImg/<?php echo $rows['symbol']; ?>" width="250px;" />
<form action="savephoto.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="memids" value="<?php echo $id; ?>" /><br>
Picture: <br />
<input type="file" name="image" class="ed" required><br />
<input type="submit" name="savePhoto" value="Save" id="editPhoto" />
</form>
<?php
}
?>
