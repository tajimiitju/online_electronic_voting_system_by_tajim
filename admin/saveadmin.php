<?php 
	include 'connection/auth.php';
?>
<?php
session_start();
include('connection/connect.php');
$a = $_POST['username'];
$b = $_POST['password'];
$c = $_POST['email'];
// query
$sql = "INSERT INTO admin (username,password,email) VALUES (:a,:b,:c)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c));
header("location: admin.php");


?>