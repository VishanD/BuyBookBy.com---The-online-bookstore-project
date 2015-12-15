<?php
error_reporting(E_ERROR | E_PARSE);

include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/responsiveslides.css">
		<link href="css/style(cart).css" rel="stylesheet" type="text/css"></head>
	<!--	<link href="style/style.css" rel="stylesheet" type="text/css"> -->
        <script src="javascripts/jquery.min.js"></script>
        <script src="javascripts/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1000,
			        
			        speed: 600
			      });
			});
		  </script>

		<script type="text/javascript" src="javascripts/loginpopup.js"></script>

		<title>	BuyBookBy.com | Books to live by	</title>
		<link rel="shortcut icon" href="images/logo.jpg" /> <!--Icon displayed with the title-->
		
		<style>
			
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
			
					
			

			
			
			
	
			
			
			
			<form id="Searchform" method="post" action="searchbar.php">
				<input type="text" name = "searchtext" class="searchText" placeholder="			         Search your book here!"> <!--keep the spaces-->
				<input type="submit" class="searchButton" value="Search"> <!--no need of an ID right?-->
			</form>	
		
		
		
		</div>
		
		<div style="position: absolute;	top: 161%; left:0%";>
			<form>
			<table>
				<tr>
					<td><img src="images/Bank12.png" width="15%" height="15%"><img src="images/upay.png"width="15%" height="15%"><img src="images/cash+.png"width="15%" height="15%"</td>
				</tr>
			</table>	
			
			</form>
			</div>
		
		<div id="products-wrapper">
 <h1>View Shopping Bag</h1>
 <div class="view-cart">
 	<?php
    $current_url = $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		if(!isset($_SESSION["email"]) && !isset($_SESSION["userlevel"]))
		{
			
			echo '<form method="post" action="sign_in.php">';
		}
		else {
		//	echo "<script>alert('Please sign in inorder to make payments ')</script>";
			
			echo '<form method="post" action="paymentdetails.php">';
		}
		echo '<ul>';
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   $results = mysqli_query($mysqli,"SELECT title,ISBN, price FROM BOOK WHERE bid='$product_code' LIMIT 1");
		   $obj = mysqli_fetch_array($results);
		   
		    echo '<li class="cart-itm">';
			echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
			echo '<div class="p-price">'.$currency.$obj['price'].'</div>';
            echo '<div class="product-info">';
			echo '<h3>'.$obj['title'].' (B-ID :'.$product_code.')</h3> ';
            echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
            echo '<div> ISBN - '.$obj['ISBN'].'</div>';
			echo '</div>';
            echo '</li>';
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj['title'].'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj['ISBN'].'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
			
        }
    	echo '</ul>';
		echo '<span class="check-out-txt">';
		echo '<strong>Total : '.$currency.$total.'</strong>  ';
		echo '</span>';
		if(!isset($_SESSION["email"]) && !isset($_SESSION["userlevel"]))
		{
			echo '<input type="submit" name = "makepayment" value = "Make Payment" onclick=message()>';
			
		}
		else {
		//	echo "<script>alert('Please sign in inorder to make payments ')</script>";
			
			echo '<input type="submit" name = "makepayment" value = "Make Payment" >';
		}
		
		echo '</form>';
		
		echo "<script>
				function message()
				{
						alert('Please sign in inorder to make payments ');
					
				} </script>";
		
    }else{
		echo 'Your Shopping Bag is empty';
	}
	
		
    ?>
    </div>
   </div>
   
   
    <div style="position:absolute;margin-top: 60px">
    <form>
    
    </form>
    </div>

		


		<div style="position: absolute;	top: 170%; left: 30%";>
		
		<footer "style= text-align:center">
		
		
			
			<a href="home.php"> Home  &nbsp</a>|
			<a href="about_us.php"> About us  &nbsp</a>|
			<a href="categories.php"> Categories &nbsp </a>|
			<a href="FAQ.php"> FAQ &nbsp</a>|
			<a href ="feedback.php"> Feedback &nbsp</a>|
			<a href="Contact-us2.php"> Contact Us &nbsp</a>
		
		</div>
			
		<div style="position: absolute;	top: 170%; left: 1%";>
				
			<p>&copy; Copyright 2014 BuyBookBy.com</p>			
				
		</div>
				
		</footer>
		
	</body>
	
</html>
