<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <title>Online Examination System</title>
 <!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">-->
 <!--<link rel="stylesheet" href="ui.css" type="text/css" />
  <script src="jquery.js"></script>
  <script src="tabs.js"></script>

  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>-->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Purchase Items</title>
<style type="text/css">
<!--
.style1 {font-size: 20px}
body {
	background-color: #009999;
}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: underline;
	color: #CCCCCC;
}
a:active {
	text-decoration: none;
	color: #000000;
}
.style3 {
	color: #000000;
	font-size: 16px;
}
-->
</style>
<?php
	require_once('auth.php');

?>
</head>

<body>
<!--<p align="center" class="style2">Real Estate Management System </p>
-->
 <!--<p align="center" class="tit">Real Estate Management System </p>

<p>Staff Name: <?php echo $_SESSION['SESS_FIRST_NAME'];
?>
<p>Position: <?php echo $_SESSION['SESS_POSITION']; 
?>

</p>
<p><a href="reports.php">Reports</a></p>
<p><a href="logout.php">Logout</a>|<a href="tab.php">Home</a></p>-->


<div align="center" class="style1">Purchase Items</div><br />
<form action="purchase_exe.php" method="POST">
  <table width="331" height="65" border="0" align="center">
    <tr>
      <td width="200" bgcolor="#CCCCCC"><span class="style3">Select Item </span></td>
      <td width="224"><label>
        <select name="select">
          <option value="Plot">Plot</option>
          <option value="House">House</option>
          <option value="Commercial">Commercial</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Submit" />
      </label></td>
    </tr>
  </table>

</form>
</body>
</html>
