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
				font-family:sans-serif;
				position: absolute;
				top: 25%;
				left: 15%;
				width: 80%;
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
		
		<div style="position: absolute;	top: 1600%; left:0%";>
			<form>
			<table>
				<tr>
					<td><img src="images/Bank12.png" width="15%" height="15%"><img src="images/upay.png"width="15%" height="15%"><img src="images/cash+.png"width="15%" height="15%"</td>
				</tr>
			</table>	
			
			</form>
			</div>
		
		<div class="content">
	
		<div class ="FAQ">
		
				<h3>Frequently Asked Questions</h3>	
				<ul type="disc">
				<li><a href="#1"> How do I find the products I want?</a><br></li><br><br>			
				<li><a href="#2"> My shopping cart has disappeared. What's wrong?</a><br></li>	<br><br>
				<li><a href="#3"> How do I notify you of changes to my mailing address and email address?</a></li>	<br><br>
				<li><a href="#4"> Are transactions safe?</a><br></li><br><br>	
				<li><a href="#5"> Do I have to use a credit card to order online? Are purchase orders accepted?</a><br></li><br><br>	
				<li><a href="#6"> What if I can't find what I'm looking for?</a><br></li><br><br>	
				<li><a href="#7"> Why do I need to register on the site before I can place an order?</a><br></li><br><br>	
				<li><a href="#8"> How do I Login?</a><br></li><br><br>
				<li><a href="#9"> I haven't bought at the buybookby.com Online before. How do I register?</a><br></li><br><br>
				<li><a href="#10"> I tried to register and I am being told I am already registered, how can I Login?</a><br></li></ul>


		<div class ="FAQ">
		
<br> <br> <br> <br> <br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	<h2><a name="1"></a> How do I find the products I want?</h2>
			<p> 
				Browse: Go to categories tab and click on it. Then you will see the categories list. Click on the relavent category.<br><br>

				Search Bar: To optimize your search results, we suggest using specific keywords word search term, either by the book name, or the book title.

			</p>
						
			
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>



	<h2><a name="2"></a> My shopping cart has disappeared. What's wrong?</h2>
			<p>
				
				You should sign in first to see your shopping cart.
			
			</p>
			
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			



	<h2><a name="3"></a> How do I notify you of changes to my mailing address and email address? </h2>
			<p>

				You can go to your profile which is located in the top navigation bar which you will be able to see after logging in.
			
			</p>

			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


	<h2><a name="4"></a> Are transactions safe? </h2>

			<p>
				
				Buybookby.com is using the latest security implementations. So, it is safe.
				
			</p>

			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

	<h2><a name="5"></a> Do I have to use a credit card to order online? Are purchase orders accepted?</h2>

			<p>
				
				Yes, the payment method is Credit or debit cards. Therefore it is essential to have a credit or a debit card.
			
			</p>

			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


	<h2><a name="6"></a> What if I can't find what I'm looking for? </h2>

			<p>
				
				The best way to locate a product in the online bookstore is to use the search bar. If you still can't find it, please feel free to contact us using the contact us menu.

			</p>
			
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


	<h2><a name="7"></a> Why do I need to register on the site before I can place an order?</h2>

			<p>
				
				Establishing an online account with buybookby.com assures you that your purchasing information is secure, confidential and accessible to you.  Once you establish an account, you will only need to sign-in to place an order in the future, check on the status of your current order,  view past purchases or update your profile information.

			</p>
			
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

	<h2><a name="8"></a> How do I Login?</h2>

			<p>
				
    			You can Login at any time.<br>
    			Click on the Login link on the top navigation bar. (top right)<br>
    			Fill in your email address and password.<br>
    			Click the Login button, and continue shopping.
    		
    		</p>

			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>



	<h2><a name="9"></a> I haven't bought at the buybookby.com Online before. How do I register?</h2>

 			<p> 
 				
 				Click on the Register link on the sidebar (top right)<br>
     			Register with Facebook or complete the form
     		
     		</p>
     		
     		
     		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br><br/><br/><br/><br><br/><br/><br/><br><br />


	<h2><a name="10"></a> I tried to register and I am being told I am already registered, how can I Login?</h2>

			<p>
				
				You can only register using your email address once. Please contact the customer service or email us.
			
			</p>
			
			
			

				
			</div>			
			</div>			
			</div>
			
			<div style="position: absolute;	top: 1610%; left: 30%";>
		
			<footer "style= text-align:center">
	
			
				
			<a href="home.php"> Home  &nbsp</a>|
			<a href="about_us.php"> About us  &nbsp</a>|
			<a href="categories.php"> Categories &nbsp </a>|
			<a href="FAQ.php"> FAQ &nbsp</a>|
			<a href ="feedback.php"> Feedback &nbsp</a>|
			<a href="Contact-us2.php"> Contact Us &nbsp</a>
					
			</div>
				
			<div style="position: absolute;	top: 1610%; left: 1%";>
					
				<p>&copy; Copyright 2014 BuyBookBy.com</p>			
					
			</div>
					
			</footer>


		
	</body>
	
</html>

