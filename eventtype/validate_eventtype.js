function validateForm()
{
    
    var eventName = document.forms["form_eventtype"]["eventName"].value
    
    if(eventName == NULL)
    {
    alert("Invalid name");
    return false;
    }	
    
    alert("1 Record Added!");
	return true;
}

    