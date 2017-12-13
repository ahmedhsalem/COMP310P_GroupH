function checkForm(form){  
			var username = document.getElementById("username").value;
			var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			var usernameformat = /^[\w ]+$/;
			var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/ 
			var password = document.getElementById("password").value;
			var confirmpassword = document.getElementById("confirmpassword").value;
			var email = document.getElementById("email").value;
			var mobile = document.getElementById("mobile").value;
			var ok = true; 
				
			if (password!=confirmpassword)
			{  
				document.getElementById("passwordError").innerHTML = "Passwords do not match";
				document.getElementById("confirmpasswordError").innerHTML = "Passwords do not match";
				ok = false;  
			}
			
				if (!mailformat.test(email) && !!email ) {
				 document.getElementById("emailError").innerHTML = "Input a valid email";
					ok = false; 
				   }
			
			if (!phoneno.test(mobile) && !!mobile) {
    			document.getElementById("mobileError").innerHTML = "Please enter a Valid Phone Number";
				ok = false;
    }
		return ok;
	
	}
