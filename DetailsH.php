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
.style10 {color: #FFFFFF}
-->
</style>

<body>
<?php 
include 'conn.php';

$id = $_GET['var'];

//$imagepath = $_SERVER['DOCUMENT_ROOT'].'RealEstateManagementSystem/'; 
$qry = "SELECT * from house where h_id = $id";
$result = mysql_query($qry);
if($result)
{
 while($row = mysql_fetch_array($result))
{

//print_r($row);
?>
<table width="922" height="355" border="0" align="center" bordercolor="#009999" bgcolor="#009999">
  <tr>
    <td width="112" bgcolor="#999999"><span class="style6">St No.</span></td>
    <td width="800" bgcolor="#CCCCCC"><span class="style9"><?php echo $row["h_st"]; ?></span></td>
  </tr>
  <tr>
    <td height="29" bgcolor="#999999"><span class="style6">House no.</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["h_no"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6"> Sector</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["h_sector"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6">House Size </span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["h_size"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6"> Price</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["h_price"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6">Bed Rooms</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["h_bed"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6">Baths</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["h_baths"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6"> DD</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["h_dd"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6">Kitchen</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["h_kitchen"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6">Lounge</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["h_loung"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6">Car Parking </span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["h_carparking"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6">Condition</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["h_conditions"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6">Description</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["h_desc"]; ?></span></td>
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style6">Type</span></td>
    <td bgcolor="#CCCCCC"><span class="style9"><?php echo $row["h_type"]; ?></span></td>
	
  </tr>
  <tr>
    <td bgcolor="#999999"><span class="style10">Picture</span></td>
    <td bgcolor="#CCCCCC"><img src=./<?php echo $row['h_pic'];?> width="800" height="600" /></td>
  </tr>
  <?php } }?>
</table>
