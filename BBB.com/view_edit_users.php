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
				left: 10%;
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
			
			<h2>List of all Customers <br /><br /></h2>
			
			<?php
			
				$sql9 = "SELECT * FROM CUSTOMER";
				
				$sql_result9 = mysql_query($sql9) OR die(mysql_error());
				
				if($sql_result9)
				{
					echo 
					"<table border = 1>
						<tr>
							 <th>cID</th> <th>email</th> <th>password</th> <th>telNo</th> <th>full_name</th> <th>address_no</th> <th>address_line1</th>
							 <th>address_line2</th> <th>city</th> <th>zipcode</th> <th>state</th> <th>country</th> 
							 <th>security_qn</th> <th>security_ans</th>
						</tr>";
						
					while ($row = mysql_fetch_array($sql_result9))
					{
						
						echo "<tr>";
						
						echo "<td>" .$row[cID] . "</td>";
						echo "<td>" .$row[email]. "</td>";
						echo "<td>" .$row[password]. "</td>";
						echo "<td>" .$row[telNo]. "</td>";
						echo "<td>" .$row[full_name]. "</td>";
						echo "<td>" .$row[address_no]. "</td>";
						echo "<td>" .$row[address_line1]. "</td>";
						echo "<td>" .$row[address_line2]. "</td>";
						echo "<td>" .$row[city]. "</td>";
						echo "<td>" .$row[zipcode]. "</td>";
						echo "<td>" .$row[state]. "</td>";
						echo "<td>" .$row[country]. "</td>";
						echo "<td>" .$row[security_qn]. "</td>";
						echo "<td>" .$row[security_ans]. "</td>";
						
						echo "</tr>";
						
					}
					
					echo "</table>";
				}
			
			
			?>
			
			<br /><br />
			
			<h4>Enter the cID of the Customer to remove them from the site.<br /></h4>
			
			
			<form class="bodyform" name="f5" method="post" action="edit_users_query.php">
				
				<table cellspacing="10">
						<tr>
							<td>
								<label>cID : </label>
							</td>
							<td>
								<input type="text" name="cID" />
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
			
			
		</div>
		<br /><br /><br /><br /><br /><br /><br /><br />

		<div style="position: absolute;	top: 150%; left: 30%";>
		
	<footer "style= text-align:center">
	
	
		
			<a href="home.php"> Home  &nbsp</a>|
			<a href="about_us.php"> About us  &nbsp</a>|
			<a href="categories.php"> Categories &nbsp </a>|
			<a href="FAQ.php"> FAQ &nbsp</a>|
			<a href ="feedback.php"> Feedback &nbsp</a>|
			<a href="Contact-us2.php"> Contact Us &nbsp</a>
			
	</div>
		
	<div style="position: absolute;	top: 150%; left: 1%";>
			
		<p>&copy; Copyright 2014 BuyBookBy.com</p>			
			
	</div>
			
	</footer>
	</body>
	
</html>

