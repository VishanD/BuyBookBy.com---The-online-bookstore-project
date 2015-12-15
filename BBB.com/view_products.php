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
				top: 30%;
				left: 20%;
				width: 80%;
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
			
			<h3>List of all Books </h3><br /><br />
			
			<?php
			
				$sql8 = "SELECT * FROM BOOK";
				
				$sql_result8 = mysql_query($sql8) OR die(mysql_error());
				
				if($sql_result8)
				{
					echo 
					"<table border = 1>
						<tr>
							  <th>bid</th> <th>price</th> <th>ISBN</th>	<th>title</th> <th>catID</th> <th>img_src</th> <th>quantity</th>
						</tr>";
						
					while ($row = mysql_fetch_array($sql_result8))
					{
						
						echo "<tr>";
						
						echo "<td>" .$row[bid] . "</td>";
						echo "<td>" .$row[price]. "</td>";
						echo "<td>" .$row[ISBN]. "</td>";
						echo "<td>" .$row[title]. "</td>";
						echo "<td>" .$row[catID]. "</td>";
						echo "<td>" .$row[img_src]. "</td>";
						echo "<td>" .$row[quantity]. "</td>";
						
						echo "</tr>";
						
					}
					
					echo "</table>";
				}
			
			
			?>
					<br /><br /><br /><br /><br /><br /><br /><br />
		</div>

		<div style="position: absolute;	top: 160%; left: 30%";>
		
	<footer "style= text-align:center">
	
	
		
			<a href="home.php"> Home  &nbsp</a>|
			<a href="about_us.php"> About us  &nbsp</a>|
			<a href="categories.php"> Categories &nbsp </a>|
			<a href="FAQ.php"> FAQ &nbsp</a>|
			<a href ="feedback.php"> Feedback &nbsp</a>|
			<a href="Contact-us2.php"> Contact Us &nbsp</a>
			
	</div>
		
	<div style="position: absolute;	top: 160%; left: 1%";>
			
		<p>&copy; Copyright 2014 BuyBookBy.com</p>			
			
	</div>
			
	</footer>
		
	</body>
	
</html>

