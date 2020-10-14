/*===============ContactUs================*/

function ValidateContact()
{
	var firstname = document.forms["ContactForm"]["firstname"];
	var lastname = document.forms["ContactForm"]["lastname"];
	var mail = document.forms["ContactForm"]["mail"];
	var topic = document.forms["ContactForm"]["topic"];
	var message = document.forms["ContactForm"]["message"];

	if (firstname.value == "")
	{
		alert("Please enter first name.");		
		return false;
	}
	if (lastname.value == "")
	{
		alert("Please enter last name.");		
		return false;
	}
	if (mail.value == "")
	{
		alert("Please enter email address.");		
		return false;
	}
	if (! /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(ContactForm.mail.value))
	{
		alert("Please enter valid email address.");		
	 	return false;
	}	
	if (topic.value == "")
	{
		alert("Please enter Topic.");		
		return false;
	}
	if (message.value == "")
	{
		alert("Please enter Message.");		
		return false;
	}
	return true;
}

/*===============Individual================*/

function ValidateIndividual()
{
	var email = document.forms["IndividualForm"]["email"];
	var password = document.forms["IndividualForm"]["password"];
	var firstname = document.forms["IndividualForm"]["firstname"];
	var lastname = document.forms["IndividualForm"]["lastname"];
	var address = document.forms["IndividualForm"]["address"];
	var city = document.forms["IndividualForm"]["city"];
	var state = document.forms["IndividualForm"]["state"];
	var postal = document.forms["IndividualForm"]["postalcode"];

	if (email.value == "")
	{
		alert("Please enter email address");
		return false;
	}
	if (! /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(IndividualForm.email.value))
	{
		alert("Please enter valid email address.");		
	 	return false;
	}
	if (password.value == "")
	{
		alert("Please enter password");
		return false;
	}
	if (! /^.*(?=.{8,}).*$/.test(IndividualForm.password.value))
	{
		alert("Password must be atleast 8 characters long");
		return false;
	}
	if (firstname.value == "")
	{
		alert("Please enter first name");
		return false;
	}
	if (lastname.value == "")
	{
		alert ("Please enter last name");
		return false;
	}
	if (address.value == "")
	{
		alert ("Please enter address");
		return false;
	}
	if (city.value == "")
	{
		alert ("Please enter city");
		return false;
	}
	if (state.options[state.selectedIndex].value == 0)
	{
		alert ("Please select state");
		return false;
	}
	if (postal.value == "")
	{
		alert ("Please enter postal code");
		return false;
	}
	return true;
}
/*===============Agent================*/
function ValidateAgent()
{
	var email = document.forms["AgentForm"]["email"];
	var password = document.forms["AgentForm"]["password"];
	var firstname = document.forms["AgentForm"]["firstname"];
	var lastname = document.forms["AgentForm"]["lastname"];
	var address = document.forms["AgentForm"]["address"];
	var city = document.forms["AgentForm"]["city"];
	var state = document.forms["AgentForm"]["state"];
	var postal = document.forms["AgentForm"]["postalcode"];

	if (email.value == "")
	{
		alert("Please enter email address");
		return false;
	}
	if (! /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(AgentForm.email.value))
	{
		alert("Please enter valid email address.");		
	 	return false;
	}
	if (password.value == "")
	{
		alert("Please enter password");
		return false;
	}
	if (! /^.*(?=.{8,}).*$/.test(AgentForm.password.value))
	{
		alert("Password must be atleast 8 characters long");
		return false;
	}
	if (firstname.value == "")
	{
		alert("Please enter first name");
		return false;
	}
	if (lastname.value == "")
	{
		alert ("Please enter last name");
		return false;
	}
	if (address.value == "")
	{
		alert ("Please enter address");
		return false;
	}
	if (city.value == "")
	{
		alert ("Please enter city");
		return false;
	}
	if (state.options[state.selectedIndex].value == 0)
	{
		alert ("Please select state");
		return false;
	}
	if (postal.value == "")
	{
		alert ("Please enter postal code");
		return false;
	}
	return true;
}
/*===============Business================*/
function ValidateBusiness()
{
	var email = document.forms["BusinessForm"]["email"];
	var password = document.forms["BusinessForm"]["password"];
	var firstname = document.forms["BusinessForm"]["firstname"];
	var lastname = document.forms["BusinessForm"]["lastname"];
	var address = document.forms["BusinessForm"]["address"];
	var city = document.forms["BusinessForm"]["city"];
	var state = document.forms["BusinessForm"]["state"];
	var postal = document.forms["BusinessForm"]["postalcode"];

	if (email.value == "")
	{
		alert("Please enter email address");
		return false;
	}
	if (! /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(BusinessForm.email.value))
	{
		alert("Please enter valid email address.");		
	 	return false;
	}
	if (password.value == "")
	{
		alert("Please enter password");
		return false;
	}
	if (! /^.*(?=.{8,}).*$/.test(BusinessForm.password.value))
	{
		alert("Password must be atleast 8 characters long");
		return false;
	}
	if (firstname.value == "")
	{
		alert("Please enter first name");
		return false;
	}
	if (lastname.value == "")
	{
		alert ("Please enter last name");
		return false;
	}
	if (address.value == "")
	{
		alert ("Please enter address");
		return false;
	}
	if (city.value == "")
	{
		alert ("Please enter city");
		return false;
	}
	if (state.options[state.selectedIndex].value == 0)
	{
		alert ("Please select state");
		return false;
	}
	if (postal.value == "")
	{
		alert ("Please enter postal code");
		return false;
	}
	return true;
}