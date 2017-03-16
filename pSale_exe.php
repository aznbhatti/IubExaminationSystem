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
 $ofadd = $_POST["oadd"];
 $mob = $_POST["mob"];
 $ph = $_POST["ph"];
 $pno = $_POST["pno"];
 $st = $_POST["st"];
 $sector = $_POST["sector"];
$date = date("Y-m-d");
$pid = $_GET['var'];


$qry = "INSERT INTO customers (Cust_CNIC, Cust_FirstName, Cust_LastName, Cust_Address, Cust_City, Cust_Country, Cust_OfficeAddress, Cust_Mob, Cust_Phone, `h_id`, `c_id`, `p_id`) VALUES ('$cnic', '$fname', '$lname', '$add', '$city', '$country', '$ofadd', '$mob', '$ph', '0', '0', '$pid' )";
$irslt = mysql_query($qry);

	if($irslt)
	{
		/*
		$cqry = "select Cust_Id from customers where Cust_CNIC = $cnic";
		$result = mysql_query($cqry) or die (mysql_error("Error"));
			if($result)
			{
				while($custrow = mysql_fetch_assoc($result))
				{
					$cust_id = $custrow['cust_d'];
						
						$cqry = "SELECT p_id from plot where p_no = $pno AND p_st = $st";
						$cresult = mysql_query($cqry);
						if($cresult)
						{
							
							
							while($crow = mysql_fetch_array($cresult))
							{	
							*/	
								
								//$pid = $crow["p_id"];
								$sqry = "SELECT * from stock where p_id = $pid";
								$srst = mysql_query($sqry);
								if($srst)
								{
									while($srow = mysql_fetch_assoc($srst))
									{
									 	
										$stock_id = $srow["stock_id"];
										
										if($srow["status"] == "Available")
										{
											$pu =mysql_query("UPDATE `realestate`.`purchase` SET status = 'Sold' where stock_id = $stock_id");
											
											$ur = "UPDATE stock SET status = 'Sold' where p_id = $pid";
											$uresult = mysql_query($ur) or die(mysql_error("Error"));
											if($uresult)
											{
												$stqry = "SELECT status from stock where p_id = $pid";
												$rest = mysql_query($stqry) or die(mysql_error("Error"));								
													if($rest)
													{
														while($statrow = mysql_fetch_assoc($rest))
														{
															$status = $statrow['status'];
															$sqry = "INSERT INTO sales (`stock_id`, `Cust_CNIC`, `staff_id`, `status`, `date`) 
															VALUES ('$stock_id', '$cnic', '$staff_id', '$status', '$date')";
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
										else
										{
											header("location:login-file.php");
										}			
									}
							
								}
							}
			/*
						}
					}
			}
	}*/
	
		
	
?>