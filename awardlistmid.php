<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <title>Online Examination System</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
 <link rel="stylesheet" href="ui.css" type="text/css" />
  <script src="jquery.js"></script>
  <script src="tabs.js"></script>
 <script>
	
	$(document).ready(function(){
		
		//var sum = 0;
		//iterate through each textboxes and add keyup
		//handler to trigger sum event
		$(".txt").each(function() {

			$(this).keyup(function(){
			calculateSum();
			});
		});
	});
	
	function calculateSum() {

		var sum = 0;
		//iterate through each textboxes and add the values
		$(".txt").each(function() {

			//add only if the value is number
			if(!isNaN(this.value) && this.value.length!=0) {
				sum += parseFloat(this.value);
			
			}

		});
		//.toFixed() method will roundoff the final sum to 2 decimal places
		$("#sum").html(sum.toFixed(2));
	}
</script>

 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title></title>
<style type="text/css">
#sum{

}
input {
   display: block;   
}

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


</style>
 
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  
  
  </script>

<?php
require_once('auth.php');
include 'conn.php';

?>
</head>

<body>

<!--<p align="center" class="style2">Real Estate Management System </p>
-->
<p align="center" class="tit">Online Examination System </p>

<p>Staff Name: <?php echo $_SESSION['SESS_FIRST_NAME'];
?>
<?php 
$ses = $_POST["session"];
$prog = $_POST["Program"];
$shift = $_POST["Shift"];
$sem = $_POST["Semester"];
$cour = $_POST["course"];

?>

<p><a href="logout.php">Logout</a>|<a href="tab.php">Home</a></p>


<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Award List of <?php 
	$pqry = "SELECT p_name
FROM program
WHERE p_id = $prog";
$presult = mysql_query($pqry);
if($presult)
{
while($prow = mysql_fetch_array($presult))
{

	echo $prow['p_name']; ?></a></li>
    
  </ul>
  <div id="tabs-1">
    
  
<div align="left" class="style1">
  <blockquote>
    <p align="center">
      <?php

echo $prow['p_name'];}}
?>
      <?php $shfqry = "select shif_name from shift where shif_id = $shift";
$shfresult = mysql_query($shfqry) or die(mysql_error());
if($shfresult)
{
while($shfrow = mysql_fetch_array($shfresult))
{
echo $shfrow['shif_name'];
}
}
?>      
      <?php $sqry = "select ses_name from session where ses_id = $ses";
$sresult = mysql_query($sqry) or die(mysql_error());
if($sresult)
{
while($srow = mysql_fetch_array($sresult))
{
echo $srow['ses_name'];
}}
?> 
      <?php $smqry = "select sem_name from semester where sem_id = $sem";
$smresult = mysql_query($smqry) or die(mysql_error());
if($smresult)
{
while($smrow = mysql_fetch_array($smresult))
{
echo $smrow['sem_name'];
}
}
?>
      Smester</p>
  </blockquote>
  <table width="990" height="86" border="0"  align="center">
    <tr>
      <td width="249" bgcolor="#CCCCCC"><div align="left">Course Description </div></td>
      <td width="198" bgcolor="#CCCCCC"><?php

$cqry = "SELECT *
FROM course
WHERE c_id = $cour";
$cresult = mysql_query($cqry);
if($cresult)
{
while($crow = mysql_fetch_array($cresult))
{
echo $crow['c_name'];
?></td>
      <td colspan="2" rowspan="5">&nbsp;</td>
      <td width="169" bgcolor="#CCCCCC">Credit Hours </td>
      <td width="50" bgcolor="#CCCCCC"><div align="center">
        <?php

echo $crow['c_ch'];
?>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><div align="left">Course Code </div></td>
      <td bgcolor="#CCCCCC"><?php

echo $crow['c_code'];}}
?></td>
      <td bgcolor="#CCCCCC">Mid Marks </td>
      <td bgcolor="#CCCCCC"><div align="center">30</div></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Instructor</td>
      <td bgcolor="#CCCCCC"><?php $sqry = "select ses_name from session where ses_id = $ses";
$sresult = mysql_query($sqry) or die(mysql_error());
if($sresult)
{
while($srow = mysql_fetch_array($sresult))
{
//echo $srow['ses_name'];
}}
?></td>
      <td bgcolor="#CCCCCC">Final Marks </td>
      <td bgcolor="#CCCCCC"><div align="center">50</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td bgcolor="#CCCCCC">Sessional Marks </td>
      <td bgcolor="#CCCCCC"><div align="center">20</div></td>
    </tr>
    <tr>
      <td><div align="left"></div></td>
      <td>&nbsp;</td>
      <td bgcolor="#CCCCCC">Total Marks </td>
      <td bgcolor="#CCCCCC"><div align="center">100</div></td>
    </tr>
  </table>
  </label>
  
  <form id="awardlist" name="awardlist" method="post" action="">
  <table width="1033" border="0" align="center">
    <tr bgcolor="#CCCCCC">
      <td width="45" height="45">S.No</td>
      <td width="124">Roll No </td>
      <td width="189">Student Name </td>
      <td width="57">Mid Term </td>
      <td width="63">Final Term </td>
      <td width="81">Sessional Marks </td>
      <td width="114">Marks Obtained </td>
      <td width="57">Grade</td>
      <td width="55">GPA</td>
      <td width="40">QP</td>
      <td width="250">Remarks</td>
    </tr>
    <tr><?php
	 
	  $stqry = "SELECT * FROM STUDENT";
	  $stresult = mysql_query($stqry) or die (mysql_error());
	  if($stresult)
	  {$a = 0;
	  while($strow = mysql_fetch_array($stresult))
	  {
	   
	  if($strow['ses_id'] == $ses and $strow['p_id'] == $prog and $strow['sem_id'] == $sem and $strow['shif_id'] == $shift)
	  {
	  	  
	  
	  //print $a;
	  
	  
	  ?>
      

      <td><?php echo $a; ?>
        <label></label>
            </td>
      <td><?php echo $strow['std_roll_no'];?></td>
      <td><?php echo $strow['std_name']; ?></td>
      <td><input name="mid" type="text" class="txt" id="mid" size="4" maxlength="4" /></td>
      <td><input name="final" type="text" class="txt" id="final" size="4" maxlength="4" /></td>
      <td><input name="sesional" type="text" class="txt" id="sesional" size="4" maxlength="4" /></td>
      <td><label id="sum"> 0</label></td>
      <td>A</td>
      <td>3</td>
      <td>9.0</td>
      <td><input name="remarks" type="text" id="remarks" /></td>
    </tr><?php }$a++;}}?>
  </table></form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div align="left" class="style1"><label><p>&nbsp;</p>
</label></div>

  </div>
  </div>

<!--<form action="award_exe.php" method="POST">
  <table width="442" height="65" border="0" align="center">
    <tr>
      <td width="208" bgcolor="#CCCCCC"><span class="style3">Select Session </span></td>
      <td width="224"><label>
      <select name="session">
        <?php /*
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
          <?php /*
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
      <td bgcolor="#CCCCCC">Select Course </td>
      <td><select name="course" id="course">
        <?php 
		 /*$sqry = "Select * from course";
		 $sresult = mysql_query($sqry) or die(mysql_error());
		if($sresult)
		{
		while($srow = mysql_fetch_array($sresult))
		{
		
		
		  ?>
        <option value="<?php echo $srow["c_id"]; ?>"><?php echo $srow["c_name"]; }}*/?></option>
      </select></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Submit" />
      </label></td>
    </tr>
  </table>
--></form>

</body>
</html>
