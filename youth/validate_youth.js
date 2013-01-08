function validateForm()
{

	var str = document.forms["form_youth"]["birthDate"].value
	
	if (str.length == 10)
	{
		var patt = new RegExp(/^\d{4}(\-|\/|\.)\d{1,2}\1\d{1,2}$/)
		if (patt.test(str) == false)
		{
			alert("Invalid Date Format1");
			return false;
		}
		
		var currentTime = new Date()
		var currentMonth = currentTime.getMonth() + 1
		var currentDay = currentTime.getDate()
		var currentYear = currentTime.getFullYear()
		
		var year = parseInt(str.substring(0, 4));
		var month = str.substring(5, 7);
		var day = str.substring(8, 10);
		if( month > 12 )
		{
			alert("Invalid Month");
			return false;
		}
		else if( day > 31 )
		{
			alert("Invalid Day");
			return false;
		}
		else if ( year > currentYear || ((year==currentYear)&&(month>currentMonth)) || ((year==currentYear)&&(month==currentMonth)&&(day>currentDay)))
		{
			alert("Invalid Date: Date is in the future");
			return false;
		}
		
			
		
	}
	else if (str.length != 0)
	{
		alert("Invalid Date Format");
		return false;
	}
	else if (str.length == 0)
	{
		alert("Null String");
		return false;
	}
	
	alert("1 Record Added/Changed!");
	return true;
	
}
