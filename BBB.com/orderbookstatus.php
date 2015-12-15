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
					margin-left:86%;
					margin-top:-20px;
					
				}
				
			.shop
				{
					margin-top:-5px;
					margin-left:87%;
				}
						
			
				.submit_button
				{
				width:200px;
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
				margin-left:-360px;
				}
		</style>
	</head>
	
	<body>
		<div class="header">
			<div class="topnavigationBar" align="center">
				<nav>
					<?php 
					error_reporting(E_ERROR | E_PARSE);
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
				
				<a href="view_cart.php"><img class="bag"src="images/shopping_bag.jpg" height="85" width="85"</a>
				<p class="shop">Shopping Bag</p>
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
		
		<div style="position: absolute;	top: 156%; left:-4%";>
			<form>
			<table>
				<tr>
					<td><img src="images/Bank12.png" width="30%" height="200%"><img src="images/upay.png"width="30%" height="200%"><img src="images/cash+.png"width="30%" height="200%"</td>
				</tr>
			</table>	
			
			</form>
			</div>

		
		

		
		<div class="content">
				
			<?php
			
			include_once("config.php");
			session_start();
			
			 ?>


	<style type="text/css"> 
	th,td{ padding-right:40px; 
	padding-left:40px; height:40px; } 
	</style> 
	 
	 		
	 	<?php
   
   $viewEdit=$_SERVER['QUERY_STRING'];
   
           $res1=mysqli_query($mysqli,"SELECT o.O_num,c.full_name,c.telNo,c.address_no,c.address_line1,c.address_line2,c.city,c.zipcode,c.state,c.country,o.total_price
	 		 FROM ORDERS o,CUSTOMER c 
	 		 WHERE o.cID=c.cID AND O_num=$viewEdit");
			 
			 
			 echo "<table>  ";
			  while($row2 = mysqli_fetch_array($res1)) {
					
				
		
			 
			 	
			 	
			 	echo "<tr><td colspan='2' align='center'><h1>"."Order NO : ".$row2['O_num']."</h1></td></tr>"; 
				echo "<tr><td><B>Status:<B></td> <td> Processing</td></tr>"; 
				echo "<tr><td><B>"."Billing Details : <B></td>";
				echo "<td><br><br><br><br>".$row2['full_name']."<br>"; 
				echo $row2['address_no']."<br>";
				echo $row2['address_line1']."<br>";
				echo $row2['address_line2']."<br>";
				echo $row2['city']."<br>";
				echo $row2['zipcode']."<br>";
				echo $row2['state']."<br>";
				echo $row2['country']."</h4>"."<br></td></tr>";
				
				
				}
			  
			  echo "</table>";
			  
			  
			// echo '<h1>Ordered Booklist</h1>';
			 
			 $orderlist = mysqli_query($mysqli,"SELECT  b.title,c.bquantity,b.price FROM CUSTOMER_ORDER_BOOK c,BOOK b WHERE c.O_num =$viewEdit AND b.bid = c.bid");
			 $total = 0;
			 $ordertotal =0;
			 echo "<table>
			 		<caption><h1>Ordered Booklist</h1> </caption>
			 		<tr><h3>
			 			<th>Book Title</th>
			 			<th>Quantity</th>
			 			<th>Unit Price</th>
			 			<th>Total(Rs.)</th>
			 			</h3>
			 		</tr>
			 		
					
			 	
			 		
					
					
			 			";
			 		
			 while($bookdetail = mysqli_fetch_array($orderlist))
			 {
			 	
			 	$total = $bookdetail['bquantity']*$bookdetail['price'];
			 	echo "<tr><td align = 'left'>". $bookdetail['title']."</td>";
			 	echo "<td align='center'>".$bookdetail['bquantity']."</td>";
			 	echo "<td align = 'center'>".$bookdetail['price']."</td>";
			 	echo "<td align = 'center'> ".$total."</td>";
				echo "</tr>";
				$ordertotal = $ordertotal + $total;
			 
			 	
			 }
			 echo "<tr><td colspan='4' align ='center'><h3>Order Total : ".$currency."".$ordertotal." </h3><td><tr>";
			 echo "</table>";
			  
			
			  
				?>
   
     <div align="center">
     	<a href="orderstatus.php" style="text-decoration: none"><input type="button" class="submit_button"name="back" value="Back To Manage Orders"></a>
     <div id="name">
       
     </div>	
	 	
			 	
			 	
			 	
    </table>
	 		
	 		



			
			
			
			
			
			
			
		</div>
		

		
<div style="position: absolute;	top: 150%; left: 30%";>
		
	<footer "style= text-align:center">
	
	
		
			<a href="home.php"> Home  &nbsp</a>|
			<a href="about_us.php"> About us  &nbsp</a>|
			<a href="categories.php"> Categories &nbsp </a>|
			<a href="FAQ.php"> FAQ &nbsp</a>|
			<a href ="feedback.php"> Feedback &nbsp</a>|
			<a href="Contact-us2.php"> Contact Us &nbsp</a>
			
	</div>
		
	<div style="position: absolute;	top: 150%; left: -11%";>
			
		<p>&copy; Copyright 2014 BuyBookBy.com</p>			
			
	</div>
			
	</footer>
	
		
		
	</body>
	
</html>

