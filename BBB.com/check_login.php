<?php
	error_reporting(E_ERROR | E_PARSE);
	require 'db_connect.php';

	$email = $_POST["email"];
	$password = $_POST["password"];

	$sql1 = "SELECT * FROM CUSTOMER WHERE email='$email' AND password='$password'";
	
	$sql2 = "SELECT * FROM Admin_login WHERE admin_name='$email' AND password='$password'";	//admin login

	$query_result1 = mysql_query($sql1);
	$query_result2 = mysql_query($sql2);
	
	$row_count1 = mysql_num_rows($query_result1);
	$row_count2 = mysql_num_rows($query_result2);
	
	if($row_count1 == 1)
	{
		session_start();
		$_SESSION["email"] = $_POST["email"];
		$_SESSION["userlevel"] = 2;
		
		if(isset($_SESSION["products"]))
		{
			header('Location: view_cart.php');
		}
		
		else {
			header('Location: home.php');
		}
	}
	elseif ($row_count2 == 1)
	{
		session_start();
		$_SESSION["email"] = $_POST["email"];
		$_SESSION["userlevel"] = 1;
		
		header('Location: admin_panel.php');
	}
	else
	{
		echo "<script type='text/javascript'>alert('Wrong email or password!');window.location.href='sign_in.php'</script>";
	}
	
?>
		 

