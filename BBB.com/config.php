<?php
    
$currency = 'Rs.'; 
$db_username = 'root';
$db_password = '';
$db_name = 'Bookstore';
$db_host = 'localhost';
//create connection
$mysqli =  mysqli_connect($db_host, $db_username, $db_password,$db_name);

//check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>