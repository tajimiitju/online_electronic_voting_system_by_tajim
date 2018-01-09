<?php 
	include 'connection/auth.php';
?>
<form action="saveidnum.php" method="POST">
NID<br>
<input type="text" name="idnum" value="" required="required" /><br>
Firstname<br>
<input type="text" name="fname" value="" required="required" /><br>
Lastname<br>
<input type="text" name="lname" value="" required="required" /><br>
Middlename<br>
<input type="text" name="mname" value="" /><br>
<input type="submit" value="Save" />
</form>