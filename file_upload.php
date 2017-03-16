<?php
include "connectmysql.php";

$hoby = $_POST['hoby'];
$inter = $_POST['interest'];

$qry = "INSERT INTO `bs-forum`.`user-profile`
('user_hoby', 'user_interest') VALUES 
('$hoby', '$inter')";
  
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
  <?php

 if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("img/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
  $image = move_uploaded_file($_FILES["file"]["tmp_name"],
      "img/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "img/" . $_FILES["file"]["name"];
      $qry = "INSERT INTO `bs-forum`.`user-profile`(
`userPic`) VALUES 
('$image')";
  $result = mysql_query($qry) or die (mysql_error());
  if($result)
  {
 header("location:profile.php");
  }
  else
  {
  print "error";
  }  
	  }  
	  }
 	?>