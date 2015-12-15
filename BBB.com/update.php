<?php
error_reporting(E_ERROR | E_PARSE);
 session_start();
include_once("config.php");
?>


<?php
	if(isset($_POST['placeorder']) && isset($_SESSION["products"]))
	{
		$total = 0;
		$cart_items = 0;
		$totalquantity=0;
		$paymethod = $_POST['type'];
		$date = date("Y/m/d");
		foreach ($_SESSION["products"] as $cart_itm)
        {
           	$product_code = $cart_itm["code"];
			$totalquantity = $totalquantity + $cart_itm["qty"];
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);
			

			
		}
		
		echo $total;
		
		$cusemail = $_SESSION["email"];
		
		$cusIDquery = mysqli_query($mysqli,"SELECT cID FROM CUSTOMER WHERE email = '$cusemail'");
		$cusIDfetch = mysqli_fetch_array($cusIDquery);
		$cusID = $cusIDfetch[0];
		$insertorder = "INSERT INTO ORDERS(quantity,total_price,placing_date,payment_method,cID) VALUES($totalquantity,$total,'$date','$paymethod',$cusID)";
		
		
		$res = mysqli_query($mysqli, $insertorder);

		
		$last= mysqli_query($mysqli, "SELECT MAX(O_num) FROM ORDERS");
		$lasindex = mysqli_fetch_array($last);
		
		$lindex = $lasindex[0];
		

	
   		
		if($res)
		{
			echo "success";
		}
		else {
			echo "error";
			
		}
		
		foreach ($_SESSION["products"] as $cart_itm)
        {
        	$qty1 = $cart_itm["qty"];
           	$product_code = $cart_itm["code"];
			$insobc = "INSERT INTO CUSTOMER_ORDER_BOOK VALUES($lindex,'$product_code',$cusID,$qty1)";
			$res1 = mysqli_query($mysqli, $insobc);
			
		
			
		}
		foreach ($_SESSION["products"] as $cart_itm)
        {
           	$product_code = $cart_itm["code"];
			$qty = $cart_itm["qty"];
			$upstock = "UPDATE BOOK SET quantity = quantity-$qty WHERE bid = '$product_code'";
			$res2 = mysqli_query($mysqli, $upstock);
			
			if($res2)
			{
				echo "success";
			}
			else {
				echo "failed";
			}
			
		}
		
		unset($_SESSION['products']);
		
		header('Location:paymentmade.php');
		
	
		
		 
		 
	}		
			
			
			
			
			
			
			
				
	
						   

				

?>


<?php 

		   		
?>