
<!DOCTYPE HTML> 
<!-- Diapo is a Pixedelic free jQuery slideshow | Manuel Masia (designer and developer) --> 
<html> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" > 
    <title>Online Examination System</title> 
 
<meta name="viewport" content="width=960">    
    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Styles
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    
<link rel='stylesheet' id='style-css'  href='diapo.css' type='text/css' media='all'> 
<script type='text/javascript' src='scripts/jquery.min.js'></script>
<!--[if !IE]><!--><script type='text/javascript' src='scripts/jquery.mobile-1.0rc2.customized.min.js'></script><!--<![endif]-->
<script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 
<script type='text/javascript' src='scripts/diapo.js'></script> 

<script>
$(function(){
	$('.pix_diapo').diapo();
});

</script>
<style type="text/css">
<!--
.style1 {font-family: "Times New Roman", Times, serif; margin-top:100px;}
body {
	background-color: #009999;
}
-->
</style>

<style>
body {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 12px;
	line-height: 20px;
}
section {
	display: block;
	overflow: hidden;
	position: relative;
}
.button {
	background: #014464;
	background: -moz-linear-gradient(top, #0D658E, #0C577A 50%, #014D71 51%, #003E5C);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #0E658E), color-stop(.5, #0C577A), color-stop(.5, #014D71), to(#003E5C)); 
	border: 1px solid #368DBE;
	border-top: 1px solid #c3d6df;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	-moz-box-shadow: 0 1px 3px black;
	-webkit-box-shadow: 0 1px 3px black;
	box-shadow: 0 1px 3px black;
	color: white;
	display: block;
	font-size: 12px;
	font-weight: bold;
	height: 30px;
	line-height: 30px;
	padding: 5px 20px;
	text-align: center;
	text-decoration: none;
	text-shadow: 1px 1px 1px black;
	text-transform: uppercase;
	width: auto;
}
.button2 {
	background: #d9ae00;
	background: -moz-linear-gradient(top, #b28b06, #9c7705 50%, #9c7705 51%, #5c4100);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #b28b06), color-stop(.5, #9c7705), color-stop(.5, #9c7705), to(#5c4100)); 
	border: 1px solid #c7a60c;
	border-top: 1px solid #e5d51f;
}
.button3 {
	background: #ffd838;
	background: -moz-linear-gradient(top, #edbf21, #c89b0f 50%, #9c7705 51%, #906706);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #edbf21), color-stop(.5, #c89b0f), color-stop(.5, #c89b0f), to(#906706)); 
	border: 1px solid #c7a60c;
	border-top: 1px solid #e5d51f;
}
.price_table {
    float: right;
	font-size: 12px;
    margin: 10px auto 0;
    padding: 20px 0;
	position: relative;
	width: 570px;
}
.price_table .price_column.highlighted {
	background: #ffd838;
    margin: -5px!important;
	padding: 10px;
    z-index: 2;
}
.price_table .price_column {
	display: block;
	margin: 5px;
    float: left;
    position: absolute;
	width: 180px;
    z-index: 1;
}
.price_table .price_column > div {
	background: #eeeeee;
}
.price_table .price_column > div > div {
	padding: 10px 15px;
    border-bottom: 1px solid #cccccc;
    border-top: 1px solid #f6f6f6;
}
.price_table .price_column > div > p {
	padding: 10px 15px;
    border-bottom: 1px solid #cccccc;
    border-top: 1px solid #f6f6f6;
}
.price_table .price_column > div > ul {
	padding: 10px 15px;
    border-bottom: 1px solid #cccccc;
    border-top: 1px solid #f6f6f6;
}
.price_table .price_title {
	background-color: #333333;
    border-top: 0!important;
    color: #ffffff;
    font-size: 14px;
}
.price_table .highlighted .price_title {
    font-size: 16px;
}
.price_table .price_price {
    font-size: 36px;
    line-height: 40px;
}
.price_table .highlighted  .price_price {
    font-size: 40px;
    line-height: 44px;
}
.price_table .price_explanation {
	font-size: 10px;
    line-height: 13px;
    text-transform: uppercase;
}
.price_table .cusButton {
	background-color: #333333;
	display: block;
    text-align: center;
}
.price_table li {
	padding: 5px 0;
}
.price_table div.pix_check {
	background: url(images/demo/list-check-green.png) no-repeat 15px center;
    padding-left: 38px!important;
}
.price_table div.pix_error {
	background: url(images/demo/list-error.png) no-repeat 15px center;
    padding-left: 38px!important;
}
</style>
 
</head> 

<body>
<p></p>
<p></p>
<div align="center" class="style1" ><font size="+5">Online Examination System</font><font size="+5"></font></div>
 <section> 
     	<div style="overflow:hidden; width:960px; margin: 100px auto; padding:0 10px;"> 
                <div class="pix_diapo">

                    <div data-thumb="images/thumbs/1.jpg" width="50" height="50">
                        <img src="images/slides/1.jpg" width="940" height="470">
                        <div class="caption elemHover fromTop"> Beautiful House For Sale.
                        </div>
                    </div>
					<div data-thumb="images/thumbs/7.jpg" width="50" height="50">
                        <img src="images/slides/7.jpg" width="940" height="470">
                        <div class="caption elemHover fromLeft"> Beautiful Villa For Sale.
                        </div>
                    </div>
					<div data-thumb="images/thumbs/8.jpg" width="50" height="50">
                        <img src="images/slides/8.jpg" width="940" height="470">
                        <div class="caption elemHover fromRight"> A Good Location Palaza For Sale. 
                        </div>
                    </div>
					
			
                    <div data-thumb="images/thumbs/2.jpg" width="50" height="50">
                        <img src="images/slides/2.jpg" width="940" height="470"> 
                       <div class="caption elemHover fromBottom">Very Nice Location and Awesome House for Sale. 
                        </div>

                    </div>
                    
                    <div data-thumb="images/thumbs/3.jpg" data-time="7000" width="50" height="50">
                        <img src="images/slides/3.jpg" width="940" height="470">
                       <div class="caption elemHover fromLeft">Very Beautiful Location Banglow For Sale. 
                        </div> 
                    </div>
                    <div data-thumb="images/thumbs/9.jpg" width="50" height="50">
                        <img src="images/slides/9.jpg" width="940" height="470">
                    <div class="caption elemHover fromLeft">A Plaza For Sale with Reasonable Price. 
                        </div>
					</div>
                    <div data-thumb="images/thumbs/4.jpg" width="50" height="50">
                        <img src="images/slides/4.jpg" width="940" height="470" /> 
                        <div class="caption elemHover fromLeft">Most Beautiful Location Guest House For Sale.
                        </div>
						</div>
                    <div data-thumb="images/thumbs/5.jpg" data-time="7000" width="50" height="50">
                        <img src="images/slides/5.jpg" width="940" height="470" /> 
						<div class="caption elemHover fromLeft">A Good Location Plot For Sale. 
                        </div>                           </div>
                    <div data-thumb="images/thumbs/10.jpg" width="50" height="50">
                        <img src="images/slides/10.jpg" width="940" height="470">
                    <div class="caption elemHover fromLeft">Plaza For Sale. 
                        </div>
					</div>        
                     
                    
                    
                    <div data-thumb="images/thumbs/6.jpg" width="50" height="50">
                        <img src="images/slides/6.jpg" width="940" height="470">
                    <div class="caption elemHover fromLeft">A Plot For Sale. 
                        </div>
					</div>
                    
               </div><!-- #pix_diapo -->
                
        </div>
    
    
    </section> 
<form id="LoginForm" name="LoginForm" method="post" action="login-exec.php">
  <div align="center">
    <table width="311" height="114" border="0">
      <tr>
        <td width="91">Login Name </td>
        <td width="210"><label>
          <input name="u_id" type="text" id="u_id" size="30" />
        </label></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><label>
          <input name="u_pass" type="password" id="u_pass" size="30" />
        </label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="Submit" value="Submit" /></td>
      </tr>
    </table>
  </div>
</form>
<p>&nbsp;</p>
</body>
</html>
