<?php
	error_reporting(E_ERROR | E_PARSE);
	require 'db_connect.php';
	
	$cID = $_POST["cID"];
	
	$sql9 = "DELETE FROM CUSTOMER WHERE cID='$cID'";
	
	$sql_result9 = mysql_query($sql9) OR die (mysql_error());
	
	if($sql_result9)
	{
		echo "<script type='text/javascript'>alert('Customer $cID successfully removed.');window.location.href='view_edit_users.php'</script>";
	}
	else
	{
		echo "Query failed.";
		
	}

?>