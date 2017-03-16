<!doctype html>
<html lang="en">
<head>
<?php require_once('auth.php'); ?>
  <meta charset="utf-8">
  <title>Real Estate Management System</title>
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
 <p align="center" class="tit">Real Estate Management System </p>
<p>Staff Name: <?php echo $_SESSION['SESS_FIRST_NAME'];
?>
</p>
<p>Position: <?php echo $_SESSION['SESS_POSITION']; 
?>
</p>

<p><a href="logout.php">Logout</a>|<a href="tab.php">Home</a></p><!--|<a href="purchas.php">New Purchase</a>|<a href="reports.php">Reports</a></p>
-->
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">House Details</a></li>
  
  </ul>
  <div id="tabs-1">
    <p><?php include 'DetailsH.php'; ?> </p>
  </div>
  
</div>
 
 
</body>
</html>