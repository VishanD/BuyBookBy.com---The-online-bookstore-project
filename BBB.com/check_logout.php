<?php

	error_reporting(E_ERROR | E_PARSE);
	session_start();
	$status = session_destroy();
	
	if($status)
	{
		header("Location:home.php");
	}
?> 