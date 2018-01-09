<?php 
	include 'connection/auth.php';
?>
<?php
// configuration
include('connection/connect.php');

// new data
$id = $_POST['memids'];
$a = $_POST['username'];
$b = $_POST['password'];
$c = $_POST['email'];
// query
$sql = "UPDATE admin 
        SET username=?, password=?, email=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$id));
header("location: admin.php");

?>