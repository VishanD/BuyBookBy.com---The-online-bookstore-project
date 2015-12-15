/**
 * @buybookby.com
 */

	function formValidate()
			{
				var fullname = document.getElementById("txta").value;
				var addressno = document.getElementById("txtb").value;
				var addrslin1 = document.getElementById("txtc").value;
				var addrslin2 = document.getElementById("txtd").value;
				var city = document.getElementById("txte").value;
				var zip = document.getElementById("txtf").value;
				var state = document.getElementById("txtg").value;
				var country = document.getElementById("cust_address_country").value;
				var contact = document.getElementById("txth").value;
				var email = document.getElementById("txti").value;
				var password = document.getElementById("txtj").value;
				var repassword = document.getElementById("txtk").value;
				var sques = document.getElementById("securityques").value;
				var sans = document.getElementById("txtl").value;
				
				
		if(isAlphebatic(fullname,"Full Name"))		
			if(isAlphaNumeric(addressno,"Address No"))	
				if(isAlphaNumericonly(addrslin1,"Address Line 1"))
					if(isAlphaNumericonly(addrslin2,"Address Line 2 "))
						if(isAlphebatic(city,"City"))
							if(isNumeric(zip,"ZIP"))
								if(isAlphebatic(state,"State"))
									if(selectedFields(country,"Country"))
										if(isNumeric(contact,"Contact Number"))
											if (emailValidation(email))		
												if(passwordValidtion(password))
													if(repasswordValidation(repassword,password))
														if(selectedFields(sques,"Security Question"))
															if(isAlphaNumeric(sans,"Secutity Answer"))
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
						
								
							
						
					
															
																													
//			alert(sans);
			}
			
			
	function isEmpty(elemValue,field)
	 {

		if(elemValue =="" || elemValue == null) 
		{

			alert(field + " field cannot be left empty.");

				return true;

		} 
		else
		{
			return false;
		}

	}
	
	
	
	function isAlphebatic(elemValue,field)

	{

		var exp = /^[a-zA-Z ]+$/;

			if (!isEmpty(elemValue, field))
			{

				if (elemValue.match(exp)) 
				{
					return true;
				}
				else 
				{
					alert("Please enter only letters of English Alphabet for the " + field + ".");
					return false;

				}

			}
			else
			{
				return false;
			}
	}
	
	
	
	function isAlphaNumeric(elemValue,field)
	{

			var exp = /^[0-9a-zA-Z ]+$/;

				if (!isEmpty(elemValue, field))
				{
					if (elemValue.match(exp))
					{
						return true;
					}
					else 
					{
						alert("Please enter only alphanumeric characters for the " + field + ".");
						return false;
					}
				}
				else
				{
					return false;
				}

	}
	
	
	
	function isNumeric(elemValue,field)
	{
		if (!isEmpty(elemValue, field))
		{
			var exp = /^[0-9]+$/;
				if (elemValue.match(exp))
				{
					return true;
				}
				else 
				{
					alert("Please enter a valid " + field + " containing only numeric characters, without spaces.");
					return false;
				}
		}
		else
		{
			return false;
		}
	}
	
	
	function selectedFields(elemValue,field) 
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
	
	
	
	function emailValidation(elemValue)
	{
		if (!isEmpty(elemValue, "Email"))
		{
			var atpos = elemValue.indexOf("@");
			var dotpos = elemValue.indexOf(".");
				if (atpos < 1 || dotpos + 2 >= elemValue.length || atpos + 2 > dotpos)
				{
					alert("Please enter a valid email address.");
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
	
	function passwordValidtion(elemValue)
{
	if(!isEmpty(elemValue,"Password"))
	{
		var exp = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^\da-zA-Z])(.{8,15})$/;
		if(elemValue.match(exp))
		{
			return true;
			
		}
		else
		{
			alert("Please enter a password that contains lowercase and uppercase letters, digits and special characters. (Password length must be between 8 to 15 characters).");
			return false;
		}
		
	}
	else
	{
		return false;
	}
}


function repasswordValidation(elemValue,celemValue)
{
	if(!isEmpty(elemValue,"Confirm Password"))
	{
		if(elemValue == celemValue )
		{
			return true;
		}
		else
		{
			alert("Confirm Password and Password fields do not match. Please check the password.");
		}
		
	}
	else
	{
		return false;
	}
}
	
	
function isAlphaNumericonly(elemValue,field)

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
					alert("Please enter only alphanumeric characters for the " + field + ".");
					return false;

				}

			}
			else
			{
				return true;
			}
	}
	
	

	



				
