<?php
include 'conn.php';
	require_once('auth.php');
	
?>

 <!--<title>Real Estate Management System</title>
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">-->
 <!--<link rel="stylesheet" href="ui.css" type="text/css" />
  <script src="jquery.js"></script>
  <script src="tabs.js"></script>

  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>-->

<style type="text/css">
<!--
.style1 {color: #000033; font-size:24px;z}
.style2 {color: #000033}
.style4 {color: #000033; font-size:16px;}
.style6 {color: #000000; font-weight: bold; }
.style8 {color: #000033; font-weight: bold; }
.date {color:#000000; font-size:14px; text-align:center;}
a:link {
	text-decoration: none;
	color: #000000;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #FFFFFF;
}
a:active {
	text-decoration: none;
	color: #000000;
}
body {
	background-color: #009999;
}
.style9 {
	color: #000000;
	font-size: 16px;
}

-->
</style>

</head>
<body>
<p> <h2> Wellcome to the Examination System</h2></p>
</p>
 
   
 
 
 <form name="Sale" method="post" action="">
   <table width="800" border="0" align="center"> 
   
	<?php 
	/*	
	
	   $qry = "SELECT     purchase.date, house.*, stock.status
FROM         house INNER JOIN
                      stock ON house.h_id = stock.h_id INNER JOIN
                      purchase ON stock.stock_id = purchase.stock_id";
	   $result = mysql_query($qry) or die(mysql_error("error"));
	   if($result)
	   {
	   while($row = mysql_fetch_array($result))
	   {
	   $st_no = $row["h_st"];
	   $ho_no = $row["h_no"];
	   $h_sector = $row["h_sector"];
	   $h_price = $row["h_price"];
	   $h_size = $row["h_size"];
	   $h_id = $row["h_id"];
	   $st = $row["status"];
	   $hdate = $row["date"];
	   
	  */ ?>
	 <tr bgcolor="#CCCCCC">
	 
	
       <td width="75">&nbsp;</td>
	   			   
	    
	   
	   <td width="100" class="date">
     	 </table>
</form>
 <p>
</p>

 <p>&nbsp; </p>
</body>
</html>
