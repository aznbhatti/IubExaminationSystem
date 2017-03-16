<style type="text/css">
<!--
#Make {
	position:absolute;
	left:218px;
	top:76px;
	width:0px;
	height:3px;
	z-index:1;
	overflow: visible;
	visibility: visible;
}
#Layer1 {
	position:absolute;
	left:202px;
	top:70px;
	width:345px;
	height:258px;
	z-index:2;
}
-->
</style>
<div id="Layer1">
<form action="file_upload.php" method="post" name="make_profile" id="make_profile">
<table>
	<tr>
		<td>Pic</td>
		<td><input type="file" name="file" id="file"></td>
	</tr>

		<tr>
		<td>User Hoby</td>
		<td><input type="text" name="hoby" ></td>
	  </tr>
	<tr>
		<td>User Interest</td>
		<td><textarea name="interest" cols="20" rows="5" ></textarea></td>
	  </tr>
	<tr>
	<td height="42"><input type="submit" name="Update" value="Update"></td>
	<td><input type="reset" name="Cancel" value="Cancel"></td>
	</tr>
</table> 
</form>
</div>
<center><b>Make Profile</b></center>
<hr />
