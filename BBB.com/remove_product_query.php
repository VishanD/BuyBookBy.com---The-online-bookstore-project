<?php
	error_reporting(E_ERROR | E_PARSE);
	require 'db_connect.php';
	
	$bid = $_POST["bid"];
	
	$sql4 = "DELETE FROM BOOK WHERE bid='$bid'";
	
	$sql_result4 = mysql_query($sql4) OR die (mysql_error());
	
	if($sql_result4)
	{
		echo "<script type='text/javascript'>alert('Successfully removed!');window.location.href='admin_panel.php'</script>";
	}
	else
	{
		echo "Query failed.";
		
	}

?>