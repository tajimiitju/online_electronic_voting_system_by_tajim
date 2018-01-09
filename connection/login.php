<?php
	require 'connect.php';

	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;	
	
	//Function to sanitize values received from the form. Prevents SQL injection

	//Sanitize the POST values
	$username = $_POST['username']; 
    $password = $_POST['password'];

	$position = "Admin";
	$stat='notvoted';
	
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}

	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../index.php");
		exit();
	}
	
	//Create query
	if($position=='Admin') {
		$qry="SELECT * FROM admin WHERE username='{$username}' AND password='{$password}'";
	}
	// if($position=='Student') {
	// $qry="SELECT * FROM students WHERE username='$login' AND password='$password' AND status='$stat'";
	// }
	//$query=mysqli_query($qry);
	$query = $db->prepare($qry);
	// $query->bindParam(':username', $username);
	// $query->bindParam(':password', $password);
	$query->execute();
    // Check the number of rows that match the SELECT statement 
    // if($query->fetchColumn() == 0) {
    //     echo "No records found";
    //  }else{
    //         echo "Success";
    // }
	
	//Check whether the query was successful or not
	$result = $query->fetch();

	if($query) {
		if($result > 0) {
			// Login Successful
			// if($position=='Student') {
			// session_regenerate_id();
			// $member = mysql_fetch_assoc($result);
			// $_SESSION['SESS_MEMBER_ID'] = $member['username'];
			// $_SESSION['SESS_COURSE'] = $member['course'];
			// $_SESSION['NAME'] = $member['name'];
			// session_write_close();
			// header("location: candidates_list.php");
			// exit();
			// }
			if($position=='Admin') {
			session_regenerate_id();
			$_SESSION['SESS_MEMBER_ID'] = $result['id'];
			session_write_close();
			header("location: ../home.php");
			exit();
			}
		}else {
			//Login failed
			header("location: ../index.php");
			exit();
		}
	}else {
		echo $qry;
		die("Query failed");
	}
?>