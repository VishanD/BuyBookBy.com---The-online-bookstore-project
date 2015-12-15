



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
				left: 15%;
				width: 80%;
			}
						
			.ang{
				position: absolute;
				left:20%;
				margin-top:15%;
				font-size:20px;
				color:#001A66;
				font-family:sans-serif;
				}
				
			
			.searchHeading{
							position:absolute;
							left:20%;
							font-size:50px;
				
						  }
						  
			.searchError{
						text-align:center;
						margin-top:150px;
						margin-left:-15%;
						color:red;
						font-size: 20px;
						font-family: sans-serif;
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
		
		<div style="position: absolute;	top: 421%; left:0%";>
			<form>
			<table>
				<tr>
					<td><img src="images/Bank12.png" width="15%" height="15%"><img src="images/upay.png"width="15%" height="15%"><img src="images/cash+.png"width="15%" height="15%"</td>
				</tr>
			</table>	
			
			</form>
			</div>
		
	
	
		
		
		<div class="content">
			
		<h1 class="searchHeading">Your Search Results...</h1>
		
		<p class="result">
			
			<?php
    
   			error_reporting(E_ERROR | E_PARSE);
   			$mysql_host="localhost";
   			$mysql_user="root";
   			$mysql_pass="";
   
   			$mysql_db="bookstore";
   
   if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_db))
   {
   		die(mysql_error());
   }
 			$output='';
	
	
	
	if(isset($_POST["searchtext"])) 
	{
			$searchq=$_POST["searchtext"];
			$searchq=preg_replace("#[^0-9a-zA-Z]#i","",$searchq);
			$query=mysql_query("select *
								from author_book c, author a,book b
								where (c.bid=b.bid and c.aid=a.aid )and b.title like '%$searchq%'  ") or die("Could not search!");
		 
			$count=mysql_num_rows($query);
		
				if($count==0)
				{
					$output="Sorry! We couldn't find what you want :( <br><br> Please <a href=Contact-us2.php>contact us</a> to request your book here. ";
					echo "<div class='searchError'>".$output."</div>";
				}
				
				 else 
					
				{
					while($row=mysql_fetch_array($query))
						{
							
							echo '<a class="ang" href="booklist.php?requestCatID='.$row['catID'].'&return_url1='.$current_url.'">';
							
							echo $row['title']."<br>";
							echo $row['name']."<br>";
							
							echo '</a>'."<br>"."<br>"."<br>"."<br>"."<br>";
							
							echo "<br/>";
							
						}
						
				}
					
				
	}
				 
					
		?>	
			</p>	
		</div>

		<div style="position: absolute;	top: 430%; left: 30%";>
		
		<footer "style= text-align:center">
		
		
			
			<a href="home.php"> Home  &nbsp</a>|
			<a href="about_us.php"> About us  &nbsp</a>|
			<a href="categories.php"> Categories &nbsp </a>|
			<a href="FAQ.php"> FAQ &nbsp</a>|
			<a href ="feedback.php"> Feedback &nbsp</a>|
			<a href="Contact-us2.php"> Contact Us &nbsp</a>
				
		</div>
			
		<div style="position: absolute;	top: 430%; left: 1%";>
				
			<p>&copy; Copyright 2014 BuyBookBy.com</p>			
				
		</div>
				
		</footer>
		
	</body>
	
</html>







	

