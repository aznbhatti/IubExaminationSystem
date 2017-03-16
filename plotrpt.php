<?php 
require_once('auth.php');
$no = 1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Plot Report</title>
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

<table width="1305" border="0" align="left" bordercolor="#000000" bgcolor="#009999">
  
  <tr bgcolor="#666666">
    <td width="28"><div align="center" class="style2 style3">S. No </div></td>
    <td bordercolor="#000000"><div align="center" class="style4">
      <div align="center">Purchase Person </div>
    </div></td>
	<td width="100" bordercolor="#000000"><div align="center" class="style4">Purchase Date</div></td>
    <td><div align="center" class="style4">Pur. Customer Name </div></td>
	<td><div align="center" class="style4">Pur. Customer CNIC </div></td>
	<td><div align="center" class="style4">Sale Customer Name</div></td>
    <td><div align="center" class="style4">Sale Customer CNIC </div></td>
    <td><div align="center" class="style4">Plot No. </div></td>
    <td><div align="center" class="style4">Street No. </div></td>
    <td><div align="center" class="style4">Price</div></td>
    <td><div align="center" class="style4">Size</div></td>
    <td><div align="center" class="style4">Sector</div></td>
    <td><div align="center" class="style4">Scheme</div></td>
    <td><div align="center" class="style4">Status</div></td>
    <td><div align="center" class="style4">Description</div></td>
    <td><div align="center" class="style4">Sale Person </div></td>
    <td><div align="center" class="style4">Sale Date</div></td>
  </tr>
 <?php $id = $_SESSION['SESS_USER_ID'];
 include 'conn.php';
  
  $qry = "SELECT     stock.status, stock.stock_id, staff.staff_name, customers.Cust_CNIC, customers.Cust_FirstName, customers.Cust_LastName, plot.p_no, plot.p_st, plot.p_sector, plot.p_size, plot.p_price, 
                      plot.p_condition, plot.p_scheme
FROM         customers INNER JOIN
                      stock ON customers.p_id = stock.p_id INNER JOIN
                      staff ON stock.staff_id = staff.staff_id INNER JOIN
                      plot ON stock.p_id = plot.p_id"; //INNER JOIN
					  //purchase ON purchase.Cust_CNIC = customers.Cust_CNIC";
  $result = mysql_query($qry) or die(mysql_error());
  	if($result)
	{
		while($row = mysql_fetch_array($result))
		{			
					$pno = $row['p_no'];
					$bno = $row['p_st'];
					$cond = $row['p_condition'];
					$size = $row['p_size'];
					$price = $row['p_price'];
					$sector = $row['p_sector'];
					$cnic = $row['Cust_CNIC'];
					$fname = $row['Cust_FirstName'];
					$lname = $row['Cust_LastName'];
					$name = $fname." ".$lname;
					$scheme = $row['p_scheme'];
					$sid = $row['stock_id'];				
  
					$pqry = "Select * from purchase where stock_id = $sid";//AND Cust_CNIC = $cnic";
					$presult = mysql_query($pqry) or die(mysql_error());
					if($presult)
					{
						while($prow = mysql_fetch_array($presult))
						{
							$pdate = $prow['date'];
							$stid = $prow['staff_id'];
							$pnic = $prow['Cust_CNIC'];
							
							$sqry = "Select staff_name from staff where staff_id = $stid";
							$sresult = mysql_query($sqry) or die(mysql_error());
							if($sresult)
							{
								while($srow = mysql_fetch_array($sresult))
								{
									$pnam = $srow['staff_name'];
								
				?>
  
  <tr>
    <td width="28" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $no++; ?></div></td>
    <td width="118" bordercolor="#000000" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $pnam; ?> </div></td>
	<td bgcolor="#CCCCCC" bordercolor="#000000" > <div align="center" class="style5"><?php echo $pdate; }
							}
						}
					}?></div></td>
	<?php 
	/*
	$ppr = "SELECT customers.Cust_FirstName, customers.Cust_LastName, purchase.Cust_CNIC from customers INNER JOIN purchase on  customers.Cust_CNIC = purchase.Cust_CNIC";
	$ppqry = mysql_query($ppr) or die(mysql_error());
	if($ppqry)
	{
	while($pprow = mysql_fetch_array($ppqry))
	{
		$ppfName = $pprow['Cust_FirstName'];
	$pplName = $pprow['Cust_LastName'];
	$ppName = $ppfName." ".$pplName;
	$ppcnic = $pprow['Cust_CNIC'];*/
	 ?>
    <td width="110" bgcolor="#CCCCCC"><div align="center" class="style5"><?php  if($pnic =  $cnic){ echo $name; ?></div></td>
	    <td width="112" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $cnic; }//} } ?></div></td>

	<td width="110" bgcolor="#CCCCCC"><div align="center" class="style5"><?php $spr = "SELECT customers.Cust_FirstName, customers.Cust_LastName, sales.Cust_CNIC from customers INNER JOIN sales on  customers.Cust_CNIC = sales.Cust_CNIC";
	$spqry = mysql_query($spr) or die (mysql_error());
	if($spqry)
	{
	while($sprow = mysql_fetch_array($spqry))
	{
	$spfName = $sprow['Cust_FirstName'];
	$splName = $sprow['Cust_LastName'];
	$spName = $spfName." ".$splName;
	$spcnic = $sprow['Cust_CNIC'];
	echo $spName;
	  ?></div></td>	
    <td width="112" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $spcnic; } }  ?></div></td>
    <td width="45" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $pno; ?></div></td>
    <td width="48" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $bno; ?></div></td>
    <td width="97" bgcolor="#CCCCCC"><div align="center" class="style5">Rs. <?php echo $price; ?></div></td>
    <td width="38" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $size; ?></div></td>
    <td width="44" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $sector; ?></div></td>
    <td width="75" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $scheme; ?></div></td>
    <td width="84" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $row['status']; ?></div></td>
    <td width="128" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $cond; ?></div></td>
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
	
    <td width="120" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $sname; ?></div></td>
    <td width="96" bgcolor="#CCCCCC"><div align="center" class="style5"><?php echo $sdate; }
			}
		}	
	} ?></div></td>
  </tr>
<?php }
			}
		 
	?></table>
<p><input type="button" id="but"onClick="printPage()" value="Print The Report" /></p>



</body>
</html>
