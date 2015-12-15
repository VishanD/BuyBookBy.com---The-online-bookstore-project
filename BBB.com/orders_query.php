<?php
	
	error_reporting(E_ERROR | E_PARSE);
	
	require 'db_connect.php';
	
	$O_num = $_POST["O_num"];
	
	$sql7 = "DELETE FROM ORDERS WHERE O_num='$O_num'";
	
	$sql_result7 = mysql_query($sql7) OR die (mysql_error());
	
	if($sql_result7)
	{
		echo "<script type='text/javascript'>alert('Order number: $O_num was successfully removed.');window.location.href='view_orders.php'</script>";
	}
	else
	{
		echo "Query failed.";
		
	}

?>