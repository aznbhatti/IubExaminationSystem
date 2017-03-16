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
 $pno = $_POST["pno"];
 $date = date("Y-m-d");

$qry = "INSERT INTO customers (Cust_CNIC, Cust_FirstName, Cust_LastName, Cust_Address, Cust_City, Cust_Country, Cust_OfficeAddress, Cust_Mob, Cust_Phone) VALUES ('$cnic', '$fname', '$lname', '$add', '$city', '$country', '$ofadd', '$mob', '$ph')";
$irslt = mysql_query($qry);

	if($irslt)
	{
		
		$cqry = "select Cust_Id from customers where Cust_CNIC = $cnic";
		$result = mysql_query($cqry) or die (mysql_error("Error"));
			if($result)
			{
				while($custrow = mysql_fetch_assoc($result))
				{
					$cust_id = $custrow['Cust_Id'];
						
						$cqry = "SELECT c_id from commercial where c_plotno = $pno";
						$cresult = mysql_query($cqry) or die (mysql_error("Error"));
						if($cresult)
						{
							
							
							while($crow = mysql_fetch_array($cresult))
							{	
								echo $crow['c_id'];
								
								$cid = $crow["c_id"];
								$sqry = "SELECT * from stock where c_id = $cid";
								$srst = mysql_query($sqry);
								if($srst)
								{
									while($srow = mysql_fetch_assoc($srst))
									{
									 	
										$stock_id = $srow["stock_id"];
										
										if($srow["status"] == "available")
										{
											$ur = "UPDATE stock SET status = 'Sold', cust_id = '$cust_id' where c_id = $cid";
											$uresult = mysql_query($ur) or die(mysql_error("Error"));
											if($uresult)
											{
												$stqry = "SELECT status from stock where c_id = $cid";
												$rest = mysql_query($stqry) or die(mysql_error("Error"));								
													if($rest)
													{
														while($statrow = mysql_fetch_assoc($rest))
														{
															$status = $statrow['status'];
															$sqry = "INSERT INTO sales (stock_id, Cust_id, staff_id, status, Date) 
															VALUES ('$stock_id', '$cust_id', '$staff_id', '$status', '$date')";
															$sresult = mysql_query($sqry) or die (mysql_error("Error"));
															if($sresult)
															{
																header("location:login-file.php");
																echo "Property sold";
															}
														}
													}
											}
										}
										else
										{
											header("location:login-file.php");
										}			
									}
							
								}
							}
			
						}
					}
			}
	}
	
		
	?>
