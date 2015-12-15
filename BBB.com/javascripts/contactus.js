function formValidate()
{
	var name =document.forms["cform"]["name"].value;
	var email=document.forms["cform"]["email"].value;
	var message = document.forms["cform"]["message"].value;
	//alert(message);
	//document.write(email);
	
	    if(isAlphebatic(name,"Name"))
	 		if (emailValidation(email))
	 			if(isAlphaNumeric(message,"Message"))	
	 				return true;
				else
					 false;
			else
				return false;
		else
				return false;		
}
	
	
	function isEmpty(elemValue,field)
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
					alert("Enter only Alphabetic letters for your " + field);
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
						alert("Enter only letters and numbers for the " + field);
						return false;
					}
				}
				else
				{
					return false;
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
	
	
	
	

