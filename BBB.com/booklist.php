<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
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
		<link href="css/style(cart).css" rel="stylesheet" type="text/css">
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
			
					
					
			<form id="Searchform" method="post" action="searchbar.php">
				<input type="text" name = "searchtext" class="searchText" placeholder="			         Search your book here!"> <!--keep the spaces-->
				<input type="submit" class="searchButton" value="Search"> <!--no need of an ID right?-->
			</form>	
		
		<div style="position: absolute;	top: 1930%; left:0%";>
			<form>
			<table>
				<tr>
					<td><img src="images/Bank12.png" width="15%" height="15%"><img src="images/upay.png"width="15%" height="15%"><img src="images/cash+.png"width="15%" height="15%"</td>
				</tr>
			</table>	
			
			</form>
			</div>
		
		</div>
		
		<div id="products-wrapper">
			<?php 
			$catID = $_GET['requestCatID']; 
			$catn = mysqli_query($mysqli, "SELECT cat_name FROM CATEGORY WHERE catID ='$catID'");
			$catna = mysqli_fetch_array($catn);
			
			
			
			 ?>
    <h1 >Books - <?php echo "$catna[0]"; ?></h1>
    
    <div class="products">
    <?php
    
    
  
   
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//	echo "<script>alert('".$current_url."')</script>";
	$requestCatID = $_GET['requestCatID'];
	
	
	
     if($_GET['exceed']==true )//if it exceeds the stock level get the exceed value from cart_update.php
	{
	//	echo "<script>alert('Order Level Exceeds the Current Stock')</script>";
		$current_url = chop($current_url,'&exceed=true'); // in order remove the &exceed=true part bcoz scnd tym we want to request
		echo "<script>alert('Order exceeds current stock level')</script>";
		
	
		
	}
	$results = mysqli_query($mysqli,"SELECT * FROM BOOK WHERE catID = '$requestCatID'  ORDER BY bid ASC");
	
	
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = mysqli_fetch_array($results))
        {
        
			
			echo '<div class="product">'; 
            echo '<form name ="cart" method="post" action="cart_update.php" >';
			echo '<div class="product-thumb"><img src="images/'.$obj['img_src'].'" height=100px width=90px></div>';
            echo '<div class="product-content"><h3>'.$obj['title'].'</h3>';
            echo '<div class="product-desc"> ISBN - '.$obj['ISBN'].'</div>';
            echo '<div class="product-info">';
			echo 'Price '.$currency.$obj['price'].' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" required/>';
			echo '<input type= "submit" name="addtocart" class="add_to_cart" value="Add To Bag">';
			echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj['bid'].'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';

        }
    
    }
    ?>
    </div>
    
<div class="shopping-cart">
<h2>Your Shopping Bag</h2>

<?php
//print_r($_SESSION["products"]);
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    
    foreach ($_SESSION["products"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">Book ID : '.$cart_itm["code"].'</div>';
        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
        echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php">Check-out!</a></span>';
	echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';
}
else{
echo 'Your Shopping Bag is empty';
}
?>
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
