<?php

require_once('auth.php');


$select = $_POST['select'];
	if($select == 'commercial')
	{
		header("location:commercialrpt.php");
	}
	else if($select =='plot')
		{
			header("location:plotrpt.php");
		}
		else if($select == 'h')
			{
				header("location:houserpt.php");
			}
			else
			{
				header("location:staffreport.php");
			}

?>