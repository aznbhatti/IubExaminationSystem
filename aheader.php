<div id="header">
	<div id="signIn">
		Welcome
		<?php 
			if ( $_SESSION["userID"] )
			{
				echo $_SESSION["userName"] ; ?>
				! <a href="logout.php">Logout </a>
		<?php 
			} 
			else
			{
				echo "Guest !&nbsp;&nbsp;" ;
				?> 
					<a href="#signIn" onclick="showSignIn()">Sign In</a>
					&nbsp;|&nbsp;					
					<a href="signup.php">Sign Up</a>
				<?php
			}
		?>
	</div>

	<div id="logo">&nbsp;</div>
</div>