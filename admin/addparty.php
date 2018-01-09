<?php 
	include 'connection/auth.php';
?>
<form action="saveparty.php" method="POST" enctype="multipart/form-data">
Name<br>
<input type="text" name="name" value="" required/><br>
Description<br>
<input type="text" name="description" value=""/><br>
Symbol<br>
<input type="file" name="image" class="ed" required><br />
<input type="submit" value="Save" />
</form>