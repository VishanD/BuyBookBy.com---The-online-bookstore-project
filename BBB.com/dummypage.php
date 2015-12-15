
<?php
	error_reporting(E_ERROR | E_PARSE);
	session_start();
	
	if(!(isset($_SESSION["email"]) && $_SESSION["email"] != ""))
	{
		header("Location: sign_in.php");
	}
	
?>

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
				div.pictures
				{
				position:absolute;
				top:100%;
				left:12%;
				}
				
				.bag
				{
					margin-left:85%;
					margin-top:-12px;
					
				}
				
				.shop
				{
					margin-top:5px;
					margin-left:87%;
				}
				
			div.showbook
			{
				-webkit-transition: 1s ease-in-out;
				 -moz-transition: 1s ease-in-out;
			}
			
			.showbook.slide:hover 
			{ 	
				-webkit-transform: scale(1.25);
				-moz-transform: scale(1.25); 
				-o-transform: scale(1.25); 
				-ms-transform: scale(1.25);
				transform: scale (1.25); 
			
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
			    -moz-perspective: 1200px;
			    -ms-perspective: 1200px;
			    perspective: 1200px;
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
					<a class="link2" href="check_logout.php">Sign out</a>|
					<a class="link2" href="sign_up.php">My Account</a>|
					<a class="link2" href="#">Order Status</a>|
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
		
			<div style="position: absolute;margin-top:15%;margin-left: 12%">
		<!--start-image-slider---->
					<div class="image-slider" align="center" style="border:5px double gray;border-radius: 10px">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="images/1.jpg" alt=""></li>
					      <li><img src="images/4.jpg" alt=""></li>
					      <li><img src="images/3.jpg" alt=""></li>
					       <li><img src="images/2.jpg" alt=""></li>
						 <!-- Slideshow 2 -->
						 </ul>
					</div>
						
			<!--End-image-slider---->		

		</div>

		
		<div>
			
			
			
			<form id="Searchform" method="post" action="searchbar.php">
				<input type="text" name = "searchtext" class="searchText" placeholder="			         Search your book here!"> <!--keep the spaces-->
				<input type="submit" class="searchButton" value="Search"> <!--no need of an ID right?-->
			</form>	
		
			
			
			
		</div>
		<div class="pictures">
			
			
			
			
				
			
			<table width="500" cellpadding="27px;">
				
				<div id="stage">
					<p id="spinner" style="text-align: center; color:#FF9933;font-size: 70px;font-family:Brush Script MT"><b>Best Sellers!!!</b></p>
				</div>
				
	<tr>
		<td align="center"align="justify">
 			<div class = "showbook slide"><a  href="booklist.php?requestCatID=C04"><img src="images/basic.jpg.jpg"  height="200"width="150"/></a>
			<p>BASIC
		 	PATHOLOGY<br />
		 	PRICE :Rs.100</p>
			<br />
		</td></div>
		<td align="center"align="justify">
			<div class = "showbook slide"><a href="booklist.php?requestCatID=C08"><img src="images/bbb1.jpg.jpeg"  height="200"width="150"/></a>
			<p>THE
			 	ODYSSEY<br />
			 	PRICE :Rs.100</p>
			<br />
		</td></div>

		<td align="center"align="justify">
 			<div class = "showbook slide"><a href="booklist.php?requestCatID=C10"><img src="images/bulent.jpg.jpg"  height="200"width="150"/></a>
			<p>MATH & MONA LISA<br />
			 	PRICE :Rs.100</p>
				<br />
		</td></div>

		<td align="center"align="justify">
 			<div class = "showbook slide"><a href="booklist.php?requestCatID=C04"><img src="images/chummy.jpg.jpeg"  height="200"width="150"/></a>
		 	<p>LAST'S 
		 	ANATOMY<br />
		 	PRICE :Rs.100</p>
			<br />
		</td></div>

		<td align="center"align="justify">
			<div class = "showbook slide"><a href="booklist.php?requestCatID=C07"><img src="images/dan.jpg.jpg"  height="200"width="150"/></a>
			<p>ANGELS <br/>
				AND DEAMONS <br />
			 	PRICE :Rs.100</p>
				<br />
		</td></div>
	</tr>
	
	<tr>
		<td align="center"align="justify">
 			<div class = "showbook slide"><a href="booklist.php?requestCatID=C07"><img src="images/davincl.jpg.jpg"  height="199"width="150"/></a>
			<p>DAVINCI
			 	CODE<br />
			 	PRICE :Rs.100</p>
				<br />
		</td></div>
		
		<td align="center"align="justify">
			<div class = "showbook slide"><a href="booklist.php?requestCatID=C10"><img src="images/discrete.jpg.jpg"  height="200"width="150"/></a>
			 <p>DISCRETE MATHEMATICS 
			 	<br />
			 	PRICE :Rs.100</p>
				<br />
		</td></div>

		<td align="center"align="justify">
			<div class = "showbook slide"><a href="booklist.php?requestCatID=C06"><img src="images/fifty.jpg.JPG"  height="200"width="150"/></a>
			 <p>FIFTY SHADES<br/>
			 	OF GREY<br />
			 	PRICE :Rs.100</p>
				<br />
		</td></div>

		<td align="center"align="justify">
 			<div class = "showbook slide"><a href="booklist.php?requestCatID=C08"><img src="images/home.jpg.jpg"  height="200"width="150"/></a>
				  <p>HOMER<br/>
				  	THE ILIAD<br />
				 	PRICE :Rs.100</p>
					<br />
		</td></div>


		<td align="center"align="center">
			<div class = "showbook slide"><a href="booklist.php?requestCatID=C06"><img src="images/michael.jpg.jpeg"  height="200"width="150"/></a>
				 <p>ENGLISH PAPTIENT
				 	<br />
				 	PRICE :Rs.100</p>
					<br />
		</td></div>

	</tr>
	
	

</table>
			
			

	</div>
	</div>

	<div style="position: absolute;	top: 250%; left: 30%";>
		
	<footer "style= text-align:center">
	
	
		
			<a href="home.php"> Home  &nbsp</a>|
			<a href="about_us.php"> About us  &nbsp</a>|
			<a href="categories.php"> Categories &nbsp </a>|
			<a href="FAQ.php"> FAQ &nbsp</a>|
			<a href ="feedback.php"> Feedback &nbsp</a>|
			<a href="Contact-us2.php"> Contact Us &nbsp</a>
			
	</div>
		
	<div style="position: absolute;	top: 250%; left: 1%";>
			
		<p>&copy; Copyright 2014 BuyBookBy.com</p>			
			
	</div>
			
	</footer>
	

		
	</body>
	
</html>

