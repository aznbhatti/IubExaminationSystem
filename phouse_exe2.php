<?php
require_once('auth.php');
include 'conn.php';
$uid = $_SESSION['SESS_USER_ID'];
$date = date("Y-m-d");
class inser{
public $hid;
public $cid;
function instock($hid, $cid)
{
$stqry = "INSERT INTO `stock` (`h_id`, `p_id`, `c_id`, `Cust_Id`, `staff_id`, `status`) VALUES ('$hid', '0', '0', '$cid', '$uid', 'Available')";
return $stqry;
}
function inpurchas($hid, $cid, $stid)
{
$phqry = "INSERT INTO `purchase` (`staff_id`, `Cust_Id`, `stock_id`, `status`, `date`) VALUES ('$uid', '$cid', '$stid', 'Available', '$date')";
return $phqry;}
}

?>
