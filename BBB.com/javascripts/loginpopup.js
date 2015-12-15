//function idea obtained from http://www.quackit.com/javascript/popup_windows.cfm
var popupWindow = null;

function centeredPopup(url,winName,w,h,scroll) //url=address, winname=window_name, w,h=width, height, scroll=yes/no(says if scroll is on)
{
	LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;		//javascript conditional operator [condition ? value1 : value2], if condition is true, variable is assigned with value1. else, value2 is assigned.
	TopPosition = (screen.height) ? (screen.height-h)/2 : 0;	//https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Expressions_and_Operators
	
	settings ='height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'; //resizable option is IE only.
	
	popupWindow = window.open(url,winName,settings);	//http://www.w3schools.com/jsref/met_win_open.asp
}

//<p><a href="http://www.quackit.com/common/link_builder.cfm" onclick="centeredPopup(this.href,'myWindow','500','300','yes');return false">Centered Popup</a></p>