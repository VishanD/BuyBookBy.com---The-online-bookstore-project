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
				left: 10%;
				width: 80%;
			}
			
			.us
			{
				position:absolute;
				margin-left:-4%;
				margin-top:40%;
				
			}
			
			 .bag
				{
					margin-left:90%;
					margin-top:5px;
					
				}
				
			.shop
				{
					margin-top:-5px;
					margin-left:90%;
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
		
		<a href="view_cart.php"><img class="bag"src="images/shopping_bag.jpg" height="85" width="85"</a>
				<p class="shop">Shopping Bag</p>
			</div>
		
		<div>
			<form id="Searchform" method="post" action="searchbar.php">
				<input type="text" name = "searchtext" class="searchText" placeholder="			         Search your book here!"> <!--keep the spaces-->
				<input type="submit" class="searchButton" value="Search"> <!--no need of an ID right?-->
			</form>	
		</div>
		
		
		
		

		
		
			<div class="content">
			
			
			<?php
			
			
			
			
			
			 ?>


	<style type="text/css"> 
	th,td{ padding-right:40px; 
	padding-left:40px; height:40px; } 
	</style> 
	 <table border="5px" style="text-align: left ; padding-top: 0%;border-radius: 10px"> 
	 	<br><br>
	 <h3>Manage Orders</h3>
	 	<tr> 
	 		<th> Order Number </th> 
	 		<th> Placing Date </th> 
	 		<th> Address</th> 
	 		<th> Total Price</th> 
	    </tr>
	 		
	 		<?php 
	 		error_reporting(E_ERROR | E_PARSE);
	 		session_start();
			require("config.php");
			
			if(isset($_SESSION["email"]) && isset($_SESSION["userlevel"]))
			{
	 		$cusemail = $_SESSION["email"];
		
			$cusIDquery = mysqli_query($mysqli,"SELECT cID FROM CUSTOMER WHERE email = '$cusemail'");
			$cusIDfetch = mysqli_fetch_array($cusIDquery);
			$cusID = $cusIDfetch[0];
			
	 		 $res=mysqli_query($mysqli,"SELECT o.O_num,o.placing_date,c.address_no,c.address_line1,c.address_line2,o.total_price
	 		 FROM ORDERS o,CUSTOMER c 
	 		 WHERE o.cID=c.cID && o.cID = $cusID");
			 
			  while($row1 = mysqli_fetch_array($res)) {
					
				
		
			 echo "<tr>"; 
			 	
			 	
			 	echo "<td>".$row1['O_num']."</td>"; 
				echo "<td>".$row1['placing_date']."</td>";
				echo "<td>".$row1['address_no']." ".$row1['address_line1']." ".$row1['address_line2']."</td>";
				echo "<td>".$row1['total_price']."</td>";
				echo "<td>"."<a href=orderbookstatus.php?".$row1['O_num'];
				echo ">VIEW</a></td>";
		    	echo "</tr>";}
			  
			}
				?>
			 
			 	
			 	
			 	
			 	
			 	
			 	
			 	
			 	
			 	
			 	
			 	
			 	
			 	
    </table>
	 		
	 		

		</div>

		
		<div style="position: absolute;	top: 150%; left: 35%";>
		
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

