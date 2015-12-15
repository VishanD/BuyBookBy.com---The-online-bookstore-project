/**
 * @buybookby.com
 */

	function formValidate()
			{
				
			
				var Name1 = document.getElementById("txta").value;
				var Email = document.getElementById("txti").value;
				var contactNO = document.getElementById("txth").value;
				var PW = document.getElementById("txtold").value;
				var newPW = document.getElementById("txtnew").value;
				var confirmPW = document.getElementById("txtconfirm").value;
				var QUE = document.getElementById("securityques").value;
				var ANS = document.getElementById("txtl").value;
				
				var AddNo = document.getElementById("txtaddress").value;
				var Add = document.getElementById("txtc").value;
				
				var Add2 = document.getElementById("txtd").value;
				var City = document.getElementById("txte").value;
				
				var ZiP = document.getElementById("txtf").value;
				
				//var sques = document.getElementById("securityques").value;
				var State = document.getElementById("txtg").value;
				var Country = document.getElementById("cust_address_country").value;
				
				
		if(isAlphebatic1(Name1,"Full Name"))	
			if (emailValidation1(Email))		
				if(isNumeric1(contactNO,"Contact Number"))
					if(passwordValidtion1(PW))
						if(passwordValidtion1(newPW))
							if(repasswordValidation1(confirmPW,newPW))
								if(selectedFields1(QUE,"Security Question"))
										if(isAlphaNumeric1(ANS,"Secutity Answer"))
											if(isNumeric1(AddNo,"Address Number"))
												if(isAlphaNumeric1(Add,"Address Line 1"))
												if(isAlphaNumeric1(Add2,"Address Line 2 "))
													if(isAlphebatic1(City,"City"))
														if(isNumeric1(ZiP,"ZIP"))
															if(isAlphebatic1(State,"State"))
																if(selectedFields1(Country,"Country"))
																	return true;
															else
																return false;
														else
															return false;
													else
														return false;
												else
													return false;
											else
												return false;
										else	
											return false;
									else	
										return false;
								else
									return false;
							else
								return false;
						else
							return false;
					else
						return false;
				else
					return false;
			else
				return false;
		else
			return false;
	else
			return false;				
								
							
						
					
															
																													

			}
			
		
			
	function isEmpty1(elemValue,field)
	 {

		if(elemValue =="" || elemValue == null) 
		{

			alert("You cannot have " + field + " field empty");

				return true;

		} 
		else
		{
			return false;
		}

	}
	
	
	
	function isAlphebatic1(elemValue,field)

	{

		var exp = /^[a-zA-Z ]+$/;

			if (!isEmpty1(elemValue, field))
			{

				if (elemValue.match(exp)) 
				{
					return true;
				}
				else 
				{
					alert("Enter only Alphabetic letters for your " + field);
					return false;

				}

			}
			else
			{
				return false;
			}
	}
	
	
	
	function isAlphaNumeric1(elemValue,field)
	{

			var exp = /^[0-9a-zA-Z ]+$/;

				if (!isEmpty1(elemValue, field))
				{
					if (elemValue.match(exp))
					{
						return true;
					}
					else 
					{
						alert("Enter only letters and numbers for the " + field);
						return false;
					}
				}
				else
				{
					return false;
				}

	}
	
	
	
	function isNumeric1(elemValue,field)
	{
		if (!isEmpty1(elemValue, field))
		{
			var exp = /^[0-9]+$/;
				if (elemValue.match(exp))
				{
					return true;
				}
				else 
				{
					alert("Enter a valid " + field+" without spaces");
					return false;
				}
		}
		else
		{
			return false;
		}
	}
	
	
	function selectedFields1(elemValue,field) 
	{
		if (elemValue == "select") 
		{
			alert("Choose a " + field);
			return false;
		}
		else
		{
			return true;
		}
	}
	
	
	
	function emailValidation1(elemValue)
	{
		if (!isEmpty1(elemValue, "Email"))
		{
			var atpos1 = elemValue.indexOf("@");
			var dotpos1 = elemValue.indexOf(".");
				if (atpos1 < 1 || dotpos1 + 2 >= elemValue.length || atpos1 + 2 > dotpos1)
				{
					alert("Enter a valid Email address");
					return false;
				}
				else
				{
					return true;
				}
		}
		else
		{
			return false;
		}	

	}
	
	function passwordValidtion1(elemValue)
	{
		if(!isEmpty1(elemValue,"Password"))
		{
			var exp = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^\da-zA-Z])(.{8,15})$/;
			if(elemValue.match(exp))
			{
				return true;
				
			}
			else
			{
				alert("Enter a Valid Password contains lowercase, uppercase, digits and special characters (Must Be Between 8 to 15 Characters)");
				return false;
			}
			
		}
		
		else
		{
			return false;
		}
	}

	




function repasswordValidation1(elemValue,celemValue)
{
	if(!isEmpty1(elemValue,"Confirm Password"))
	{
		if(elemValue == celemValue )
		{
			return true;
		}
		else
		{
			alert("Confirm Password must be same as Password");
		}
		
	}
	else
	{
		return false;
	}
}
	
	
function isAlphaNumericonly1(elemValue,field)

	{

		var exp = /^[a-zA-Z0-9 ]+$/;

			if (!(elemValue == null) && !(elemValue==""))
			{

				if (elemValue.match(exp)) 
				{
					return true;
				}
				else 
				{
					alert("Enter only Alphabetic letters and Numbers for your " + field);
					return false;

				}

			}
			else
			{
				return true;
			}
	}
	
	

	
				
