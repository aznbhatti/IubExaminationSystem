<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
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
</style></head>
<?php
	require_once('auth.php');
?>

<body>
<h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];
?></h1>
<p><a href="logout.php">Logout</a></p>
<hr />
<form id="form1" name="form1" method="post" action="">
  <table width="429" height="142" border="0" align="center">
    <tr>
      <td width="157"> First Name </td>
      <td width="262"><label>
        <input type="text" name="textfield" />
      </label></td>
    </tr>
    <tr>
      <td>Last Name </td>
      <td><input type="text" name="textfield2" /></td>
    </tr>
    <tr>
      <td> Address </td>
      <td><textarea name="textfield3"></textarea></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input type="text" name="textfield4" /></td>
    </tr>
    <tr>
      <td>Country</td>
      <td><input type="text" name="textfield5" /></td>
    </tr>
    <tr>
      <td>Office Address </td>
      <td><textarea name="textfield6"></textarea></td>
    </tr>
    <tr>
      <td>Mobile</td>
      <td><input type="text" name="textfield7" /></td>
    </tr>
    <tr>
      <td>Phone no. </td>
      <td><input type="text" name="textfield8" /></td>
    </tr>
    <tr>
      <td>Street no </td>
      <td><label></label></td>
    </tr>
    <tr>
      <td>Plot</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Commercial</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Size</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Sector</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Price</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Condition</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Street no. </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Submit" />
      </label></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
