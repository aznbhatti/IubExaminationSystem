<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Purchase Commercial</title>
<style type="text/css">
<!--
.style6 {font-size: 16px; color: #FFFFFF; }
.style7 {color: #000000}
body {
	background-color: #009999;
}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: underline;
	color: #CCCCCC;
}
a:active {
	text-decoration: none;
	color: #000000;
}
.style8 {font-size: 36px}
-->
</style>
</head>
<?php
	require_once('auth.php');
?>

<body>
<form id="form1" name="ComercialPurchase" method="post" action="cpurchase_exe.php" enctype="multipart/form-data">
  <table width="351" height="142" border="0" align="center">
    <tr>
      <td width="157" bgcolor="#CCCCCC"> First Name </td>
      <td width="184"><label>
        <input name="fname" type="text" id="fname" size="28" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Last Name </td>
      <td><input name="lname" type="text" id="lname" size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">CNIC No. </td>
      <td><input name="cnic" type="text" id="cnic" size="28" maxlength="15" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"> Address </td>
      <td><input name="address" type="text" id="address" value="" size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">City</td>
      <td><label>
        <select name="city">
          <option value="Islamabad">Islamabad</option>
          <option value="Lahore">Lahore</option>
          <option value="Bahawalpur">Bahawalpur</option>
          <option value="Rawalpindi">Rawalpindi</option>
          <option value="Karachi">Karachi</option>
          <option value="Multan">Multan</option>
          <option value="Faisalabad">Faisalabad</option>
          <option value="Bhakar">Bhakar</option>
          <option value="Bahawalnagar">Bahawalnagar</option>
          <option value="Jhang">Jhang</option>
          <option value="Peshawar">Peshawar</option>
          <option value="Mardan">Mardan</option>
          <option value="Muree">Muree</option>
          <option value="Abotabad">Abotabad</option>
          <option value="Gujrat">Gujrat</option>
          <option value="Gujranwala">Gujranwala</option>
          <option value="Sahiwal">Sahiwal</option>
          <option value="Okara">Okara</option>
          <option value="Lia">Lia</option>
          <option value="Queta">Queta</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Country</td>
      <td><label>
        <select name="country">
          <option value="Pakistan">Pakistan</option>
          <option value="United Kindom">United Kindom</option>
          <option value="Usa">Usa</option>
          <option value="Dubai">Dubai</option>
          <option value="Soudia Arabia">Soudia Arabia</option>
          <option value="India">India</option>
          <option value="China">China</option>
          <option value="Afghanistan">Afghanistan</option>
          <option value="Iran">Iran</option>
          <option value="Russia">Russia</option>
          <option value="Turki">Turki</option>
          <option value="Spain">Spain</option>
          <option value="Canada">Canada</option>
          <option value="Oman">Oman</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Office Address </td>
      <td><input name="officeadd" type="text" id="officeadd" value="" size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Mobile</td>
      <td><input name="mob" type="text" id="mob" size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">Phone no. </td>
      <td><input name="phone" type="text" id="phone" size="28" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"> <span class="style6"><span class="style7">Plot  no</span></span><span class="style7">. </span></td>
      <td class="style7"><label>
        
		<select name="pno">
		<?php 
		$no = 1;
		for(; $no<=2000; $no++)
		{?>
          <option value="<?php echo $no; ?>"><?php echo $no; ?></option>
        <?php } ?>
		</select>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" class="style7">Bazar no. </td>
      <td class="style7"><select name="bno">
        <?php 
		$no = 1;
		for(; $no<=20; $no++)
		{?>
        <option value="<?php echo $no; ?>"><?php echo $no; ?></option>
        <?php } ?>
      </select></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" class="style7">Size</td>
      <td class="style7"><label>
        <select name="size" id="size">
          <option value="20x20">20x20</option>
          <option value="20x30">20x30</option>
          <option value="20x40">20x40</option>
          <option value="25x25">25x25</option>
          <option value="25x40">25x40</option>
          <option value="25x50">25x50</option>
          <option value="30x50">30x50</option>
          <option value="30x60">30x60</option>
          <option value="30x30">30x30</option>
          <option value="40x40">40x40</option>
          <option value="40x50">40x50</option>
          <option value="40x60">40x60</option>
          <option value="50x50">50x50</option>
          <option value="50x60">50x60</option>
          <option value="50x80">50x80</option>
          <option value="60x60">60x60</option>
          <option value="60x80">60x80</option>
          <option value="60x100">60x100</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" class="style7">Sector</td>
      <td class="style7"><label>
        <select name="sector" id="sector">
          <option value="G-6 Markaz">G-6 Markaz</option>
          <option value="G-6/1">G-6/1</option>
          <option value="G-6/2">G-6/2</option>
          <option value="G-6/3">G-6/3</option>
          <option value="G-6/4">G-6/4</option>
          <option value="G-7 Markaz">G-7 Markaz</option>
          <option value="G-7/1">G-7/1</option>
          <option value="G-7/2">G-7/2</option>
          <option value="G-/73">G-7/3</option>
          <option value="G-7/4">G-7/4</option>
          <option value="G-8 Markaz">G-8 Markaz</option>
          <option value="G-8/1">G-8/1</option>
          <option value="G-8/2">G-8/2</option>
          <option value="G-8/3">G-8/3</option>
          <option value="G-8/4">G-8/4</option>
          <option value="G-9 Markaz">G-9 Markaz</option>
          <option value="G-9/1">G-9/1</option>
          <option value="G-9/2">G-9/2</option>
          <option value="G-9/3">G-9/3</option>
          <option value="G-9/4">G-9/4</option>
          <option value="G-10 Markaz">G-10 Markaz</option>
          <option value="G-10/1">G-10/1</option>
          <option value="G-10/2">G-10/2</option>
          <option value="G-10/3">G-10/3</option>
          <option value="G-10/4">G-10/4</option>
          <option value="G-11 Markaz">G-11 Markaz</option>
          <option value="G-11/1">G-11/1</option>
          <option value="G-11/2">G-11/2</option>
          <option value="G-11/3">G-11/3</option>
          <option value="G-11/4">G-11/4</option>
          <option value="G-13 Markaz">G-13 Markaz</option>
          <option value="G-13/1">G-13/1</option>
          <option value="G-13/2">G-13/2</option>
          <option value="G-13/3">G-13/3</option>
          <option value="G-13/4">G-13/4</option>
          <option value="F-6 Markaz">F-6 Markaz</option>
          <option value="F-7 Markaz">F7 Markaz</option>
          <option value="F-8 Markaz">F-8 Markaz</option>
          <option value="F-10 Markaz">F-10 Markaz</option>
          <option value="F-11 Markaz">F-11 Markaz</option>
          <option value="I-8 Markaz">I-8 Markaz</option>
          <option value="I-10 Markaz">I-10 Markaz</option>
          <option value="E-11 Markaz">E-11 Markaz</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" class="style7">Unit Type </td>
      <td class="style7"><label>
        <select name="unit" id="unit">
          <option value="Single">Single </option>
          <option value="Double">Double</option>
          <option value="Tripple">Tripple</option>
          <option value="Four">Four</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" class="style7">Price</td>
      <td class="style7"><input name="price" size="28" type="text" id="price"/></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" class="style7">Condition</td>
      <td class="style7"><input name="con" size="28" type="text" id="con"/></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" class="style7">Description</td>
      <td class="style7"><input name="des" size="28" type="text" id="des"/></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td bgcolor="#CCCCCC" class="style7">&nbsp;</td>
      <td bgcolor="#009999" class="style7"><input name="file" type="file" size="28" /></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td bgcolor="#009999" class="style7">&nbsp;</td>
      <td class="style7"><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
  </table>
</form>
<p class="style7">&nbsp;</p>
</body>
</html>
