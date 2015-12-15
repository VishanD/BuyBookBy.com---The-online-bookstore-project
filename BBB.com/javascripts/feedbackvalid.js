
function formValidate()
{
	var name =document.forms["frmcontact"]["inputname"].value;
	
	

	var message = document.forms["frmcontact"]["tmessage"].value;
	
	//document.write(email);
	
	    if(isAlphebatic(name,"Name"))
	 		if(isAlphaNumeric(message,"Message"))	
	 				return true;
			else
				return	false;
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

			var exp = /^ [0-9a-zA-Z ]+$/;

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