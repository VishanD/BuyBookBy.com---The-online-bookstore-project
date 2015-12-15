<?php
    require 'config.php';
	session_start();
	
	
	$name=$_POST['inputname'];
	$message=$_POST['tmessage'];
	
		$cusemail = $_SESSION["email"];
		
		$cusIDquery = mysqli_query($mysqli,"SELECT cID FROM CUSTOMER WHERE email = '$cusemail'");
		$cusIDfetch = mysqli_fetch_array($cusIDquery);
		$cusID = $cusIDfetch[0];
	
	
	

	

	if(isset($_POST["submit"])) {
		
	$res=mysqli_query($mysqli,"INSERT INTO FEEDBACK(feedback,cID)  VALUES ('$message',$cusID)");
	}
		
		 if($res){
		   
		    echo "<script type='text/javascript'>alert('Your feedback has been sent!');window.location.href='home.php'</script>";
			
		 	
		 }
		 else {
			 	echo "<script type='text/javascript'>alert('Some error occured! Please check');window.location.href='feedback.php'</script>";
			 	
		 }
		 

	
	
	

    
    ?>
    
    
    
    
    
    




