//E-mail Submission 
function checkForm(form){  
		var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var usernameformat = /^[\w ]+$/;
		var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/ 
		var username = document.forms["form1"]["username"].value;
		var firstname = document.forms["form1"]["firstname"].value;
		var lastname = document.forms["form1"]["lastname"].value;
		var email = document.forms["form1"]["email"].value;
		var address = document.getElementById("address").value;
		var mobile = document.forms["form1"]["mobile"].value;
		var password = document.forms["form1"]["password"].value;
		var confirmpassword = document.forms["form1"]["confirmpassword"].value;
		var submit = true;
		
//Code Adapted from Stack Overflow Answer: https://stackoverflow.com/questions/32708271/individual-error-messages-for-empty-form-fields-using-javascript
//Checks Input
		if (username == null || username == "") {
        nameError = "Please enter a username";
        document.getElementById("usernameError").innerHTML = nameError;
        submit = false;
    } else if(!usernameformat.test(form.username.value))
		{  
			document.getElementById("usernameError").innerHTML = "No symbols please!";
			submit = false;  
		} 
		if (firstname == null || firstname == "") {
        firstnameError = "Please enter your first name";
        document.getElementById("firstnameError").innerHTML = firstnameError;
        submit = false;
    } else if(!usernameformat.test(form.firstname.value))
		{  
			document.getElementById("firstnameError").innerHTML = "No symbols please!";  
			submit = false;  
		} 
		
		if (lastname == null || lastname == "") {
        lastnameError = "Please enter your last name";
        document.getElementById("lastnameError").innerHTML = lastnameError;
        submit = false;
    } else if(!usernameformat.test(form.lastname.value))
		{  
			document.getElementById("lastnameError").innerHTML = "No symbols please!";
			submit = false;  
		} 

    
    if (!mailformat.test(form.email.value)) {
			document.getElementById("emailError").innerHTML = "Input a valid email";
			submit = false;  
		} 

    if (mobile == null || mobile == "") {
        telephoneError = "Please enter your telephone";
        document.getElementById("mobileError").innerHTML = telephoneError;
        submit = false;
    } 
    
    if (password == null || password == "") {
        passwordError = "Please enter a Password";
        document.getElementById("passwordError").innerHTML = passwordError;
        submit = false;
    } else if (confirmpassword == null || confirmpassword == "") {
        confirmpasswordError = "Please re-enter your password";
        document.getElementById("confirmpasswordError").innerHTML = confirmpasswordError;
        submit = false;
    }
    else if(password!=confirmpassword)
		{  
			document.getElementById("passwordError").innerHTML = "Passwords do not match";
			document.getElementById("confirmpasswordError").innerHTML = "Passwords do not match";
			submit = false;  
		}

	
	


	return submit;
	
}
//Removes Warning when user starts typing something (Onkeyup function).
function removeWarning() {
    document.getElementById(this.id+"Error").innerHTML = "";
}
document.getElementById("username").onkeyup = removeWarning;
document.getElementById("firstname").onkeyup = removeWarning;
document.getElementById("lastname").onkeyup = removeWarning;
document.getElementById("email").onkeyup = removeWarning;
document.getElementById("password").onkeyup = removeWarning;
document.getElementById("confirmpassword").onkeyup = removeWarning;
document.getElementById("mobile").onkeyup = removeWarning;

