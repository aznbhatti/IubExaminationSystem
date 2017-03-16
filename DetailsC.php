<?php
	require_once('auth.php');
?>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style6 {font-size: 16px; color: #FFFFFF; }
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
.style7 {font-size: 36px}
.style9 {font-size: 16px; color: #000000; }
-->
</style>
<body>
<?php 
include 'conn.php';

$id = $_GET['var'];


$qry = "SELECT * from commercial where c_id = $id";
$result = mysql_query($qry);
if($result)
{
 while($row = mysql_fetch_array($result))
{
?>
<table width="923" height="30" border="0" align="center" bordercolor="#FFFFFF" bgcolor="#009999">
  <tr>
    <td width="120" bgcolor="#999999"><span class="style6">Plot No.</span></td>
    <td width="801" bgcolor="#CCCCCC"><span class="style9"><?php echo $row["c_plotno"]; ?></span></td>
  </tr>
  <tr>
    <td width="120" bgcolor="#999999"><span class="style6">Bazar no.</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["c_bazarno"]; ?></span></td>
  </tr>
  <tr>
    <td width="120" bgcolor="#999999"><span class="style6">Size</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["c_size"]; ?></span></td>
  </tr>
  <tr>
    <td width="120" bgcolor="#999999"><span class="style6">Unit Type </span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["c_unit"]; ?></span></td>
  </tr>
  <tr>
    <td width="120" bgcolor="#999999"><span class="style6">Sector </span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["c_sector"]; ?></span></td>
  </tr>
  <tr>
    <td width="120" bgcolor="#999999"><span class="style6">Price</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["c_price"]; ?></span></td>
  </tr>
  <tr>
    <td width="120" bgcolor="#999999"><span class="style6">Condition</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["c_condition"]; ?></span></td>
  </tr>
  <tr>
    <td width="120" bgcolor="#999999"><span class="style6"> Description</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["c_desc"]; ?></span></td>
  </tr>
  <tr>
  <td width="120" bgcolor="#999999"><span class="style6">Picture</span></td>
  <td bgcolor="#CCCCCC"><span class="style9"><img src=./<?php echo $row['c_pic']; ?> width="800" height="600" /></span></td>
  </tr>
  
	<?php } }?>
  <td width="120"></tr>
</table>
