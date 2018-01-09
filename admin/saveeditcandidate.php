<?php 
	include 'connection/auth.php';
?>
<?php
// configuration
include('connection/connect.php');

// new data
$id = $_POST['memids'];
$a = $_POST['name'];
$b = $_POST['position'];
$c = $_POST['party'];
// query
$sql = "UPDATE candidates 
        SET name=?, position=?, party=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$id));
header("location: candidates.php");

?>