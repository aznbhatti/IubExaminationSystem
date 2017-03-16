<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Real Estate Management System</title>
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
	text-decoration: none;
	color: #FFFFFF;
}
a:active {
	text-decoration: none;
	color: #000000;
}
.style1 {font-size: 36px}
.style3 {font-size: 32px}
-->
</style></head>
<?php
	require_once('auth.php');
	include 'conn.php';
	$pid = $_GET['var'];

?>

<body>
<form id="form1" name="form1" method="post" action="pSale_exe.php?var=<?php echo $pid; ?>">
  <table width="429" height="142" border="0" align="center">
    <tr>
      <td bgcolor="#CCCCCC">CNIC</td>
      <td><input name="cnic" type="text" id="cnic" size="28" /></td>
    </tr>
	
    <tr>
      <td width="157" bgcolor="#CCCCCC"> First Name </td>
      <td width="262"><label>
        <input name="fname" type="text" id="fname" size="28" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Last Name </td>
      <td><input name="lname" type="text" id="lname" size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"> Address </td>
      <td><input name="address" type="text" id="address" value="" size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">City</td>
      <td><input name="city" type="text" id="city" size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Country</td>
      <td><input name="country" type="text" id="country" size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Office Address </td>
      <td><input name="oadd" type="text" id="oadd" value="" size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Mobile</td>
      <td><input name="mob" type="text" id="mob" size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Phone no. </td>
      <td><input name="ph" type="text" id="ph" size="28" /></td>
    </tr>
	<?php 
	include 'conn.php';
	$pid = $_GET['var'];
	$qry = "SELECT * from plot where p_id = $pid";
	$result = mysql_query($qry) or die (mysql_error("Error"));
		if($result)
		{
			while($row = mysql_fetch_array($result))
			{
			?>
    <tr>
      <td bgcolor="#CCCCCC">Plot no. </td>
      <td><input name="pno" type="text" id="pno" size="28" value="<?php echo $row["p_no"];?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Size</td>
      <td><input name="size" type="text" id="size" size="28" value="<?php echo $row["p_size"]; ?>"/></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Sector</td>
      <td><input name="sector" type="text" id="sector" size="28" value="<?php echo $row["p_sector"]; ?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Street no. </td>
      <td><input name="st" type="text" id="st" size="28" value="<?php echo $row["p_st"]; ?>" /></td>
    </tr><?php }}?>
    <tr>
      <td bgcolor="#CCCCCC"><input name="pid" type="hidden" value="<?php echo $pid; ?>" /></td>
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
