 <?php
	include'conn.php';
	require_once('auth.php');
?>
       
		
		
	
				<h2 class="title">
<h1 class="title">Profile <?php echo $_SESSION["SESS_FIRST_NAME"];?>
</h1>
<?php
$qry="SELECT * FROM staff";
	$result=mysql_query($qry);
while($row = mysql_fetch_assoc($result)){
if($row["staff_login"]== $_SESSION['SESS_USER_ID'])
{
$login = $row["staff_login"];
$name = $row["staff_name"];
$pos = $row["staff_position"];

}
}
?>
<a href="login-file.php">Home</a> | <a href="make_profile.php">Make Profile</a> | <a href="logout.php">Logout</a>
<table width="441" height="37" border="0">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="125"><div align="left">Login ID  </div></td>
    <td width="306"><?php echo $login; ?></td>
  </tr>
  <tr>
    <td>Name</td>
    <td><?php echo $name; ?></td>
  </tr>
  <tr>
    <td>Possition</td>
    <td><?php echo $pos; ?></td>
  </tr>
  
</table>
                    </div>
					
	  </div>
				
	