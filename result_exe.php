<?php 
	include 'connectmysql.php';
	$roll_no = $_POST['roll_no'];
	
	$qry="SELECT * FROM 1st_sam";
	$result=mysql_query($qry);
while($row = mysql_fetch_assoc($result)){
if($row['roll_no']== $roll_no)
{
$roll_no = $row["roll_no"];
$name = $row["name"];
$sam = $row["samester"];
$intro = $row["intro_computer"];
$algo = $row["algo"];
$eng = $row["english"];
$pak_study = $row["pak_study"];
$math = $row["math"];
$acc = $row["accounting"];
$cgpa = $row["cgpa"];
}
if($row['roll_no']== "" )
{
echo "Roll No does not exist";
}
}

?>

<html>
<head>
<title>Result </title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:689px;
	top:175px;
	width:253px;
	height:738px;
	z-index:1;
}
.style1 {color: #FFFFFF}
-->
        </style>
</head>
    <body>
        <div id="Layer1">
          <div class="sidebar">
            <div id="search"></div>
            <div class="sidebarads">
              <div align="center"><img src="images/AZNH.JPG" width="125" height="150" border="4">              </div>
              <div id="div"></div>
            </div>
            <ul>
    <li class="pagenav">
                <h2>Menu</h2>
                <ul>
                  <li class="page_item page-item-2"><a href="index.php" title="Home">Home</a></li>
                  <li class="page_item page-item-10"><a href="contact.php?page_id=10" title="Contact">Contact</a></li>
                  <li class="page_item page-item-8"><a href="signup.php?page_id=8" title="Forum">Register</a></li>
                  <li class="page_item page-item-9"><a href="http://www.free-css-templates.com/wordpress/?page_id=9" title="Free Stuff">Gallary</a></li>
                  <li class="page_item page-item-7"><a href="result.php?page_id=7" title="Links">Results</a></li>
                </ul>
              </li>
              <li>
                <h2 class="entry style1">Login Here </h2>
                <ul>
                  <li class="cat-item cat-item-3">
				  <form name="form1" method="post" action="login-exec.php">
                    <table width="200" border="0" cellspacing="0">
    <tr class="Layer1">
      <td width="100"><span class="style1"><b>Login</b></span></td>
      <td width="100"><label>
        <input name="u_id" type="text" id="u_id" />
      </label></td>
    </tr>
    <tr class="Layer1">
      <td><span class="style1"><b>Password</b></span></td>
      <td><label>
        <input name="pass" type="password" id="pass" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Login" /></td>
    </tr>
  </table>
					</form>
                  </li>
                </ul>
              </li>
              <li>
                <h2>News</h2>
                <table width="150" height="200">
				<tr><marquee direction="up" scrolldelay="150">
				<ol class="Layer1">
                  <li>This site is Under Contruction</li>
                	<li>All the BSCS Students get the results and information about his previous progress that would be see here.</li>
					<li>I hope all the students get most benifit from this site</li>
				<li>Plz Pray for me</li>
				</ol>
				</marquee></tr>
				</table>
              </li>
            </div>
        </div>
        <div id="wrapper">
            <div id="header">
            	<div id="header_left">
	                <h1>
	                	
	                        BS	Forum					</h1>
					<h2>The Islamia Univeristy of Bahawalpur<br />(Bahawalnagar Campus) </h2>
			  </div>
				<div id="header_right">
					<div class="rss">					  <img src="images/rss.gif" alt="RSS Feeds" width="25" height="15" align="absmiddle">&nbsp;&nbsp;RSS Posts </div>
					<div class="rss">
						<a href="#"><img src="images/rss.gif" alt="RSS Feeds" width="25" height="15" align="absmiddle">&nbsp;&nbsp;RSS Comments</a>					</div>
				</div>
            </div>
	<div id="content">
		<div id="container">
						<div class="post">
				<h2 class="title">Result</h2>
				<div class="entry"><center><strong>Result</strong></center>
<hr />
<center>
<table width="478" height="37" border="0">
   <tr>
    <td width="165"><div align="left">Roll No </div></td>
    <td width="303"><?php echo $roll_no; ?></td>
  </tr>
  <tr>
    <td>Name</td>
    <td><?php echo $name; ?></td>
  </tr>
  <tr>
    <td>Samester</td>
    <td><?php echo $sam; ?></td>
  </tr>
  <tr>
    <td><p>Intro to Computer </p></td>
    <td><?php echo $intro; ?></td>
  </tr>
  <tr>
    <td>Algo</td>
    <td><?php echo $algo; ?></td>
  </tr>
  <tr>
    <td>English</td>
    <td><?php echo $eng; ?></td>
  </tr>
  <tr>
    <td>Pak Study </td>
    <td><?php echo $pak_study;?></td>
  </tr>
  <tr>
    <td>Math</td>
    <td><?php echo $math; ?></td>
  </tr>
  <tr>
    <td>Accounting</td>
    <td><?php echo $acc; ?></td>
  </tr>
  <tr>
    <td>CPGA</td>
    <td><?php echo $cgpa; ?></td>
  </tr>
</table></center>

                    </div>
					<div id="clear"></div>
				</div>
				<div class="postmetadata"> 
					<div>
						<div class="data_category">From&nbsp;</div>
						<div class="data_author"> : Admin</div>
						<div id="clear"></div>
					</div>
					<div id="clear"></div>
				</div>
	  </div>
						<div class="navigation">
					<div class="left-nav"></div>
					<div class="right-nav"> </div>
				</div>
							<div id="clear">
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							  <p>&nbsp;</p>
							</div>
		</div>
		<div id="clear"></div>
	</div>
<div id="footer">		
	<div class="designby">
		(C) Copy Rights Reserved From 2010 ltd.	</div>
</div></div>
</body>
</html>