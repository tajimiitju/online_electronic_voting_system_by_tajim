<?php 
	include 'connection/auth.php';
?>
<?php
session_start();
include('connection/connect.php');
$a = $_POST['idnum'];
$b = $_POST['fname'].' '.$_POST['mname'].' '.$_POST['lname'];
$c = 'notRegistered';

// query
$sql = "INSERT INTO voter_list (nid,name,status) VALUES (:a,:b,:c)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c));
header("location: voterinfo.php");

?>