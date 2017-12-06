//E-mail Submission 
function checkForm(form){  
		var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var usernameformat = /^[\w ]+$/;
		var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/ 
		var username = document.forms["form1"]["username"].value;
		var email = document.forms["form1"]["email"].value;
		var mobile = document.forms["form1"]["mobile"].value;
		var password = document.forms["form1"]["password"].value;
		var confirmpassword = document.forms["form1"]["confirmpassword"].value;
		var submit = true;
		
//Code Adapted from Stack Overflow Answer: https://stackoverflow.com/questions/32708271/individual-error-messages-for-empty-form-fields-using-javascript
//Checks Input
		if (username == null || username == "") {
        nameError = "Please enter your name";
        document.getElementById("usernameError").innerHTML = nameError;
        submit = false;
    } else if(!usernameformat.test(form.username.value))
		{  
			document.getElementById("usernameError").innerHTML = "No symbols please!";
			form.username.focus()  
			submit = false;  
		} 

    
    if (!mailformat.test(form.email.value)) {
			document.getElementById("emailError").innerHTML = "Input a valid email";
			form.email.focus();
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
    } else if(password!=confirmpassword)
		{  
			document.getElementById("passwordError").innerHTML = "Passwords do not match";
			document.getElementById("confirmpasswordError").innerHTML = "Passwords do not match";
			submit = false;  
		} 
	if (confirmpassword == null || confirmpassword == "") {
        confirmpasswordError = "Please re-enter your password";
        document.getElementById("confirmpasswordError").innerHTML = confirmpasswordError;
        submit = false;
    }

	return submit;
	
}
//Removes Warning when user starts typing something (Onkeyup function).
function removeWarning() {
    document.getElementById(this.id+"Error").innerHTML = "";
}
document.getElementById("username").onkeyup = removeWarning;
document.getElementById("email").onkeyup = removeWarning;
document.getElementById("password").onkeyup = removeWarning;
document.getElementById("confirmpassword").onkeyup = removeWarning;
document.getElementById("mobile").onkeyup = removeWarning;
