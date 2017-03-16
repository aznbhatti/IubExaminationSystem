<?php
	require_once('auth.php');
include 'conn.php';
require_once('file_des.php');
//require_once('phouse_exe2.php');
//include 'file_des.php';
$uid = $_SESSION['SESS_USER_ID'];
$fname =$_POST["fname"];
 $lname = $_POST["lname"];
 $nic = $_POST["cnic"];
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
$price = $_POST["price"];
$bed = $_POST["br"];
$bath = $_POST["baths"];
$dd = $_POST["dd"];
$kitchen = $_POST["kitchen"];
$lounge = $_POST["lounge"];
$car = $_POST["cp"];
$con = $_POST["con"];
$des = $_POST["des"];
$type = $_POST["type"];
$date = date("Y-m-d");
$pid = $_GET['var'];
//$nic = $cnic;

$file = mysql_real_escape_string(trim($_FILES['file']['name']));
//$file_type = $_FILES['file']['type'];
//$file_size = $_FILES['file']['size'];

//do some checks to make sure the person upload the file type you like

//if (($file_type == filetype) // check for the size also
  //  && ($file_size > 0)) {
    //if ($_FILES['file']['error'] == 0) {
      // Move the file to the target upload folder
      $target = GW_UPLOADPATH . $file;
      if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
        // Write the data to the database
        
 


$hqry = "INSERT INTO `house` (`h_st`, `h_no`, `h_sector`, `h_size`, `h_price`, `h_desc`, `h_bed`, `h_baths`, `h_dd`, `h_kitchen`, `h_loung`, `h_carparking`, `h_conditions`, `h_type`, h_pic) VALUES
('$st', '$hno', '$sector', '$size', '$price', '$des', '$bed', '$bath', '$dd', '$kitchen', '$lounge', '$car', '$con', '$type', '$target')";
$hresult = mysql_query($hqry) or die (mysql_error("Error"));
	if($hresult)
	{
	$sqry = "Select h_id from house where h_st = $st AND h_no = $hno";
	$sresult = mysql_query($sqry);
	if($sresult)
	{
	while($srow = mysql_fetch_array($sresult))
	{
					$hid = $srow["h_id"];
					//print $hid;
					$cqry = "INSERT INTO `realestate`.`customers` (`Cust_CNIC`, `Cust_FirstName`, `Cust_LastName`, `Cust_Address`, `Cust_City`, `Cust_Country`, `Cust_OfficeAddress`, `Cust_Mob`, `Cust_Phone`,`h_id`, `c_id`, `p_id` ) VALUES ('$nic', '$fname', '$lname', '$add', '$city', '$country', '$ofadd', 
					'$mob', '$ph', '$hid', '0', '0')";
					$cresult = mysql_query($cqry);
						if($cresult)
						{
							//$csqry = "SELECT `cust_id` FROM `realestate`.`customers` WHERE `Cust_CNIC` = $nic AND `Cust_Mob` = $mob";
							
						//	$csresult = mysql_query($csqry);
							
							//if($csresult)
							//{
							
								//while($crow = mysql_fetch_array($csresult))
								//{	//echo $crow['cust_id'];
									//$cid = $crow["Cust_Id"];
									//echo $cid;
									//$stqry = instock($hid, $cid);
								
									$stqry = "INSERT INTO `stock` (`h_id`, `p_id`, `c_id`, `staff_id`, `status`) VALUES ('$hid', '0', '0', '$uid', 'Available')";
									$stresult = mysql_query($stqry) or die(mysql_error());
									if($stresult)
									{
										$stk = "SELECT `stock_id` FROM `stock` WHERE `h_id` = $hid";
										$stkr = mysql_query($stk) or die(mysql_error());
										if($stkr)
										{	
											while($strow = mysql_fetch_array($stkr))
											{
												$stid = $strow["stock_id"];
												//$phqry = inpurchas($hid, $cid, $stid);
												$phqry = "INSERT INTO `purchase` (`staff_id`, `stock_id`, `status`, `date`, `Cust_CNIC`) VALUES ('$uid', '$stid', 'Available', '$date', '$nic')";
												$phresult = mysql_query($phqry);
												if($phresult)
												{
													header("location: tab.php");
												}

											//}
									//	}
									}

								}
							}
							
						}
					}
			}
	}
	
}


?>

