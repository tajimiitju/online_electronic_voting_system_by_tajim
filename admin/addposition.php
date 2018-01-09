<?php 
	include 'connection/auth.php';
?>
<form action="saveposition.php" method="POST">
Position<br>
<input type="text" name="position" value="" required/><br>
<input type="submit" value="Save" />
</form>