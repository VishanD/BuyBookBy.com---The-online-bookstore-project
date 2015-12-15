<?php
    require 'config.php';
	
	
	$name=$_POST['txta'];
	$addressNO=$_POST['txtb'];
	$address=$_POST['txtc'];
	$address2=$_POST['txtd'];
	$city=$_POST['txte'];
	$zip=$_POST['txtf'];
	$state=$_POST['txtg'];
	$country=$_POST['cust_address_country'];
	$contact=$_POST['txth'];
	$email=$_POST['txti'];
	//$password=$_POST['txtj'];
	$confirmPW=$_POST['txtk'];
	$seqQUE=$_POST['select1'];
	$seqANS=$_POST['txtl'];
	

	

	if(isset($_POST["sub1"])) {
		
	$res=mysqli_query($mysqli,"INSERT INTO CUSTOMER(email,password,telNo,full_name,address_no,address_line1,address_line2,city,zipcode,state,country,security_qn,security_ans)  VALUES ('$email','$confirmPW','$contact','$name',$addressNO,'$address','$address2','$city',$zip,'$state','$country','$seqQUE','$seqANS')");
	}
		
		 if($res){
		   
		    echo "<script type='text/javascript'>alert('You Account has been created successfully! Please Sign In');window.location.href='sign_in.php'</script>";
			
		 	
		 }
		 else {
			 	echo "<script type='text/javascript'>alert('Some Error Occured - Check your mail address!');window.location.href='sign_up.php'</script>";
			 	
		 }
		 

	
	
	

    
    ?>
    
    
    
    
    
    




