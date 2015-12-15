<?php
  
		require 'config.php';
		session_start();
		
		$UpfullName=$_POST['txta'];  
  		$UpeMail=$_POST['txti'];	
		$Upcontact=$_POST['txth'];
		
		//echo $UpfullName;
		//echo $UpeMail;
  		///$Upnewpw=$_POST['txtnew'];
		$Upconfirmwpw=$_POST['txtconfirm'];
		$Upseq=$_POST['select1'];
		$Upseqans=$_POST['txtl'];
		
		$UpaddressNO=$_POST['txtaddress'];	
		
		$Upaddress1=$_POST['txtc'];	
		
		$Upaddress2=$_POST['txtd'];
		
  		$Upcity=$_POST['txte'];
		$Upzip=$_POST['txtf'];
		$Upstate=$_POST['txtg'];
		
		$Upcountry=$_POST['cust_address_country'];
		
			$cusemail = $_SESSION["email"];
		
			$cusIDquery = mysqli_query($mysqli,"SELECT cID FROM CUSTOMER WHERE email = '$cusemail'");
			$cusIDfetch = mysqli_fetch_array($cusIDquery);
			$cusID = $cusIDfetch[0];
		
		
		//$sql2="UPDATE customer SET name='$UpfullName' email='$UpeMail' Contact_number='$Upcontact' password='$Upconfirmwpw' ques='$Upseq' ans='$Upseqans' Address_line_1='$Upaddress' Address_line_2='$Upaddress2' city='$Upcity' Zip='$Upzip' state='$Upstate' country='$Upcountry' where cID=1";
		 //Contact_number='$Upcontact' password='$Upconfirmwpw' ques='$Upseq' ans='$Upseqans' Address_line_1='$Upaddress' Address_line_2='$Upaddress2' city='$Upcity' Zip='$Upzip' state='$Upstate' country='$Upcountry'
		$res2=mysqli_query($mysqli,"UPDATE CUSTOMER SET email='$UpeMail',password='$Upconfirmwpw',telNo='$Upcontact',full_name='$UpfullName',address_no='$UpaddressNO',address_line1='$Upaddress1',address_line2='$Upaddress2',city='$Upcity',zipcode='$Upzip',state='$Upstate',country='$Upcountry',security_qn='$Upseq',security_ans='$Upseqans' where cID=$cusID");
		//$res3=mysqli_query($mysqli,"UPDATE customer SET email='$UpeMail' where cID=1");
		
		if($res2){
		   
		//    echo "<script type='text/javascript'>alert('selected details updated sussecfully!')</script>";
		    echo "<script type='text/javascript'>alert('You Account details has been successfully updated! ');window.location.href='myaccount.php'</script>";
			// echo header('location:index.html');
		 	
		 }
		 else {
			 	echo "<script type='text/javascript'>alert('Some Error Occured !');window.location.href='myaccount.php'</script>";
			 	//echo header('location:sign_up.html');//?full_name=$UpfullName&address_line1=$Upaddress1
		 }
		 
		//if($res2)
		//	echo 'selected details updated sussecfully';
		//else {
			//header(Location:accountsetting.php?)
		//}
		
		
		
?>
