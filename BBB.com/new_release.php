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
				margin-top:40%;
				
			}
			
			.bag
				{
					margin-left:84%;
					margin-top:-12px;
					
				}
				
			.shop
				{
					margin-top:5px;
					margin-left:86%;
				}
				
				
			
			  /* WebKit and Opera browsers */
			  @-webkit-keyframes spinner {
			    from { -webkit-transform: rotateY(0deg);    }
			    to   { -webkit-transform: rotateY(-360deg); }
			  }
			
			  /* all other browsers */
			  @keyframes spinner {
			    from {
			      -moz-transform: rotateY(0deg);
			      -ms-transform: rotateY(0deg);
			      transform: rotateY(0deg);
			    }
			    to {
			      -moz-transform: rotateY(-360deg);
			      -ms-transform: rotateY(-360deg);
			      transform: rotateY(-360deg);
			    }
			  }
			  
			  #stage {
			    margin: 1em auto;
			    -webkit-perspective: 1200px;
			    -moz-perspective: 10200px;
			    -ms-perspective: 1200px;
			    perspective: 1200px;
			    margin-top:320px;
			 
			   }
			   
			    #spinner {
			    -webkit-animation-name: spinner;
			    -webkit-animation-timing-function: linear;
			    -webkit-animation-iteration-count: infinite;
			    -webkit-animation-duration: 6s;
			
			    animation-name: spinner;
			    animation-timing-function: linear;
			    animation-iteration-count: infinite;
			    animation-duration: 6s;
			
			    -webkit-transform-style: preserve-3d;
			    -moz-transform-style: preserve-3d;
			    -ms-transform-style: preserve-3d;
			    transform-style: preserve-3d;
			  }
			
			  #spinner:hover {
			    -webkit-animation-play-state: active;
			    animation-play-state: active;
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
		else {
			echo '<a class="link2" href="check_logout.php">Sign out</a>|';
			echo'<a class="link2" href="my_account.php">My Account</a>|';
			echo'<a class="link2" href="orderstatus.php">Order Status</a>|';
		}
		
		
		
		?>

					
					<a class="link2" href="privacy_policy.php">Privacy Policy</a>|
					<a class="link2" href="terms_&_conditions.php">Terms &amp; Conditions</a>|
					<a class="link2" href="#">Sitemap</a>
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
		</div>
		
		<div style="position: absolute;	top: 122%; left:0%";>
			<form>
			<table>
				<tr>
					<td><img src="images/Bank12.png" width="15%" height="15%"><img src="images/upay.png"width="15%" height="15%"><img src="images/cash+.png"width="15%" height="15%"</td>
				</tr>
			</table>	
			
			</form>
			</div>
			
			
			
			
			
			<div id="stage">
					<p id="spinner" style="text-align: center; color:#FF9933;font-size:50px;font-family:Brush Script MT"><b> Released!!!</b></p>
				</div>
			
			

		
		<div class="content">
			
			<p>
				



			</p>
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

