<table align="center">
    <?php 
   include 'conn.php';
   
  
   $cnic = $_GET['q'];
   $qry = "SELECT * from customers where Cust_CNIC = $cnic";
   $result = mysql_query($qry) or die(mysql_error());
   if($result)
   {
   $count = mysql_num_rows($result)
   if($count == "0")
   {
   ?>
   <tr>
      <td width="157" bgcolor="#CCCCCC"> First Name </td>
      <td width="262"><label>
        <input name="fname" type="text" id="fname" size="28"  />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Last Name </td>
      <td><input name="lname" type="text" id="lname" size="28"  /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"> Address </td>
      <td><input name="address" type="text" id="address" size="28"  /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">City</td>
      <td><input name="city" type="text" id="city" size="28"  /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Country</td>
      <td><input name="country" type="text" id="country" size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Office Address </td>
      <td><input name="officeadd" type="text" id="officeadd"  size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Mobile</td>
      <td><input name="mob" type="text" id="mob" size="28"  /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Phone no. </td>
      <td><input name="phone" type="text" id="phone" size="28" /></td>
    </tr>
  
  <?php  }
   if($count > "0")
   {
   	while($row = mysql_fetch_array($result))
	{			?>
   
	<tr>
      <td width="157" bgcolor="#CCCCCC"> First Name </td>
      <td width="262"><label>
        <input name="fname" type="text" id="fname" size="28" value="<?php echo $row['Cust_FirstName']; ?>" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Last Name </td>
      <td><input name="lname" type="text" id="lname" size="28"  value="<?php echo $row['Cust_LastName']; ?>"/></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"> Address </td>
      <td><input name="address" type="text" id="address" size="28" value="<?php echo $row['Cust_Address']; ?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">City</td>
      <td><input name="city" type="text" id="city" size="28" value="<?php echo $row['Cust_City']; ?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Country</td>
      <td><input name="country" type="text" id="country" size="28" value="<?php echo $row['Cust_Country']; ?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Office Address </td>
      <td><input name="officeadd" type="text" id="officeadd" value="<?php echo $row['Cust_OfficeAddress']; ?>" size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Mobile</td>
      <td><input name="mob" type="text" id="mob" size="28" value="<?php echo $row['Cust_Mob']; ?>" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Phone no. </td>
      <td><input name="phone" type="text" id="phone" size="28" value="<?php echo $row['Cust_Phone']; ?>" /></td>
    </tr> <?php }}} ?>
	</table>