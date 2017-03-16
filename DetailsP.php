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


$qry = "SELECT * from plot where p_id = $id";
$result = mysql_query($qry);
if($result)
{
 while($row = mysql_fetch_array($result))
{
//echo getcwd() . "\n";
?>
<table width="916" height="30" border="0" align="center" bordercolor="#009999" bgcolor="#009999">
  <tr>
    <td width="105" bgcolor="#999999"><span class="style6">Street No.</span></td>
    <td width="801" bgcolor="#CCCCCC"><span class="style9"><?php echo $row["p_st"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6">Plot no.</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["p_no"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6"> Sector</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["p_sector"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6">Plot Size </span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["p_size"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6"> Price</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["p_price"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6">Plot Condition</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["p_condition"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6">Scheme</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["p_scheme"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6">City</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["p_city"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6">Description</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["p_desc"]; ?></span></td>
  </tr>
  <tr>
  <td bgcolor="#999999"><span class="style6">Pictures</span></td>
  <td bgcolor="#999999"><span class="style9"><img src=./<?php echo $row['p_pic']; ?> width="800" height="600"/></span></td>
  <?php } }?>
  </tr>
</table>
