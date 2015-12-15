<?php
	
	error_reporting(E_ERROR | E_PARSE);
	require 'db_connect.php';
	$admin_name = $_POST["admin_name"];
	$password = $_POST["password"];
		
	$sql5 = "INSERT INTO Admin_login(admin_name, password) VALUES ('$admin_name', '$password')";
		
	$sql_result5 = mysql_query($sql5) OR die (mysql_error());
		
	if($sql_result5)
	{
		echo "<script type='text/javascript'>alert('New admin created!');window.location.href='add_admin.php'</script>";
	}
	else
	{
		echo "Query failed.";
		
	}
?>