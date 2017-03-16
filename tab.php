<!doctype html>
<html lang="en">
<head>
<?php require_once('auth.php'); ?>
  <meta charset="utf-8">
  <title>Online Examination System</title>
 <!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">-->
 <link rel="stylesheet" href="ui.css" type="text/css" />
  <script src="jquery.js"></script>
  <script src="tabs.js"></script>

  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--

-->
</style></head>
<body>
 <p align="center" class="tit">Online Examination System </p>
<p>Staff Name: <?php echo $_SESSION['SESS_FIRST_NAME'];
?>
</p>
<!--<p>Position: --><?php //echo $_SESSION['SESS_POSITION']; 
?>
</p>
<p><a href="logout.php">Logout</a></p>
<!--<a href="purchas.php">New Purchase</a>|<a href="reports.php">Reports</a></p>-->
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Home</a></li>
    <li><a href="#tabs-2">Award List</a></li>
    <li><a href="#tabs-3">Consolidate</a></li>
	<li><a href="#tabs-4">Student Record</a></li>
	<li><a href="#tabs-5">DMC</a></li>
	<li><a href="#tabs-6">Course</a></li>
  </ul>
  <div id="tabs-1">
    <p><?php include 'login-file.php'; ?> </p>
  </div>
  <div id="tabs-2">
    <p><?php include 'awardlist.php'; ?></p>
  </div>
  <div id="tabs-3">
    <p><?php include 'consolidate.php'; ?></p>
   
  </div>
  <div id="tabs-4">
  <p><?php include 'student.php'; ?></p>
  </div>
<div id="tabs-5">
  <p><?php include 'dmcreport.php'; ?></p>
  </div>
<div id="tabs-6">
  <p><?php include 'course.php'; ?></p>
  </div>

</div>
 
 
</body>
</html>