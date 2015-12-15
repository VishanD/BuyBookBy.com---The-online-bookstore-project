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
		
		<div class="content">
			
			<h3>List of Contact Us messages </h3><br /><br />
			
			<?php
			
				$sql11 = "SELECT * FROM COMMENT";
				
				$sql_result11 = mysql_query($sql11) OR die(mysql_error());
				
				if($sql_result11)
				{
					echo 
					"<table border = 1>
						<tr>
							 <th>coID</th> <th>comment</th> <th>cID</th>
						</tr>";
						
					while ($row = mysql_fetch_array($sql_result11))
					{
						
						echo "<tr>";
						
						echo "<td>" .$row[coID] . "</td>";
						echo "<td>" .$row[comment]. "</td>";
						echo "<td>" .$row[cID]. "</td>";
						
						echo "</tr>";
						
					}
					
					echo "</table>";
				}
			
			
			?>
					
			<!--A stray form tag was here-->
		</div>

		<footer>
			<p>
					
			</p>
		</footer>
		
	</body>
	
</html>

