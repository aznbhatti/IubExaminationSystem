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
<title></title>
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


<div align="center" class="style1">Student Record </div>
<br />
<form action="std_exe.php" method="POST">
  <table width="442" height="65" border="0" align="center">
    <tr>
      <td width="208" bgcolor="#CCCCCC"><span class="style3">Select Session </span></td>
      <td width="224"><label>
      <select name="sess" id="sess">
        <?php 
		 $seqry = "Select * from session";
		 $seresult = mysql_query($seqry) or die(mysql_error());
		if($seresult)
		{
		while($serow = mysql_fetch_array($seresult))
		{
		
		
		  ?>
        <option value="<?php echo $serow["ses_id"]; ?>"><?php echo $serow["ses_name"]; }}?></option>
      </select>
      </label></td>
    </tr>
    <tr>
      <td width="208" bgcolor="#CCCCCC"><span class="style3">Select Program </span></td>
      <td><label>
        <select name="Program">
           <?php 
		 $pqry = "Select * from program";
		 $presult = mysql_query($pqry) or die(mysql_error());
		if($presult)
		{
		while($prow = mysql_fetch_array($presult))
		{
		
		
		  ?>
		  <option value="<?php echo $prow["p_id"]; ?>"><?php echo $prow["p_name"]; }}?></option>
        
        </select>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><span class="style3">Select Shift</span></td>
      <td><label>
        <select name="Shift">
          <?php 
		 $shiftqry = "Select * from shift";
		 $shiftresult = mysql_query($shiftqry) or die(mysql_error());
		if($shiftresult)
		{
		while($shiftrow = mysql_fetch_array($shiftresult))
		{
		
		
		  ?>
		  <option value="<?php echo $shiftrow["shif_id"]; ?>"><?php echo $shiftrow["shif_name"]; }}?></option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><span class="style3">Select Semester</span></td>
      <td><label>
        <select name="Semester">
          <?php 
		 $sqry = "Select * from semester";
		 $sresult = mysql_query($sqry) or die(mysql_error());
		if($sresult)
		{
		while($srow = mysql_fetch_array($sresult))
		{
		
		
		  ?>
		  <option value="<?php echo $srow["sem_id"]; ?>"><?php echo $srow["sem_name"]; }}?></option>
        
        </select>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Roll No. </td>
      <td><label>
        <input name="rollno" type="text" id="rollno" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Name </td>
      <td><input name="name" type="text" id="name" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Father Name </td>
      <td><input name="fname" type="text" id="fname" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">CNIC</td>
      <td><input name="cnic" type="text" id="cnic" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Registration No. </td>
      <td><input name="regno" type="text" id="regno" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Gender</td>
      <td><select name="gender" id="gender">
        <option value="male">male</option>
        <option value="female">female</option>
            </select></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Address</td>
      <td><input name="address" type="text" id="address" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Mobile No. </td>
      <td><input name="mob" type="text" id="mob" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Submit" />
      </label></td>
    </tr>
  </table>

</form>
</body>
</html>
