<?php
	require 'admin/connection/connect.php';

	//Start session
	session_start();
				
	//Sanitize the POST values
	$nid = $_POST['nid'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$stat='notvoted';
	
	//Create query
	$qry="SELECT * FROM voters WHERE nid='$nid' AND username='$username' AND password='$password' AND status='$stat'";
	
	$query = $db->prepare($qry);
	$query->execute();
	$result = $query->fetch();

	$qry2="SELECT * FROM voters WHERE nid='$nid' AND username='$username' AND password='$password'";

	$query2 = $db->prepare($qry2);
	$query2->execute();
	$result2 = $query2->fetch();
	
		if($result > 0) {
			session_regenerate_id();
			$_SESSION['SESS_MEMBER_ID'] = $result['nid'];
			$_SESSION['NAME'] = $result['name'];
			session_write_close();
			//header("location: candidates_list.php");
			//exit();
			echo "success";
		}
		elseif($result2 > 0) {
			echo "voted";
		}else {
			return false;
		}
?>