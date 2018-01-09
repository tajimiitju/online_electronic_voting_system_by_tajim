<?php 
	include 'connection/auth.php';
?>
<?php
	include('connection/connect.php');
	$id=$_GET['id'];
	$results = $db->prepare("SELECT * FROM admin WHERE id= :userid");
	$results->bindParam(':userid', $id);
	$results->execute();
	for($i=0; $rows = $results->fetch(); $i++){
?>
<form action="saveeditadmin.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
Username<br>
<input type="text" name="username" value="<?php echo $rows['username']; ?>" required/><br>
Passowrd<br>
<input type="password" name="password" value="<?php echo $rows['password']; ?>" required/><br>
Email<br>
<input type="email" name="email" value="<?php echo $rows['email']; ?>" required/><br>
<input type="submit" value="Save" />
</form>
<?php
}
?>