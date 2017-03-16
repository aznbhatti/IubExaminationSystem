<?php

$p = $_POST["select"];
	if($p == "Plot")
	{
		header("location: purplot.php");
	}else if($p == "House")
			{
				header("location: purhom.php");
			}else if($p == "Commercial")
			{
				header("location: purcom.php");
			
			}
		
			
			


?>