<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--
<link rel="stylesheet" href="ui.css" type="text/css" />
  <script src="jquery.js"></script>
  <script src="tabs.js"></script>

  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
-->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Reports</title>
<style type="text/css">
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
	text-decoration: none;
	color: #FFFFFF;
}
a:active {
	text-decoration: none;
	color: #000000;
}
.style1 {font-size: 20px}
</style></head>

<body>
<!--<p align="center" class="tit">Real Estate Management System </p>
<p>Staff Name: <?php echo $_SESSION['SESS_FIRST_NAME']; ?>
<p>Position: <?php echo $_SESSION['SESS_POSITION']; 
?>
</p>
<p><a href="purchas.php">New Purchase</a></p>
<p><a href="logout.php">Logout</a>|<a href="tab.php">Home</a></p>
<hr />-->
<p align="center"><span class="style1">Pruchase Reports</span></p>
<form id="reports" name="reports" method="post" action="reports_exe.php">
  <label>
  <table width="258" border="0" align="center">
    <tr>
      <td width="112" bgcolor="#CCCCCC">Select Category </td>
      <td width="130"><label>
        <select name="select">
          <option value="plot">Plot</option>
          <option value="commercial">Commercial</option>
          <option value="h">House</option>
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
  </label>
</form>
<p align="center"><span class="style1">Sale Reports</span></p>

<form id="reports" name="reports" method="post" action="reports_exe.php">
  <label>
  <table width="258" border="0" align="center">
    <tr>
      <td width="112" bgcolor="#CCCCCC">Select Category </td>
      <td width="130"><label>
        <select name="select">
          <option value="plot">Plot</option>
          <option value="commercial">Commercial</option>
          <option value="h">House</option>
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
  </label>
</form>

<p align="center">&nbsp;</p>
</body>
</html>
