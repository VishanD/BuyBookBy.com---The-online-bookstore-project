<?php
	error_reporting(E_ERROR | E_PARSE);
	$host = "localhost";	//server name
	$username = "root";	//db username
	$password = "";	//db password
	$db = "Bookstore";	//db name

	$result = mysql_connect($host, $username, $password) or die(mysql_error());

	if ($result)
	{
		mysql_select_db($db) or die("Cannot select Database.");
	}

?>