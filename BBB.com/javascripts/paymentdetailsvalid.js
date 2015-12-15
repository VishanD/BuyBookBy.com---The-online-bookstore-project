
function formValidatep()
{
	var cardno = document.forms['paymentdetails']['cardno'].value;
	var edate = document.forms['paymentdetails']['date'].value;
	var pemail = document.forms['paymentdetails']['mail'].value;
	
			if(emailValidation(pemail))
				if(cardnumber(cardno))
					if(isDate(edate,"Date"))
						return true;
					else
						return false;
				else
					return false;
			else
				return false;
					
					
	
	
}

function cardnumber(inputtxt)  
{  
	
  	var cardno1 = /^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/; 
  		if(inputtxt.match(cardno1))  
        {  
      		return true;  
        }  
      	else  
        {  
        	alert("Not a valid  credit card number!");  
        	return false;  
        }  
} 





	
	function isDate(elemValue,field)
	{
		
		
			var exp = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;
				if (elemValue.match(exp))
				{
					return true;
				}
				else 
				{
					alert("Enter a valid " + field+" like dd/mm/yyyy");
					return false;
				}
		
	}
	
	function emailValidation(elemValue)
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
	