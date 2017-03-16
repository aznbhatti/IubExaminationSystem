<div id="sideMenu">
	<?php include ( SNIPTPATH . "listofindustries.php" ) ; ?>
	
	<?php _divBoxHeader( "theBox" ) ; ?>
		<h3>Quick Search</h3>

		<form name="frmQuickSearch" method="post" action="quicksearch.php" > 
		<table width="100%" cellpadding="0" cellspacing="2" border="0">
			<tr>
				<td>
					<input name="txtSearchText" id="txtSearchText" value=""  class="textField"/>
				</td>
			</tr>
			<!--<tr>
				<td>
					<select name="cmbCityID" id="cmbCityID" class="textField">
						<option value="">Select City</option>
						<?php 
							$cityList = $city->getCityList() ;
							if ( $cityList ) 
								foreach ( $cityList as $cl)
								{
									?><option value="<?php echo $cl["CityID"] ;?>"><?php echo $cl["CityName"] ;?></option><?php
								}
						?>
					</select> 
				</td>
			</tr>-->
			<tr>
				<td align="right">
					<input type="submit" value="Search" class="adminButton" />&nbsp;
				</td>
			</tr>
		</table>
		</form>
	<?php _divBoxBottom() ; ?>
</div>