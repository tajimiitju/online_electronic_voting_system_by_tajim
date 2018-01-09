<?php 
	include 'connection/auth.php';
?>
<form action="saveadmin.php" method="POST">
Username<br>
<input type="text" name="username" value="" required/><br>
Passowrd<br>
<input type="password" name="password" value="" required/><br>
Email<br>
<input type="email" name="email" value="" required/><br>
<input type="submit" value="Save" />
</form>