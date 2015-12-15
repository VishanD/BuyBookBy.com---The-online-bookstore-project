<?php
	error_reporting(E_ERROR | E_PARSE);
	
	require 'db_connect.php';
	$bid = $_POST["bid"];
	$price = $_POST["price"];
	$ISBN = $_POST["ISBN"];
	$title = $_POST["title"];
	$catID = $_POST["catID"];
	$imgSrc = $_POST["img_src"];
	$quantity = $_POST['quantity'];
		
	$sql3 = "INSERT INTO BOOK VALUES('$bid', '$price', '$ISBN', '$title', '$catID', '$imgSrc', '$quantity')";
		
	$sql_result3 = mysql_query($sql3) OR die (mysql_error());
		
	if($sql_result3)
	{
		echo "<script type='text/javascript'>alert('New product added successfully!');window.location.href='view_products.php'</script>";
	}
	else
	{
		echo "Query failed.";
		
	}
?>