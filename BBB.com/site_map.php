<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<script type="text/javascript" src="javascripts/loginpopup.js"></script>

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
				margin-top:35%;
				
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
				
			
			.site
				{
					position:absolute;
					margin-top: 150px;
					left:150px;
				}	
				
			
			a.site1:link
				{
					text-decoration:none;
				}
			
			a.site1:hover
				{
					font-size: 20px;
					color: red;
				}	
				
			.si
				{
					position:absolute;
					left:650px;
					margin-top:250px;
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

					
					<a class="link2" href="privacy_policy.php">Privacy Policy</a>|
					<a class="link2" href="terms_&_conditions.php">Terms &amp; Conditions</a>|
					<a class="link2" href="site_map.php">Sitemap</a>
				</nav>
				
						<?php 
		
		if(!isset($_SESSION["email"]) && !isset($_SESSION["userlevel"]) || $_SESSION["userlevel"] == 2)	{		
		
		echo	'<a href="view_cart.php"><img class="bag"src="images/shopping_bag.jpg" height="85" width="85"</a>
				<p class="shop">Shopping Bag</p>';
		}
		
		
		
		?>
				
				
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
		<?php 
		
		if(!isset($_SESSION["email"]) && !isset($_SESSION["userlevel"]) || $_SESSION["userlevel"] == 2)	{		
		
		echo	'<a class="link1" href="categories.php">Categories </a>';
		}
		
		
		
		?>
			
			
			<a class="link1" href="FAQ.php">FAQ </a>
			<?php 
		
		if(!isset($_SESSION["email"]) && !isset($_SESSION["userlevel"]) || $_SESSION["userlevel"] == 2)	{		
		
		echo	'<a class="link1" href="feedback.php">Feedback </a>';
		}
		
		
		
		?>
			<a class="link1" href="Contact-us2.php">Contact Us</a>			
			</nav>
		</div>
		
		<div>
			<form id="Searchform" method="post" action="searchbar.php">
				<input type="text" name = "searchtext" class="searchText" placeholder="			         Search your book here!"> <!--keep the spaces-->
				<input type="submit" class="searchButton" value="Search"> <!--no need of an ID right?-->
			</form>	
		</div>
		
		<div style="position: absolute;	top: 121%; left:0%";>
			<form>
			<table>
				<tr>
					<td><img src="images/Bank12.png" width="15%" height="15%"><img src="images/upay.png"width="15%" height="15%"><img src="images/cash+.png"width="15%" height="15%"</td>
				</tr>
			</table>	
			
			</form>
			</div>
			
			<img class="si" src="images/sitemap.png"width="30%">
			
			<div style="position: absolute;	top: 115%; left:88%";>
			<form>
			<table>
				<tr>
					
					<td><img src="images/apache.PNG" width="90%" height="90%"</td>
				</tr>
			</table>	
			
			</form>
			</div>
			
			

		
		<div class="sitemap">
			
		
			<div class="site" style='margin-left:40px'>
				
			<h2>Site map</h2>
		
			
			
				<a class="site1"href='home.php' class="list"><b>Home</b></a><br>
				<a class="site1"href='about_us.php' class="list"><b>About us</b></a><br>
				<a class="site1"href='categories.php' class="list"><b>Categories</b></a><br>
				<ul type="disc">
					<li><a class="site1"href='booklist.php?requestCatID=C01' class="list"><b>Children's Book</b></a><br></li>
					<li><a class="site1"href='booklist.php?requestCatID=C02' class="list"><b>Biography</b></a><br></li>
					<li><a class="site1"href='booklist.php?requestCatID=C03' class="list"><b>Comics</b></a><br></li>
					<li><a class="site1"href='booklist.php?requestCatID=C04' class="list"><b>Medicine</b></a><br></li>
					<li><a class="site1"href='booklist.php?requestCatID=C05' class="list"><b>Computing</b></a><br></li>
					<li><a class="site1"href='booklist.php?requestCatID=C06' class="list"><b>Romance</b></a><br></li>
					<li><a class="site1"href='booklist.php?requestCatID=C07' class="list"><b>Mystery</b></a><br></li>
					<li><a class="site1"href='booklist.php?requestCatID=C08' class="list"><b>Poetry</b></a><br></li>
					<li><a class="site1"href='booklist.php?requestCatID=C09' class="list"><b>Adventure</b></a><br></li>
					<li><a class="site1"href='booklist.php?requestCatID=C10' class="list"><b>Mathematics</b></a><br></li>
					
				</ul>
                <a class="site1"href='FAQ.php' class="list"><b>FAQ</b></a><br>
                <a class="site1"href='feedback.php' class="list"><b>Feedback</b></a><br>
               	<a class="site1"href='Contact-us2.php' class="list"><b>Contact us</b></a><br>
                <a class="site1"href='privacy_policy.php' class="list"><b>Privacy policy</b></a><br>
                <a class="site1"href='terms_&_conditions.php' class="list"><b>Terms of Services</b></a><br>
      		</div>                
		</div>


		
<div style="position: absolute;	top: 130%; left: 35%";>
		
	<footer "style= text-align:center">
	
	
		
			<a href="home.php"> Home  &nbsp</a>|
			<a href="about_us.php"> About us  &nbsp</a>|
			<a href="categories.php"> Categories &nbsp </a>|
			<a href="FAQ.php"> FAQ &nbsp</a>|
			<a href ="feedback.php"> Feedback &nbsp</a>|
			<a href="Contact-us2.php"> Contact Us &nbsp</a>
			
	</div>
		
	<div style="position: absolute;	top: 130%; left: 1%";>
			
		<p>&copy; Copyright 2014 BuyBookBy.com</p>			
			
	</div>
			
	</footer>
	
		
		
	</body>
	
</html>

