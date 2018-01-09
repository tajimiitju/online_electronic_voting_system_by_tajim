<?php 
	include 'connection/auth.php';
?>
<?php
session_start();
include('connection/connect.php');
$a = $_POST['position'];
// query
$sql = "INSERT INTO position (name) VALUES (:a)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a));
header("location: position.php");
?>