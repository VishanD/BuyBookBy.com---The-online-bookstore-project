<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<script type="text/javascript" src="javascripts/loginpopup.js"></script>
		<script type="text/javascript" src="javascripts/account_validate.js"></script>

		<title>	BuyBookBy.com | Books to live by	</title>
		<link rel="shortcut icon" href="images/logo.jpg" /> <!--Icon displayed with the title-->
		
		<style type="text/css">
			div.content
			{
				position: absolute;
				top: 25%;
				left: 10%;
				width: 80%;
			}
			
			.us
			{
				position:absolute;
				margin-left:-4%;
				margin-top:40%;
				
			}
			
			
			.bodyform
			{
				margin-left:-1%;
			}
			
			label{color:#001A66;}
			
			#submit_button
			{
				width:109px;
				height:34px;
				-webkit-border-radius:3px;
				-moz-border-radius:3px;
				border-radius:3px;
				background-color:#86c5fa;
				-webkit-box-shadow:inset 0 2px rgba(255,255,255,.29);
				-moz-box-shadow:inset 0 2px rgba(255,255,255,.29);
				box-shadow:inset 0 2px rgba(255,255,255,.29);
				border:solid 1px #77a4cb;
				font-weight:bold;
				color:#fff;
				margin-left:7px;
			}
			
			.bag
				{
					margin-left:86%;
					margin-top:-20px;
					
				}
				
			.shop
				{
					margin-top:-5px;
					margin-left:87%;
				
				}
			
			
			
		</style>
	</head>
	
	<body>
		<div class="header">
			<div class="topnavigationBar" align="center">
				<nav>
					<?php 
					
					error_reporting(E_ERROR | E_PARSE);
			session_start();
		if(!isset($_SESSION["email"]) && !isset($_SESSION["userlevel"]))	{		
		
			echo 	'<a class="link2" href="sign_in.php">Sign In</a>|';
			echo    '<a class="link2" href="sign_up.php">Sign Up</a>|';
		}
		else {
			echo '<a class="link2" href="check_logout.php">Sign out</a>|';
			echo '<a class="link2" href="myaccount.php">My Account</a>|';
			echo '<a class="link2" href="orderstatus.php">Order Status</a>|';
			
		}
		
		
		
		?>
				
				
				
				
					<a class="link2" href="privacy_policy.php">Privacy Policy</a>|
					<a class="link2" href="terms_&_conditions.php">Terms &amp; Conditions</a>|
					<a class="link2" href="site_map.php">Sitemap</a>
				</nav>
				
				<a href="view_cart.php"><img class="bag"src="images/shopping_bag.jpg" height="85" width="85"</a>
				<p class="shop">Shopping Bag</p>
				
			</div>
	 		
	 			<img src="images/logo.jpg" width="10%" height="10%"> 	<!--can't add an anchor tag here. something appears on the page-->
	 		<a href="home.php">	
	 			<img src="images/LOGO FINAL.jpg" width="25%" height="30%"> 
	 		</a>
	 			
		</div>
		
		<div style="position: absolute;	top: 171%; left:0%";>
			<form>
			<table>
				<tr>
					<td><img src="images/Bank12.png" width="15%" height="15%"><img src="images/upay.png"width="15%" height="15%"><img src="images/cash+.png"width="15%" height="15%"</td>
				</tr>
			</table>	
			
			</form>
			</div>
		
		
		<div class="navigationBar1">
			<nav class="navBar1">
			<a class="link1" href="home.php">Home  </a>
			<a class="link1" href="about_us.php">About us </a>
			<a class="link1" href="categories.php">Categories </a>
			<a class="link1" href="FAQ.php">FAQ </a>
			<a class="link1" href="feedback.php">Feedback </a>
			<a class="link1" href="Contact-us2.php">Contact Us</a>			
			</nav>
		</div>
		
		<div>
			<form id="Searchform" method="post" action="searchbar.php">
				<input type="text" name = "searchtext" class="searchText" placeholder="			         Search your book here!"> <!--keep the spaces-->
				<input type="submit" class="searchButton" value="Search"> <!--no need of an ID right?-->
			</form>	
		</div>
		
		

		
		<div class="content">
			<?php
			
			require("config.php");
				$cusemail = $_SESSION["email"];
		
			$cusIDquery = mysqli_query($mysqli,"SELECT cID FROM CUSTOMER WHERE email = '$cusemail'");
			$cusIDfetch = mysqli_fetch_array($cusIDquery);
			$cusID = $cusIDfetch[0];
			
			

			$res2=mysqli_query($mysqli,"SELECT email,password,telNo,full_name,address_no,address_line1,address_line2,city,zipcode,state,country,security_qn,security_ans FROM CUSTOMER where cID=$cusID");
			
			$row=mysqli_fetch_array($res2);
			
		
			
			
			
			 ?>
			 
		
			
		
		
			 			 
			 
			 
			 
			 

		<div class="signupform">
			
			
			<!--directly copied from previous version, please check for errors-->
		<form class="bodyform"id="f3" action="accountUpdate.php" method="POST" onsubmit="return formValidate()">
		<table>
			<br /><h2>Account Info</h2><br />
			<tr>
				<td><label> Full Name : </label> </td>
				<td><input type="text" name="txta" id="txta" value="<?php echo $row[3]?>"></td>
			</tr>
			<tr> </tr>
			<tr> </tr>
			<tr>
				<td><label> E-mail :</label> </td>
				<td><input type="text" name="txti" id="txti" value="<?php echo $row[0]?>"></td>
				
			</tr>
			<tr> </tr>
			<tr> </tr>
			<tr>
				<td> <label>Contact Number : </label></td>
				<td><input type="text" name="txth" id="txth" value="<?php echo $row[2]?>"></td>
				
				
			</tr>
			<tr> </tr>
			<tr> </tr>
			<tr>
				<td> <label>Old Password : </label></td>
				<td><input type="password" name="txtold" id="txtold" value="<?php echo $row[1]?>"/></td>
				
				
			</tr>
			<tr> </tr>
			<tr> </tr>
			<tr>
				<td> <label>New Password : </label> </td>
				<td><input type="password" name="txtnew" id="txtnew" value="<?php echo $row[1]?>" /></td>
				
				
			</tr>
			
			<tr> </tr>
			<tr> </tr>
			<tr>
				<td> <label>Confirm New Password : </label></td>
				<td><input type="password" name="txtconfirm" id="txtconfirm" value="<?php echo $row[1]?>" /></td>
				
				
			</tr>
			
			<tr> </tr>
			<tr> </tr>
			<tr>
				<td><label> Securiy Question : </label></td>
				<td>
					
					<select name="select1" id="securityques"  >
	    					<option value="select">Select a security question</option>
            					<option value="What was your childhood nickname?"  >What was your childhood nickname?</option>
            					<option value="In what city did you meet your spouse/significant other?"    >In what city did you meet your spouse/significant other?</option>
            					<option value="What is the name of your favorite childhood friend?"  >What is the name of your favorite childhood friend?</optio
            					<option value="What street did you live on in third grade?"  >What street did you live on in third grade?</option>
            					<option value="What is your oldest sibling’s birthday month and year?"     >What is your oldest sibling’s birthday month and year? (e.g., January 1900)</option> 
            					<option value="What is the middle name of your oldest child?"    >What is the middle name of your oldest child?</option>
            					<option value="What is your oldest sibling's middle name?"  >What is your oldest sibling's middle name?</option>
            					<option value="What school did you attend for sixth grade?"      >What school did you attend for sixth grade?</option>
            					<option value="What was your childhood phone number including area code?"    >What was your childhood phone number including area code? (e.g., 000-000-0000)</option>
            					<option value="What is your oldest cousin's first and last name?"     >What is your oldest cousin's first and last name?</option>
            					<option value="What was the name of your first stuffed animal?"    >What was the name of your first stuffed animal?</option>
            					<option value="In what city or town did your mother and father meet?"     >In what city or town did your mother and father meet?</option> 
            					<option value="Where were you when you had your first kiss?"    >Where were you when you had your first kiss?</option> 
            					<option value="What is the first name of the boy or girl that you first kissed?"    >What is the first name of the boy or girl that you first kissed?</option>
            					<option value="What was the last name of your third grade teacher?"    >What was the last name of your third grade teacher?</option>
            					<option value="In what city does your nearest sibling live?"   >In what city does your nearest sibling live?</option> 
            					<option value="What is your oldest brother’s birthday month and year?"    >What is your oldest brother’s birthday month and year? (e.g., January 1900)</option> 
            					<option value="What is your maternal grandmother's maiden name?"    >What is your maternal grandmother's maiden name?</option>
            					<option value="In what city or town was your first job?"     >In what city or town was your first job?</option>
            					<option value="What is the name of the place your wedding reception was held?"     >What is the name of the place your wedding reception was held?</option>
            					<option value="What is the name of a college you applied to but didn't attend?"    >What is the name of a college you applied to but didn't attend?</option>
            					<option value="Where were you when you first heard about 9/11?"     >Where were you when you first heard about 9/11?</option>
        				</select>
				</td>
			</tr><tr> </tr>
			<tr> </tr>
			<tr>
				<td><label> Security Answer :</label> </td>
				<td>	
					<input type="text" name="txtl" id="txtl" value="<?php echo $row[12]?>">
				</td>
			</tr>
			<tr> </tr><tr> </tr><tr> </tr><tr> </tr>
			<tr>
				
				
			</tr>
				<tr>		
				<td><h2>Billing Info</h2></td>
			  </tr>
			  <tr> </tr>
			   <tr> </tr>
			<tr>
				<td> <label>Address No :</label> </td>
				<td><input type="text" name="txtaddress" id="txtaddress" value="<?php echo $row[4]?>"></td>
				
			</tr>
			
			<tr> </tr>
			<tr> </tr>
			<tr>
				<td><label> Address Line 1 : </label></td>
				<td><input type="text" name="txtc" id="txtc" value="<?php echo $row[5]?>"></td>
				
			</tr>
			<tr> </tr><tr> </tr>
			<tr>
				<td><label> Address Line 2  :</label> </td>
				<td><input type="text" name="txtd" id="txtd" value="<?php echo $row[6]?>"></td>
			</tr>
			<tr> </tr><tr> </tr>
			<tr>
				<td> <label>City :</label> </td>
				<td><input type="text" name="txte" id="txte" value="<?php echo $row[6]?>"></td>
			</tr><tr> </tr>
			<tr> </tr>
			<tr>
				<td> <label>Zip Code :</label> </td>
				<td><input type="text" name="txtf" id="txtf" value="<?php echo $row[8]?>"></td>
			</tr>
			<tr> </tr>
			<tr> </tr>
			<tr>
				<td> <label>State : </label></td>
				<td><input type="text" name="txtg" id="txtg" value="<?php echo $row[7]?>"></td>
			</tr>
			<tr> </tr><tr> </tr>
			<tr>
				<td> <label>Country : </label></td>
				<td>
					<select name="cust_address_country" id="cust_address_country" value="<?php echo $row[10]?>" >
			            					<option value="select">Select your country </option>	
                        	    			<option value="AFG">Afghanistan</option>
                                   	 		<option value="ALA">Aland Islands</option>
                                    		<option value="ALB">Albania</option>
                                    		<option value="DZA">Algeria</option>
                                    		<option value="ASM">American Samoa</option>
                                    		<option value="AND">Andorra</option>
                                    		<option value="AGO">Angola</option>
                                    		<option value="AIA">Anguilla</option>
                                    		<option value="ATA">Antarctica</option>
                                    		<option value="ATG">Antigua and Barbuda</option>
                                   	 		<option value="ARG">Argentina</option>
                                    		<option value="ARM">Armenia</option>
                                    		<option value="ABW">Aruba</option>
                                    		<option value="AUS">Australia</option>
                                    		<option value="AUT">Austria</option>
                                    		<option value="AZE">Azerbaijan</option>
                                    		<option value="BHS">Bahamas</option>
                                    		<option value="BHR">Bahrain</option>
                                    		<option value="BGD">Bangladesh</option>
                                    		<option value="BRB">Barbados</option>
                                    		<option value="BLR">Belarus</option>
                                    		<option value="BEL">Belgium</option>
                                    		<option value="BLZ">Belize</option>
                                    		<option value="BEN">Benin</option>
                                    		<option value="BMU">Bermuda</option>
                                    		<option value="BTN">Bhutan</option>
                                    		<option value="BOL">Bolivia</option>
                                    		<option value="BIH">Bosnia and Herzegovina</option>
                                    		<option value="BWA">Botswana</option>
                                    		<option value="BVT">Bouvet Island</option>
                                    		<option value="BRA">Brazil</option>
                                   	 		<option value="IOT">British Indian Ocean Territory</option>
                                    		<option value="BRN">Brunei Darussalam</option>
                                    		<option value="BGR">Bulgaria</option>
                                    		<option value="BFA">Burkina Faso</option>
                                    		<option value="BDI">Burundi</option>
                                    		<option value="KHM">Cambodia</option>
                                    		<option value="CMR">Cameroon</option>
                                    		<option value="CAN">Canada</option>
                                    		<option value="CPV">Cape Verde</option>
                                    		<option value="CYM">Cayman Islands</option>
                                    		<option value="CAF">Central African Republic</option>
                                    		<option value="TCD">Chad (T'Chad)</option>
                                    		<option value="CHL">Chile</option>
                                    		<option value="CHN">China</option>
                                    		<option value="CXR">Christmas Island</option>
                                    		<option value="CCK">Cocos (Keeling) Islands</option>
                                    		<option value="COL">Colombia</option>
                                    		<option value="COM">Comoros</option>
                                    		<option value="COG">Congo, Republic Of</option>
                                    		<option value="COD">Congo, The Democratic Republic of the (formerly Zaire)</option>
                                    		<option value="COK">Cook Islands</option>
                                    		<option value="CRI">Costa Rica</option>
                                    		<option value="CIV">Cote D'Ivoire (Ivory Coast)</option>
                                    		<option value="HRV">Croatia</option>
                                    		<option value="CUB">Cuba</option>
                                    		<option value="CYP">Cyprus</option>
                                    		<option value="CZE">Czech Republic</option>
                                    		<option value="DNK">Denmark</option>
                                    		<option value="DJI">Djibouti</option>
                                    		<option value="DMA">Dominica</option>
                                    		<option value="DOM">Dominican Republic</option>
                                    		<option value="ECU">Ecuador</option>
                                    		<option value="EGY">Egypt</option>
                                    		<option value="SLV">El Salvador</option>
                                    		<option value="GNQ">Equatorial Guinea</option>
                                    		<option value="ERI">Eritrea</option>
                                    		<option value="EST">Estonia</option>
                                    		<option value="ETH">Ethiopia</option>
                                    		<option value="FRO">Faeroe Islands</option>
                                    		<option value="FLK">Falkland Islands</option>
                                   	 		<option value="FJI">Fiji</option>
                                    		<option value="FIN">Finland</option>
                                    		<option value="FRA">France</option>
                                    		<option value="GUF">French Guiana</option>
                                    		<option value="PYF">French Polynesia</option>
                                    		<option value="ATF">French Southern Territories</option>
                                    		<option value="GAB">Gabon</option>
                                    		<option value="GMB">Gambia, The</option>
                                    		<option value="GEO">Georgia</option>
                                    		<option value="DEU">Germany</option>
                                    		<option value="GHA">Ghana</option>
                                    		<option value="GIB">Gibraltar</option>
                                    		<option value="GRC">Greece</option>
                                    		<option value="GRL">Greenland</option>
                                    		<option value="GRD">Grenada</option>
                                    		<option value="GLP">Guadeloupe</option>
                                    		<option value="GUM">Guam</option>
                                    		<option value="GTM">Guatemala</option>
                                    		<option value="GIN">Guinea</option>
                                    		<option value="GNB">Guinea-bissau</option>
                                    		<option value="GUY">Guyana</option>
                                    		<option value="HTI">Haiti</option>
                                    		<option value="HMD">Heard Island and Mcdonald Islands</option>
                                    		<option value="HND">Honduras</option>
                                    		<option value="HKG">Hong Kong (Special Administrative Region of China)</option>
                                    		<option value="HUN">Hungary</option>
                                    		<option value="ISL">Iceland</option>
                                    		<option value="IND">India</option>
                                    		<option value="IDN">Indonesia</option>
                                    		<option value="IRN">Iran (Islamic Republic of Iran)</option>
                                    		<option value="IRQ">Iraq</option>
                                    		<option value="IRL">Ireland</option>
                                    		<option value="ISR">Israel</option>
                                    		<option value="ITA">Italy</option>
                                    		<option value="JAM">Jamaica</option>
                                    		<option value="JPN">Japan</option>
                                    		<option value="JOR">Jordan (Hashemite Kingdom of Jordan)</option>
                                    		<option value="KAZ">Kazakhstan</option>
                                    		<option value="KEN">Kenya</option>
                                    		<option value="KIR">Kiribati</option>
                                    		<option value="PRK">Korea (Democratic Peoples Republic pf [North] Korea)</option>
                                    		<option value="KOR">Korea (Republic of [South] Korea)</option>
                                    		<option value="KWT">Kuwait</option>
                                    		<option value="KGZ">Kyrgyzstan</option>
                                    		<option value="LAO">Lao People's Democratic Republic</option>
                                    		<option value="LVA">Latvia</option>
                                   	 		<option value="LBN">Lebanon</option>
                                    		<option value="LSO">Lesotho</option>
                                    		<option value="LBR">Liberia</option>
                                    		<option value="LBY">Libya (Libyan Arab Jamahirya)</option>
                                    		<option value="LIE">Liechtenstein (Furstentum Liechtenstein)</option>
                                    		<option value="LTU">Lithuania</option>
                                    		<option value="LUX">Luxembourg</option>
                                    		<option value="MAC">Macao (Special Administrative Region of China)</option>
                                    		<option value="MKD">Macedonia (Former Yugoslav Republic of Macedonia)</option>
                                    		<option value="MDG">Madagascar</option>
                                    		<option value="MWI">Malawi</option>
                                    		<option value="MYS">Malaysia</option>
                                    		<option value="MDV">Maldives</option>
                                    		<option value="MLI">Mali</option>
                                    		<option value="MLT">Malta</option>
                                    		<option value="MHL">Marshall Islands</option>
                                    		<option value="MTQ">Martinique</option>
                                    		<option value="MRT">Mauritania</option>
                                    		<option value="MUS">Mauritius</option>
                                    		<option value="MYT">Mayotte</option>
                                    		<option value="MEX">Mexico</option>
                                    		<option value="FSM">Micronesia</option>
                                    		<option value="MDA">Moldova</option>
                                    		<option value="MCO">Monaco</option>
                                    		<option value="MNG">Mongolia</option>
                                    		<option value="MSR">Montserrat</option>
                                    		<option value="MAR">Morocco</option>
                                    		<option value="MOZ">Mozambique</option>
                                    		<option value="MMR">Myanmar</option>
                                    		<option value="NAM">Namibia</option>
                                    		<option value="NRU">Nauru</option>
                                    		<option value="NPL">Nepal</option>
                                    		<option value="NLD">Netherlands</option>
                                    		<option value="ANT">Netherlands Antilles</option>
                                    		<option value="NCL">New Caledonia</option>
                                    		<option value="NZL">New Zealand</option>
                                   	 		<option value="NIC">Nicaragua</option>
                                    		<option value="NER">Niger</option>
                                    		<option value="NGA">Nigeria</option>
                                    		<option value="NIU">Niue</option>
                                    		<option value="NFK">Norfolk Island</option>
                                    		<option value="MNP">Northern Mariana Islands</option>
                                    		<option value="NOR">Norway</option>
                                    		<option value="OMN">Oman</option>
                                    		<option value="PAK">Pakistan</option>
                                    		<option value="PLW">Palau</option>
                                    		<option value="PSE">Palestinian Territories</option>
                                    		<option value="PAN">Panama</option>
                                    		<option value="PNG">Papua New Guinea</option>
                                    		<option value="PRY">Paraguay</option>
                                    		<option value="PER">Peru</option>
                                    		<option value="PHL">Philippines</option>
                                    		<option value="PCN">Pitcairn</option>
                                    		<option value="POL">Poland</option>
                                    		<option value="PRT">Portugal</option>
                                    		<option value="PRI">Puerto Rico</option>
                                    		<option value="QAT">Qatar</option>
                                    		<option value="REU">Reunion</option>
                                    		<option value="ROU">Romania</option>
                                    		<option value="RUS">Russian Federation</option>
                                    		<option value="RWA">Rwanda</option>
                                    		<option value="SHN">Saint Helena</option>
                                    		<option value="KNA">Saint Kitts and Nevis</option>
                                    		<option value="LCA">Saint Lucia</option>
                                    		<option value="SPM">Saint Pierre and Miquelon</option>
                                    		<option value="VCT">Saint Vincent and the Grenadines</option>
                                    		<option value="WSM">Samoa (formerly Western Samoa)</option>
                                    		<option value="SMR">San Marino (Republic of)</option>
                                    		<option value="STP">Sao Tome and Principe</option>
                                    		<option value="SAU">Saudi Arabia</option>
                                    		<option value="SEN">Senegal</option>
                                    		<option value="SCG">Serbia and Montenegro (formerly Yugoslavia)</option>
                                    		<option value="SYC">Seychelles</option>
                                    		<option value="SLE">Sierra Leone</option>
                                    		<option value="SGP">Singapore</option>
                                    		<option value="SVK">Slovakia</option>
                                    		<option value="SVN">Slovenia</option>
                                    		<option value="SLB">Solomon Islands</option>
                                    		<option value="SOM">Somalia</option>
                                    		<option value="ZAF">South Africa</option>
                                    		<option value="SGS">South Georgia and the South Sandwich Islands</option>
                                    		<option value="ESP">Spain</option>
                                    		<option value="LKA">Sri Lanka</option>
                                    		<option value="SDN">Sudan</option>
                                    		<option value="SUR">Suriname</option>
                                    		<option value="SJM">Svalbard and Jan Mayen</option>
                                    		<option value="SWZ">Swaziland</option>
                                    		<option value="SWE">Sweden</option>
                                    		<option value="CHE">Switzerland</option>
                                    		<option value="SYR">Syrian Arab Republic</option>
                                   	 		<option value="TWN">Taiwan</option>
                                    		<option value="TJK">Tajikistan</option>
                                    		<option value="TZA">Tanzania</option>
                                    		<option value="THA">Thailand</option>
                                    		<option value="TLS">Timor-Leste (formerly East Timor)</option>
                                    		<option value="TGO">Togo</option>
                                    		<option value="TKL">Tokelau</option>
                                    		<option value="TON">Tonga</option>
                                    		<option value="TTO">Trinidad and Tobago</option>
                                    		<option value="TUN">Tunisia</option>
                                    		<option value="TUR">Turkey</option>
                                    		<option value="TKM">Turkmenistan</option>
                                    		<option value="TCA">Turks and Caicos Islands</option>
                                    		<option value="TUV">Tuvalu</option>
                                    		<option value="UGA">Uganda</option>
                                    		<option value="UKR">Ukraine</option>
                                    		<option value="ARE">United Arab Emirates</option>
                                    		<option value="GBR">United Kingdom</option>
                                    		<option value="USA">United States</option>
                                    		<option value="UMI">United States Minor Outlying Islands</option>
                                    		<option value="URY">Uruguay</option>
                                    		<option value="UZB">Uzbekistan</option>
                                    		<option value="VUT">Vanuatu</option>
                                    		<option value="VAT">Vatican City</option>
                                    		<option value="VEN">Venezuela</option>
                                    		<option value="VNM">Viet Nam</option>
                                    		<option value="VGB">Virgin Islands, British</option>
                                    		<option value="VIR">Virgin Islands, U.S.</option>
                                    		<option value="WLF">Wallis and Futuna</option>
                                    		<option value="ESH">Western Sahara</option>
                                    		<option value="YEM">Yemen</option>
                                    		<option value="ZMB">Zambia</option>
                                    		<option value="ZWE">Zimbabwe</option>
                                    		<option value="GGY">Guernsey</option>
                                    		<option value="CIV">Ivory Coast Rep</option>
                			</select>
				</td>
			</tr>
			<tr> </tr>
			<tr> </tr>
				
			<tr></tr><tr></tr><tr></tr><tr>
				<td> </td>
				<td>
			
				<input type="submit" id="submit_button"name="submit" value="Update">
				</td>
			</tr>
		</table>
		</form> 
			
		</div>

		
<div style="position: absolute;	top: 140%; left: 30%";>
		
	<footer "style= text-align:center">
	
	
		
			<a href="home.php"> Home  &nbsp</a>|
			<a href="about_us.php"> About us  &nbsp</a>|
			<a href="categories.php"> Categories &nbsp </a>|
			<a href="FAQ.php"> FAQ &nbsp</a>|
			<a href ="feedback.php"> Feedback &nbsp</a>|
			<a href="Contact-us2.php"> Contact Us &nbsp</a>
			
	</div>
		
	<div style="position: absolute;	top: 140%; left: -12%";>
			
		<p>&copy; Copyright 2014 BuyBookBy.com</p>			
			
	</div>
			
	</footer>
	
		
		
	</body>
	
</html>

