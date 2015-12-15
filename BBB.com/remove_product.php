<?php
	error_reporting(E_ERROR | E_PARSE);
   	session_start();

	if(!(isset($_SESSION["email"]) && $_SESSION["email"] != ""))
	{
		header("Location: sign_in.php");
	}

?>


<!DOCTYPE html>

<!--USE THIS AS THE BASIC TEMPLATE TO BUILD A PAGE-->

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
				top: 35%;
				left: 35%;
				width: 80%;
			}
			
			
			
			.bodyform
		{
			width:265px;
			font-family:Arial;
			font-size:14px;
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
			
			
			
			
			
			
		</style>
	</head>
	
	<body>
		<div class="header">
			<div class="topnavigationBar" align="center">
				<nav>
					<a class="link2" href="check_logout.php" >Sign Out</a>|
					<a class="link2" href="admin_panel.php">Admin Panel</a>|
					<!--<a class="link2" href="#">Order Status</a>|-->
					<a class="link2" href="privacy_policy.php">Privacy Policy</a>|
					<a class="link2" href="terms_&_conditions.php">Terms &amp; Conditions</a>|
					<a class="link2" href="site_map.php">Sitemap</a>
				</nav>
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
		
		<div class="content">
			
			<form class="bodyform" name="form3" method="post" action="remove_product_query.php" >
				
				<h3>Enter the Book ID of the book to be removed. <br /> <br /></h3>
					
					<table cellspacing="10">
						<tr>
							<td>
								<label>Book ID	: </label>
							</td>
							<td>
								<input type="text" name="bid" />
							</td>
						</tr>
						<tr>
							<td>
								
							</td>
							<td>
								<input id="submit_button" type="submit" value="Submit" />
							</td>
						</tr>
					</table>
			</form>
			
		<div style="position: absolute; top: 100%; left: 50% ">
			
			
			
		</div>
		
	</body>
	
</html>

