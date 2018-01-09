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
<form action="saveeditparty.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
Name<br>
<input type="text" name="name" value="<?php echo $rows['name']; ?>" required/><br>
Description<br>
<input type="text" name="description" value="<?php echo $rows['description']; ?>" /><br>
<input type="submit" value="Save" name=""/>
</form>
<?php
}
?>