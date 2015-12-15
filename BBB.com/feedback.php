<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<script type="text/javascript" src="javascripts/loginpopup.js"></script>
		<script type="text/javascript" src="javascripts/feedbackvalid.js"></script>

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
			
			.feepic
			{
				margin-left:50%;
				margin-top:-40%;
			}
			
			.bodyform
			{
				margin-left:-1%;
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
				
			label{color:#001A66;
				  font-family:sans-serif;
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
		
		
			<div style="position: absolute;	top: 131%; left:0%";>
			<form>
			<table>
				<tr>
					<td><img src="images/Bank12.png" width="15%" height="15%"><img src="images/upay.png"width="15%" height="15%"><img src="images/cash+.png"width="15%" height="15%"</td>
				</tr>
			</table>	
			
			</form>
			</div>
		
		<div class="content">
			
			


        <div align="center">
        
       
        
              
        </div>
        
        <br><br>
       
        <div class="cform">
        	 <h2>Your Feedback</h2>
        	<?php
        	if(!isset($_SESSION["email"]) && !isset($_SESSION["userlevel"]))
		{
			
			echo '<form class="bodyform" name="frmcontact"  method="post" action="sign_in.php" onsubmit="return formValidate()">';
		}
		else {
		//	echo "<script>alert('Please sign in inorder to make payments ')</script>";
			
			echo '<form class="bodyform" name="frmcontact"  method="post" action="feedprocessing.php" onsubmit="return formValidate()">';
		}	
		?>
            <form class="bodyform" name="frmcontact"  method="post" action="feedprocessing.php" onsubmit="return formValidate()">
                <table cellpadding="10px">
                    <tr>
                        <td><label> Your Name  <label>  :-</td>
                        <td><input type="text" name="inputname"  ></td>
                    </tr>
                    
                    <tr>
                        <td> <label>Your Message :- </label></td>
                        <td>
                            <textarea name="tmessage"  cols="40" rows="8"> </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>
                        	
                        	<?php
                        	
                        	
                        	if(!isset($_SESSION["email"]) && !isset($_SESSION["userlevel"]))
							{
								echo '<input id="submit_button"type="submit" name="submit" value="Send Feedback" onclick=message()>';
			
							}
							else {
		//	echo "<script>alert('Please sign in inorder to make payments ')</script>";
			
								echo '<input id="submit_button"type="submit" name="submit" value="Send Feedback">';
							}
							
									echo "<script>
								function message()
								{
									alert('Please sign in inorder to send a feedback ');
					
								} </script>";
							
                        	
                        	?>
                        	
                        	</td>
                    </tr>
                </table>
            </form>
            
            <img  class="feepic" src="images/feedback.jpg">
            
            
        </div>
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