<?php 
require_once('auth.php');
$no = 1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Commercial Report</title>
<style type="text/css">
<!--
.style1 {font-size: 36px}
body {
	background-color: #009999;
}
a:link {
	text-decoration: none;
	color: #000000;
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
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
.style3 {font-size: 14px}
.style4 {color: #FFFFFF; font-weight: bold; font-size: 14px; }
.style5 {font-size: 12px}

.hide{
display:none;
}

.show{
display:block;
}
-->
</style>
<script language="javascript" type="text/javascript">
function printPage(){

document.getElementById('but').style.display='none';
window.print();
document.getElementById('but').style.display='block';

}
</script>
</head>

<body>
<table width="1172" border="0" align="center" bordercolor="#000000" bgcolor="#009999">
  
  <tr bgcolor="#666666">
    <td width="23"><div align="center" class="style2 style3">S. No </div></td>
    <td bordercolor="#000000"><div align="center" class="style4">Purchase Person </div></td>
	<td width="89" bordercolor="#000000"><div align="center" class="style4">Purchase Date</div></td>
    <td><div align="center" class="style4">Customer Name</div></td>
    <td><div align="center" class="style4">Customer CNIC </div></td>
    <td><div align="center" class="style4">Plot No. </div></td>
    <td><div align="center" class="style4">Street No. </div></td>
    <td><div align="center" class="style4">Price</div></td>
    <td><div align="center" class="style4">Size</div></td>
    <td><div align="center" class="style4">Sector</div></td>
    <td><div align="center" class="style4">Unit</div></td>
    <td><div align="center" class="style4">Status</div></td>
    <td><div align="center" class="style4">Description</div></td>
    <td><div align="center" class="style4">Sale Person </div></td>
    <td><div align="center" class="style4">Sale Date</div></td>
  </tr>
 <?php $id = $_SESSION['SESS_USER_ID'];
   include 'conn.php';
 
  
  $qry = "SELECT     stock.stock_id, staff.staff_id, staff.staff_name, customers.Cust_CNIC, customers.Cust_FirstName, customers.Cust_LastName, commercial.c_plotno, commercial.c_sector, 
                      commercial.c_unit, commercial.c_size, commercial.c_bazarno, commercial.c_price, stock.status, commercial.c_desc
FROM         commercial INNER JOIN
                      stock ON commercial.c_id = stock.c_id INNER JOIN
                      staff ON stock.staff_id = staff.staff_id INNER JOIN
                      customers ON stock.c_id = customers.c_id";
  $result = mysql_query($qry) or die(mysql_error());
  	if($result)
	{
		while($row = mysql_fetch_array($result))
		{			
					$pno = $row['c_plotno'];
					$bno = $row['c_bazarno'];
					$unit = $row['c_unit'];
					$size = $row['c_size'];
					$price = $row['c_price'];
					$cond = $row['c_desc'];
					$sector = $row['c_sector'];
					$cnic = $row['Cust_CNIC'];
					$fname = $row['Cust_FirstName'];
					$lname = $row['Cust_LastName'];
					$name = $fname." ".$lname;
					$se = $row['staff_name'];
					$sid = $row['stock_id'];
						
  
					$pqry = "Select staff_id, date from purchase where stock_id = $sid";
					$presult = mysql_query($pqry) or die(mysql_error());
					if($presult)
					{
						while($prow = mysql_fetch_array($presult))
						{
							$pdate = $prow['date'];
							$stid = $prow['staff_id'];
							$sqry = "Select staff_name from staff where staff_id = $stid";
							$sresult = mysql_query($sqry) or die(mysql_error());
							if($sresult)
							{
								while($srow = mysql_fetch_array($sresult))
								{
									$pnam = $srow['staff_name'];
								
				?>
  
  <tr>
    <td width="23" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $no++; ?></div></td>
    <td width="102" bordercolor="#000000" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $pnam; ?> </div></td>
	<td bgcolor="#CCCCCC" bordercolor="#000000" > <div align="center" class="style5"><?php echo $pdate; }
							}
						}
					}?></div></td>
	
    <td width="117" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $name; ?></div></td>
    <td width="109" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $cnic; ?></div></td>
    <td width="40" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $pno; ?></div></td>
    <td width="49" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $bno; ?></div></td>
    <td width="78" bgcolor="#CCCCCC"><div align="center" class="style5">Rs. <?php echo $price; ?></div></td>
    <td width="40" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $size; ?></div></td>
    <td width="50" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $sector; ?></div></td>
    <td width="33" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $unit; ?></div></td>
    <td width="60" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $row['status']; ?></div></td>
    <td width="150" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $cond; ?></div></td>
	<?php
		
	 $salqry = "Select staff_id, date from sales where stock_id = $sid";
	$salresult = mysql_query($salqry) or die(mysql_error());
	if($salresult)
	{
		while($salrow = mysql_fetch_array($salresult))
		{
			$staff = $salrow['staff_id'];
			$sdate = $salrow['date'];
			$staqry = "SELECT staff_name from staff where staff_id =$staff";
			$staresult = mysql_query($staqry) or die(mysql_error());
			if($staresult)
			{
				while($starow = mysql_fetch_array($staresult))
				{
					$sname = $starow['staff_name'];
				?>
	
    <td width="100" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $sname; ?></div></td>
    <td width="70" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $sdate; }
			}
		}	
	} ?></div></td>
  </tr>
<?php }
			}
		 
	?></table>
<p>
<input type="button" id="but"onClick="printPage()" value="Print The Report" /></p>

</body>
</html>
