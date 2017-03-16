<?php
	//Session Start
	session_start();
	//Include Connection of database 
include 'connectmysql.php';

	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
		//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
//Variable Declare
$f_name = $_POST['first_name'];
$l_name = $_POST['last_name'];
$gender = $_POST['gender'];
$reg_no = $_POST['reg_no'];
$login = $_POST['login_id'];
$password = $_POST['login_pass'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$mob = $_POST['mob'];
$ref_id = $_POST['ref_id'];
$address = $_POST['address'];
$city = $_POST['city'];
$country = $_POST['country'];

if($f_name == '') {
		$errmsg_arr[] = 'First Name missing';
		$errflag = true;
	}
	if($l_name == '') {
		$errmsg_arr[] = 'Last Name Missing';
		$errflag = true;
	}
	if($gender == '') {
		$errmsg_arr[] = 'Gender Missing';
		$errflag = true;
	}
	if($reg_no == '') {
		$errmsg_arr[] = 'Registration Number Missing';
		$errflag = true;
	}
	if($login == '') {
		$errmsg_arr[] = 'Login ID Missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password Missing';
		$errflag = true;
	}
	if($day == '') {
		$errmsg_arr[] = 'Day Missing';
		$errflag = true;
	}
	if($month == '') {
		$errmsg_arr[] = 'Month Missing';
		$errflag = true;
	}
	if($year == '') {
		$errmsg_arr[] = 'Year Missing';
		$errflag = true;
	}
	if($mob == '') {
		$errmsg_arr[] = 'Mobile Number Missing';
		$errflag = true;
	}
	if($ref_id == '') {
		$errmsg_arr[] = 'Refferemce ID Missing';
		$errflag = true;
	}
	if($address == '') {
		$errmsg_arr[] = 'Address is Missing';
		$errflag = true;
	}
	if($city == '') {
		$errmsg_arr[] = 'City is Missing';
		$errflag = true;
	}
	if($country == '') {
		$errmsg_arr[] = 'Country Name Missing';
		$errflag = true;
	}
	$date_birth = $day." ". $month. " ". $year;
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: signup.php");
		exit();
	}
	if($login != '') {
		$qry = "SELECT * FROM user WHERE login_id='$login'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'Login ID already in use';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	//check the solution
					
	$sig = "SELECT reg_no FROM authorized";
	$result = mysql_query($sig) or die(mysql_error());
	while($row = mysql_fetch_array($result))
	{
	if($row["reg_no"] == $reg_no)
	{
	$qry = "INSERT INTO `bs-forum`.`user` (`user_f_name`, `user_l_name`, `date_birth`, `login_id`, `login_password`, `user_gender`, `address`, `mobile_no`, `ref_id`, `city`, `country`) VALUES ('$f_name', '$l_name', '$date_birth', '$login', '$password', '$gender', '$address', '$mob', '$ref_id', '$city', '$country')";
$result = mysql_query($qry) or die(mysql_error());
if($result) {
		header("location: register-success.php");
		exit();
	}else {
		die("Query failed");
	}
}
if($row["reg_no"] != $reg_no)
{
header("location:index.php");
}
}
?>