



<!DOCTYPE html>
<html lang="en">
	<head>
		

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/responsiveslides.css">

		

        <script src="javascripts/jquery.min.js"></script>
        <script src="javascripts/responsiveslides.min.js"></script>
		  <script>
		    
			    $(function () {
			  
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
			div.pictures{
				position:absolute;
				left:30%;
			}
			a.book:link{color: red}
			a.book:visited{color: red}
			a.book:hover{size: 200px}
			
			
		</style>
	</head>
	
	<body>
		<div class="header">
			<div class="topnavigationBar" align="center">
				<nav>
					<a class="link2" href="sign_in.html">Sign In</a>|
					<a class="link2" href="SignUp.php">Sign Up</a>|
					<a class="link2" href="#">Order Status</a>|
					<li id="nav-bks"><a class="link2" href="Privacy.php">Privacy Policy</a>|
					<a class="link2" href="terms&condition.php">Terms &amp; Conditions</a>|
					<a class="link2" href="#">Sitemap</a>
				</nav>
			</div>
	 		
	 			<img src="images/logo.jpg" width="10%" height="10%"> 	<!--can't add an anchor tag here. something appears on the page-->
	 		<a href="index.html">	
	 			<img src="images/LOGO FINAL.jpg" width="25%" height="30%"> 
	 		</a>
		</div>
		
		<div class="navigationBar1">
			<nav class="navBar1">
			<a class="link1" href="home.php">Home  </a>
			<a class="link1" href="AboutUs.php">About us </a>
			<a class="link1" href="catergories.php">Categories </a>
			<a class="link1" href="#">Shipping </a>
			<a class="link1" href="#">FAQ </a>
			<a class="link1" href="#">Feedback </a>
			<a class="link1" href="Contact-us.php">Contact Us</a>			
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
			
	
			
			
			<table width="500" cellpadding="27px;">
	<tr>
		<td align="center"align="justify">
 <a class ="book" href="#"><img src="basic.jpg.jpg"  height="200"width="150"/></a>
 <p>BASIC
 	PATHOLOGY<br />
 	PR :100</p>
<br />
</td>
<td align="center"align="justify">
<a href="#"><img src="1.jpg.jpeg"  height="200"width="150"/></a>
<p>THE
 	ODYSSEY<br />
 	PR :100</p>
<br />
</td>

<td align="center"align="justify">
 <a href="#"><img src="bulent.jpg.jpg"  height="200"width="150"/></a>
 <p>BULENT ATALAY<br />
 	PR :100</p>
<br />
</td>

<td align="center"align="justify">
 <a href="#"><img src="chummy.jpg.jpeg"  height="200"width="150"/></a>
 <p>LAST'S 
 	ANATOMY<br />
 	PR :100</p>
<br />
</td>

<td align="center"align="justify">
<a href="#"><img src="dan.jpg.jpg"  height="200"width="150"/></a>
<p>ANGELS <br/>
   AND 
   DEAMONS<br />
 	PR :100</p>
<br />
</td>
</tr>
<tr>
	<td align="center"align="justify">
 <a.book href="#"><img src="davincl.jpg.jpg"  height="199"width="150"/></a>
 <p>DAVINCI
 	CODE<br />
 	PR :100</p>
<br />
</td>
<td align="center"align="justify">
<a href="#"><img src="discrete.jpg.jpg"  height="200"width="150"/></a>
 <p>DISCRETE MATHEMATICS 
 	<br />
 	PR :100</p>
<br />
</td>

<td align="center"align="justify">
<a href="#"><img src="fifty.jpg.JPG"  height="200"width="150"/></a>
 <p>FIFTY SHADES<br/>
 	OF GREY<br />
 	PR :100</p>
<br />
</td>

<td align="center"align="justify">
 <a href="#"><img src="home.jpg.jpg"  height="200"width="150"/></a>
  <p>HOMER<br/>
  	THE ILIAD<br />
 	PR :100</p>
<br />
</td>


<td align="center"align="center">
<a href="#"><img src="michael.jpg.jpeg"  height="200"width="150"/></a>
 <p>MICHAEL
 	ONDAATJE<br />
 	PR :100</p>
<br />
</td>

</tr>

</table>

			
			

		</div>

		
		<div>
			
			
			
			<form id="Searchform" method="post" action="searchbar.php">
				<input type="text" name = "searchtext" class="searchText" placeholder="			Can't find what you want?"> <!--keep the spaces-->
				<input type="submit" class="searchButton" value="Search"> <!--no need of an ID right?-->
			</form>	
		
			



</div>

	
<div style="position: absolute;	top: 220%; left: 30%";>
		<footer "style= text-align:center">
	
	
		
			<a href="home.php"> Home  &nbsp</a>|
			<a href="AboutUs.php"> About us  &nbsp</a>|
			<a href="catergories.php"> Categories &nbsp </a>|
			<a href="#"> Shipping &nbsp </a>|
			<a href="#"> FAQ &nbsp</a>|
			<a href ="#"> Feedback &nbsp</a>|
			<a href="Contact-us.php"> Contact Us &nbsp</a>
			
		</div>
		
		<div style="position: absolute;	top: 220%; left: 1%";>
			
				<p>&copy; Copyright 2014 BuyBookBy.com</p>			
			</div>
			
		</footer>
		
	
	</body>
	
</html>

