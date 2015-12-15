<?php
error_reporting(E_ERROR | E_PARSE);


require 'db_connect.php';


	$name = $_POST['$inputyourname'];
	$email_1 = $_SESSION['email'];

	$feedback=$_POST['yourmessage'];
	
	$sql_cid = "SELECT cid FROM CUSTOMER WHERE email='$email_1'";


		if(isset($feedback))
			{
				$sql_feedback = "INSERT INTO feed_back (cID, feedback) VALUES ('$sql_cid', '$feedback')";    
				
				$result_feedback = mysql_query($sql_feedback);
				
			if($result_feedback)
				{
					echo "your feedback has been posted.";
				}
				else 
				{
					echo "ERROR";
				}
			}
?>