	
	<?php
	require_once('auth.php');
	include 'conn.php';
	 $staff_id = $_SESSION['SESS_USER_ID'];
	 $fname =$_POST["fname"];
	 $lname = $_POST["lname"];
	 $cnic = $_POST["cnic"];
	 $add = $_POST["address"];
	 $city = $_POST["city"];
	 $country = $_POST["country"];
	 $ofadd = $_POST["officeadd"];
	 $mob = $_POST["mob"];
	 $ph = $_POST["phone"];
	$hno = $_POST["hno"];
	 $st = $_POST["st"];
	 $sector = $_POST["sector"];
	 $size = $_POST["size"];
	$date = date("Y-m-d");
	$hid = $_POST["id"];
	
	
	
		
	$qry = "INSERT INTO customers (Cust_CNIC, Cust_FirstName, Cust_LastName, Cust_Address, Cust_City, Cust_Country, Cust_OfficeAddress, Cust_Mob, Cust_Phone, h_id) VALUES ('$cnic', '$fname', '$lname', '$add', '$city', '$country', '$ofadd', '$mob', '$ph', '$hid')";

	
		if($irslt = mysql_query($qry))
		{
		
			$cqry = "SELECT * FROM customers WHERE Cust_CNIC = ".$cnic;
			
			$result = mysql_query($cqry) or die (mysql_error("Error"));
				if($result)
				{
			
					while($val = mysql_fetch_array($result))
					{
					//var_dump($val[]); exit();
						 $cid = $val['cust_id'];
						 $GLOBALS['cid'];
	
						}
					}
			}
					
  			$sqry = "SELECT * FROM stock where h_id = ".$hid;
			$srst = mysql_query($sqry);
			
			if($srst)
			{
				while($srow = mysql_fetch_array($srst))
				{
					$sid = $srow["stock_id"];						
					if($srow["status"] == "Available")
					{							
						$uqry = "UPDATE  `realestate`.`stock` SET  `status` =  'Sold' WHERE  `stock`.`stock_id` =".$sid;
					//print $hid;	
						$urval = mysql_query($uqry);
					//print $urval;
						if($urval)
						{
						$stqry = "SELECT status from stock where h_id =".$hid;
						$rest = mysql_query($stqry) or die(mysql_error("Error"));								
						if($rest)
						{
						while($statrow = mysql_fetch_array($rest))
						{
							$status = $statrow['status'];						
							$sqry = "INSERT INTO sales (stock_id, cust_id, staff_id, status, date) VALUES ('$sid', '$cid', '$staff_id', '$status', '$date')";
							$sresult = mysql_query($sqry) or die (mysql_error("Error"));
							if($sresult)
							{
								header("location:tab.php");
								echo "Property sold";
							}
						}
						}
					}
				}
				}
				}
				
				else
				{
												header("location:tab.php");
											}			
			
			
			?>