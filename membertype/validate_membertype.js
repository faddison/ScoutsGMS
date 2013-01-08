function validateForm()
{
    
    var minAge = document.forms["form_membertype"]["minAge"].value
    var maxAge = document.forms["form_membertype"]["maxAge"].value
     
    // minimum age 
    if(minAge < 0)
    {
        alert("Invalid minimum age");
        return false;
	}
	
	// maximum age
	if(maxAge < 0 || maxAge <= minAge)
	{
	   alert("Invalid maximum age");
	   return false;
    }


    