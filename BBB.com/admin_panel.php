
<?php
	error_reporting(E_ERROR | E_PARSE);

	session_start();
	
	/*$uname = $_SESSION["email"];
	
	$sqlSP = "SELECT * FROM Admin_login WHERE admin_name = '$uname'";
	
	$sqlSP_result = mysql_query($sqlSP);
	
	$SP_num = mysql_num_rows($sqlSP_result);*/
	
	/*if(!(isset($_SESSION["email"]) && $_SESSION["email"] != ""))
	{
		header("Location: sign_in.html");
	}*/
	
	if($_SESSION["userlevel"] != 1)	/*This is the working code.*/
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
		
		<div style="position: absolute; top: 30%; left: 35%">
			
			<h4 align="center"> <big> Admin Panel </big> </h4>
			
			<table cellpadding="10px">
				<tr>
					<td>
						<a class="blue" href="add_products.php"><img src="Admin backend images/add.png" width="100" height="80" /> <br />
						Add products </a>
						
					</td>
					<td>
						<a class="blue" href="remove_product.php"><img src="Admin backend images/subtract.png" width="100" height="80"  /> <br />
						Remove products
						</a>
					</td>
					<td>
						<a class="blue" href="add_admin.php"><img src="Admin backend images/admin.jpeg" width="100" height="80"  /> <br />
						Add Admin
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a class="blue" href="view_orders.php"><img src="Admin backend images/orders add.png" width="100" height="80" /> <br />
						View and Edit Orders
						</a>
					</td>
					
					<td>
						<a class="blue" href="view_products.php"><img src="Admin backend images/orders remove.jpeg" width="100" height="80" /> <br />
						View Products
						</a>
					</td>
					
					<td>
						<a class="blue" href="view_edit_users.php"><img src="Admin backend images/users.jpeg" width="100" height="80" /> <br />
						View and Edit Users
						</a>
					</td>
				</tr>
				
				<tr>
					<td>
						<a class="blue" href="view_feedback.php"><img src="Admin backend images/feedback.svg" width="100" height="80" /> <br />
						Feedback messages
						</a>
					</td>
					
					<!--<td>
						<a class="blue" href="view_contact_us.php"><img src="Admin backend images/contact us.png" width="100" height="80" /> <br />
						Site Messages
						</a>
					</td>-->
					
					<td>
						
						
					</td>
				</tr>
			</table>
			 <br /><br /><br /><br /><br />
		</div>

		<div style="position: absolute; top: 100%; left: 50% ">

			
		</div>
		
	</body>
	
</html>

