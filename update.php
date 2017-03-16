<?php
include 'connectmysql.php';

$hoby = $_POST['hoby'];
$inter = $_POST['interest'];
$path = include 'file_upload.php';
     $qry = "INSERT INTO `bs-forum`.`user-profile`(
`userPic`, 'user_hoby', 'user_interest') VALUES 
('$path', '$hoby', '$inter')";
  $result = mysql_query($qry) or die (mysql_error());
  if($result)
  {
 header("location:profile.php");
  }
  else
  {
  print "error";
  }  
	  ?>