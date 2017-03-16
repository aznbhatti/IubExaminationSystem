<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>House for Sale</title>
<style type="text/css">
<!--
.style6 {font-size: 16px; color: #FFFFFF; }
.style7 {color: #000000}
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
.style8 {font-size: 36px}
.style9 {font-size: 32px; }
-->
</style>

</head>
<?php
	require_once('auth.php');
	include 'conn.php';
$id = $_GET['var'];
?>

<body>
<form id="form1" name="form1" method="post" action="HSale_exe.php?var=<?php echo $id; ?>">
  <table width="429" height="142" border="0" align="center">
   
  
   
    <tr>
      <td bgcolor="#CCCCCC">CNIC No.</td>
      <td><input name="cnic" type="text" id="cnic" size="28"  /></td>
    </tr>
	<tr>
      <td width="157" bgcolor="#CCCCCC"> First Name </td>
      <td width="262"><label>
        <input name="fname" type="text" id="fname" size="28"  />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Last Name </td>
      <td><input name="lname" type="text" id="lname" size="28"  /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"> Address </td>
      <td><input name="address" type="text" id="address" size="28"  /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">City</td>
      <td><input name="city" type="text" id="city" size="28"  /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Country</td>
      <td><input name="country" type="text" id="country" size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Office Address </td>
      <td><input name="officeadd" type="text" id="officeadd"  size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Mobile</td>
      <td><input name="mob" type="text" id="mob" size="28"  /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Phone no. </td>
      <td><input name="phone" type="text" id="phone" size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"> <span class="style6"><span class="style7">House  no</span></span><span class="style7">. </span></td>
      <td class="style7"><label>
	  <?php 

include 'conn.php';
$id = $_GET['var'];


$qry = "SELECT * from house where h_id = $id";
$result = mysql_query($qry) ;
if($result)
{
while($row = mysql_fetch_array($result))
{

?>
        <input name="hno" type="text" id="hno" size="28" value="<?php echo $row["h_no"]; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" class="style7">Street no. </td>
      <td class="style7"><input name="st" size="28" type="text" id="st" value="<?php echo $row["h_st"]; ?>"/></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" class="style7">Size</td>
      <td class="style7"><input name="size" size="28" type="text" id="size" value="<?php echo $row["h_size"]; ?>"/></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" class="style7">Sector</td>
      <td class="style7"><input name="sector" size="28" type="text" id="sector" value="<?php echo $row["h_sector"]; ?>"/></td>
    </tr>
    <tr>
	
      <td bgcolor="#CCCCCC" class="style7"><input name="id" type="hidden" id="id" value="<?php echo $row["h_id"]; } }?>"/> </td>
      <td class="style7"><label>
        <input type="submit" name="Submit" value="Submit" />
      </label></td>
	  
</td>
    </tr>
  </table>
</form>
<p class="style7">&nbsp;</p>
</body>
</html>
