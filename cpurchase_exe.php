<?php
	require_once('auth.php');
include 'conn.php';
require_once('file_des.php');
$uid = $_SESSION['SESS_USER_ID'];
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
 $bno = $_POST["bno"];
 $sector = $_POST["sector"];
 $size = $_POST["size"];
$price = $_POST["price"];
$con = $_POST["con"];
$unit = $_POST["unit"];
$des = $_POST["des"];
$date = date("Y-m-d");
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

$hqry = "INSERT INTO `realestate`.`commercial` (`c_plotno`, `c_sector`, `c_unit`, `c_size`, `c_bazarno`, `c_price`, `c_condition`, `c_desc`, `c_pic`) VALUES
('$pno', '$sector', '$unit', '$size', '$bno', '$price', '$con', '$des', '$target')";
$hresult = mysql_query($hqry);
	if($hresult)
	{
		$sqry = "Select c_id from `realestate`.`commercial` WHERE c_plotno = $pno AND c_bazarno = $bno";
		$sresult = mysql_query($sqry);
			if($sresult)
			{
				while($srow = mysql_fetch_array($sresult))
				{
					$cid = $srow["c_id"];
					$cqry = "INSERT INTO customers (Cust_CNIC, Cust_FirstName, Cust_LastName, Cust_Address, Cust_City, Cust_Country, 
					Cust_OfficeAddress, Cust_Mob, Cust_Phone, `h_id`, `c_id`, `p_id` ) VALUES ('$cnic', '$fname', '$lname', '$add', '$city', '$country', '$ofadd', 
					'$mob', '$ph', '0', '$cid', '0')";
					$cresult = mysql_query($cqry);
						if($cresult)
						{
							/*$csqry = "SELECT Cust_Id from customers where Cust_CNIC = $cnic";
							$csresult = mysql_query($csqry) or die(mysql_error());
							if($csresult)
							{
								while($crow = mysql_fetch_assoc($csresult))
								{	
									$cust = $crow['Cust_Id'];
									*/
									$stqry = "INSERT INTO `stock` (`h_id`, `p_id`, `c_id`, `staff_id`, `status`) VALUES ('0', '0', '$cid', '$uid', 'Available')";
									$stresult = mysql_query($stqry) or die(mysql_error());
									if($stresult)
									{
										$stk = "SELECT stock_id from stock where c_id = $cid";
										$stkr = mysql_query($stk) or die(mysql_error());
										if($stkr)
										{	
											while($strow = mysql_fetch_assoc($stkr))
											{
												$stid = $strow['stock_id'];
												$phqry = "INSERT INTO `purchase` (`staff_id`, `stock_id`, `status`, `date`, `Cust_CNIC`) VALUES ('$uid', '$stid', 'Available', '$date', '$cnic')";
												$phresult = mysql_query($phqry);
												if($phresult)
												{
													header("location: tab.php");
												}

											}
										}
									}

								}
							}
							
						}
					}
			}
	/*}
	}*/

?>

