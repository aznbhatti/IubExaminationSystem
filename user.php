 <?php
	require_once('auth.php');
?>
<html>
<head>
<title><?php echo $_SESSION['SESS_USER_ID']; ?></title>
       
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
          <ul>
<li class="pagenav">
                <h2>Menu</h2>
                <ul>
                  <li class="page_item page-item-2"><a href="index.php" title="Home">Home </a></li>
                  <li class="page_item page-item-10"><a href="contact.php?page_id=10" title="Contact">Contact</a></li>
                  <li class="page_item page-item-8"><a href="signup.php?page_id=8" title="Forum">Register</a></li>
                  <li class="page_item page-item-9"><a href="http://www.free-css-templates.com/wordpress/?page_id=9" title="Free Stuff">Gallary</a></li>
                  <li class="page_item page-item-7"><a href="result.php?page_id=7" title="Links">Results</a></li>
                  <li class="page_item page-item-7"><a href="logout.php">Logout</a></li>
                </ul>
</li>
             
             
            </div>
        </div>
        <div id="wrapper">
            <div id="header">
            	<div id="header_left">
	                <h1>
	                	
	                        BS	Forum                					</h1>
					<h2>The Islamia Univeristy of Bahawalpur<br />(Bahawalnagar Campus) </h2>
			  </div>
				<div id="header_right">
					<div class="rss">					  <img src="images/rss.gif" alt="RSS Feeds" width="25" height="15" align="absmiddle">&nbsp;&nbsp;RSS Posts </div>
					<div class="rss">
						<img src="images/rss.gif" alt="RSS Feeds" width="25" height="15" align="absmiddle">&nbsp;&nbsp;RSS Comments					</div>
				</div>
            </div>
	<div id="content">
		<div id="container">
						<div class="post">
				<h2 class="title">
<h1 class="title">Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];
?></h1>
<a href="profile.php"><h2 class="entry">My Profile</a> | <a href="logout.php">Logout</a></h2>
<p>&nbsp;</p>
                    </div>
					<div id="clear"></div>
				</div>
				
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
							  
							</div>
		</div>
		<div id="clear"></div>
	</div>
<div id="footer">		
	<div class="designby">
		(C) Copy Rights Reserved From 2010 ltd.
	</div>
</div></div>

</body></html>