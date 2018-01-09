<?php
require_once('auth.php');
include('admin/connection/connect.php');
$idnum=$_POST['idnum'];
$stat='voted';
$sqla = "UPDATE voters 
        SET status=?
		WHERE nid=?";
$qa = $db->prepare($sqla);
$qa->execute(array($stat,$idnum));
$a=1;
$edittable=$_POST['votes'];
$N = count($edittable);
for($i=0; $i < $N; $i++)
{
	$sql = "UPDATE candidates 
        SET votes=votes+?
		WHERE name=?";
$q = $db->prepare($sql);
$q->execute(array($a,$edittable[$i]));

$sqlas = "INSERT INTO votedetails (candidate,voters) VALUES (:m,:n)";
	$qs = $db->prepare($sqlas);
	$qs->execute(array(':m'=>$edittable[$i],':n'=>$idnum));

}
header("location: notification.php?id=$idnum");
mysql_close($con);
?>