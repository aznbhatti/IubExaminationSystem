<?php

require_once('auth.php');


$select = $_POST['select'];
	if($select == 'commercial')
	{
		header("location:creport.php");
	}
	else if($select =='plot')
		{
			header("location:preport.php");
		}
		else if($select == 'h')
			{
				header("location:hreport.php");
			}
			else
			{
				header("location:reports.php");
			}

?>