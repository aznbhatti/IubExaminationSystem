<?php
	//Start session
	session_start();
	
	//Include database connection details
	include 'conn.php';
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$u_id = clean($_POST['u_id']);
	$pass = clean($_POST['u_pass']);
	
	//Input Validations
	if($u_id == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	if($pass == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM admin WHERE admin_username = '$u_id' AND admin_pass = '$pass'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_USER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['admin_name'];
			//$_SESSION['SESS_POSITION'] = $member[''];
			//$_SESSION['SESS_ADDRESS'] = $member['address'];
			
			session_write_close();
			header("location: tab.php");
			exit();
		}else {
			//Login failed
			header("location: login-failed.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>