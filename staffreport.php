<?php 
require_once('auth.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>staff Reports</title>
<style type="text/css">
<!--
.style1 {font-size: 36px}
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
-->
</style>
</head>

<body>
<div align="center" class="style1">Real Estate Management System</div><hr />
<p>Staff Name : <?php echo $_SESSION['SESS_FIRST_NAME']; ?>
<p><a href="logout.php">Logout</a>|<a href="reports.php">Back</a></p>

<form id="staffrpt" name="staffrpt" method="post" action="staffrpt_exe.php">
  <table width="258" border="1" align="center">
    <tr>
      <td width="112">Select Category </td>
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
</form>
<p></p>
</body>
</html>
