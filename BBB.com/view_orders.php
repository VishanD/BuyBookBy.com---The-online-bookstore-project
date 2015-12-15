<?php
	error_reporting(E_ERROR | E_PARSE);
	require 'db_connect.php';
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
		
		<script type="text/javascript" src="javascripts/loginpopup.js"></script>

		<title>	BuyBookBy.com | Books to live by	</title>
		<link rel="shortcut icon" href="images/logo.jpg" /> <!--Icon displayed with the title-->
		
		<style type="text/css">
			div.content
			{
				position: absolute;
				top: 40%;
				left: 30%;
				width: 80%;
			}
			
			.submit_button
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
					<a class="link2" href="sign_in.php">Sign Out</a>|
					
					<a class="link2" href="admin_panel.php">Admin Panel</a>|
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
			
			<h3>List of all Orders</h3> <br /><br />
			
			<?php
			
				$sql6 = "SELECT * FROM ORDERS";
				
				$sql_result6 = mysql_query($sql6) OR die(mysql_error());
				
				if($sql_result6)
				{
					echo 
					"<table border = 1>
						<tr>
							<th>O_num</th> <th>Quantity</th> <th> total_price </th> <th>placing Date</th> <th>payment_method</th>
							<th> cID </th>
						</tr>";
						
					while ($row = mysql_fetch_array($sql_result6))
					{
						
						echo "<tr>";
						
						echo "<td>" .$row[O_num] . "</td>";
						echo "<td>" .$row[quantity]. "</td>";
						echo "<td>" .$row[total_price]. "</td>";
						echo "<td>" .$row[placing_date]. "</td>";
						echo "<td>" .$row[payment_method]. "</td>";
						echo "<td>" .$row[cID]. "</td>";
						
						echo "</tr>";
						
					}
					
					echo "</table>";
				}
			
			
			?>
			
			<form name="f3"method="post" action="orders_query.php">
				
				<br /> <br /><h4>Enter the Order number of the order to be removed. </h4><br /> <br />
					
					<table cellspacing="10">
						<tr>
							<td style="color: #001A66">
								Order Number : 
							</td>
							<td>
								<input type="text" name="O_num" />
							</td>
						</tr>
						<tr>
							<td>
								
							</td>
							<td>
								<input type="submit" class="submit_button" value="Submit" />
							</td>
						</tr>
					</table>
			</form>
					
			<!--A stray form tag was here-->
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
		
	<div style="position: absolute;	top: 140%; left: 1%";>
			
		<p>&copy; Copyright 2014 BuyBookBy.com</p>			
			
	</div>
			
	</footer>
		
	</body>
	
</html>

