<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/responsiveslides.css">
        <script src="javascripts/jquery.min.js"></script>
        <script src="javascripts/responsiveslides.min.js"></script>
        <script type="text/javascript" src="javascripts/paymentdetailsvalid.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1000,
			        
			        speed: 600
			      });
			});
		  </script>

		<script type="text/javascript" src="javascripts/loginpopup.js"></script>

		<title>	BuyBookBy.com | Books to live by	</title>
		<link rel="shortcut icon" href="images/logo.jpg" /> <!--Icon displayed with the title-->
		
		<style>
			
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
			session_start();
		if(!isset($_SESSION["email"]) && !isset($_SESSION["userlevel"]))	{		
		
			echo 	'<a class="link2" href="sign_in.php">Sign In</a>|';
			echo    '<a class="link2" href="sign_up.php">Sign Up</a>|';
		}
		elseif($_SESSION["userlevel"] == 2) {
			echo '<a class="link2" href="check_logout.php">Sign out</a>|';
			echo'<a class="link2" href="myaccount.php">My Account</a>|';
			echo '<a class="link2" href="orderstatus.php">Order Status</a>|';
			
		}
		else {
			{
				echo '<a class="link2" href="check_logout.php">Sign out</a>|';
				echo '<a class="link2" href="admin_panel.php">Admin Panel</a>|';
				
			}
		}
		
		
		
		?>
					<a class="link2" href="privacy_policy.html">Privacy Policy</a>|
					<a class="link2" href="terms_&_conditions.html">Terms &amp; Conditions</a>|
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
		
		<div style="position: absolute;	top: 107%; left:0%";>
			<form>
			<table>
				<tr>
					<td><img src="images/Bank12.png" width="15%" height="15%"><img src="images/upay.png"width="15%" height="15%"><img src="images/cash+.png"width="15%" height="15%"</td>
				</tr>
			</table>	
			
			</form>
			</div>
		
		
		
		</div>
		
				<div style="position: absolute;margin-top:15%;margin-left: 20%;" align="center">
		
			<form name="paymentdetails" method="post" action="update.php" onsubmit="return formValidatep()">
				<table cellpadding="20px">
					<caption><B><h1>Payment Information</h1></B></caption>
					<tr>
						<td><b>Payment Method:</b></td>
						<td><input type="radio" name="type" value="Credit Card" required>Credit Card 
							<input type="radio" name="type" value="Bank Transfer"> Bank
							<input type="radio" name="type" value="PayPal"> U Pay
							<input type="radio" name="type" value="Moneybookers"> Cash + </td>
							
					</tr>
					
					<tr>
						<td><b>Card Number: </b></td>
						<td><input type="text" name="cardno" required  placeholder="4XXXXXXXXXXXXXXX"></td>
					</tr>
					
					<tr>
						<td><b>Expires on:</b></td>
						<td><input type="date" name="date" placeholder="dd/mm/yyyy" required></td>
					</tr>
					
					<tr>
						<td><b>Confirm Mail:</b></td>
						<td><input type="text" name="mail" required></td>
					</tr>
					
					<tr>
						<th colspan="2"><input type="submit" name="placeorder" value="Place My Order"></th>
					</tr>
			</form>

		</div>
		

	

		<div style="position: absolute;	top: 140%; right: -15%";>
		
	<footer "style= text-align:center">
	
	
		
			<a href="home.php"> Home  &nbsp</a>|
			<a href="about_us.php"> About us  &nbsp</a>|
			<a href="categories.php"> Categories &nbsp </a>|
			<a href="FAQ.php"> FAQ &nbsp</a>|
			<a href ="feedback.php"> Feedback &nbsp</a>|
			<a href="Contact-us2.php"> Contact Us &nbsp</a>
			
	</div>
		
	<div style="position: absolute;	top: 140%; left: -49%";>
			
		<p>&copy; Copyright 2014 BuyBookBy.com</p>			
			
	</div>
			
	</footer>
		
	</body>
	
</html>

