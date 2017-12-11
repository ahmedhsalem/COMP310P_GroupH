//E-mail Submission 
function checkForm(form){  
		var username = document.getElementById("username").value;

		
//Checks Input
		if (username == null || username == "") {
        document.getElementById("usernameError").innerHTML = "hello";
        submit = false;
    } 

	return submit;
	
}


