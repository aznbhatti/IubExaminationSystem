<div id="mainContents">

	<div class="theBox">
		<div class="top"><div></div></div>
		<div class="contents">
			<h3>This is theBox</h3>
			<?php echo THEMES ;	?>
		</div>
		<div class="bottom"><div></div></div>
	</div>
	<div class="theBox2">
		<div class="top"><div></div></div>
		<div class="contents">
			<h3>This is theBox</h3>
			<?php echo THEMES ;	?>
		</div>
		<div class="bottom"><div></div></div>
	</div>

	<?php _divBoxHeader( "theBox2" ) ; ?>

		<h3>This is theBox</h3>
		<?php echo THEMES ;	?>

	<?php _divBoxBottom() ; ?>

	<?php _divBoxHeader( "theBox" ) ; ?>

		<h3>This is theBox</h3>
		<?php echo THEMES ;	?>

	<?php _divBoxBottom() ; ?>

</div>