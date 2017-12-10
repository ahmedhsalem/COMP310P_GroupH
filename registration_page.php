<!DOCTYPE html>
<head>
  <title>Registration</title>
  <style>
  #registrationBox {
   		white-space: nowrap;
  		border: 1px solid black;
  		margin: auto;
  		border-radius: 40px;
  		padding: 50px;
  		padding-top: 10px;
  		width: 450px;
  }
  #logo {
  		display: block;
    	margin: auto;
    	margin-top: 2%;
  }

    input, textarea {
    	float: right;
    	width: 200px;
    	resize: none;
    	margin-right: 50px;
    }
    .label {
    float: left;
    }
    .error {
    float: center;
    color: red;
    }


  </style>
  <?php include "register.php";?>
</head>
<body>
<a href="opening_page.php">
<img src="logo.png" width="20%" height="70px" id="logo"></a>
	<div id="registrationBox">
		<h2 align="center">Register A New User</h2>
		
		<form name="form1" method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onSubmit="return checkForm(this)" >
		
			<!-- Adding Value to inputs from the PHP form because if not every time, the User has to write everything from the beginning --!>
			
			<label for="username" class="label">Username:</label>
			<input type="text" id="username" name="username" value ="<?php if(isset($_GET['username'])) echo htmlspecialchars($_GET['username']); ?>"/>
			<br/>
			<p class=error id="usernameError"><?php echo $message;?></p>
			<br/>
			
			<label for="firstname" class="label">First Name:</label>
			<input type="text" id="firstname" name="firstname" value ="<?php if(isset($_GET['firstname'])) echo htmlspecialchars($_GET['firstname']); ?>"/>
			<br/>
			<p class=error id="firstnameError"></p>
			<br/>
			
			<label for="lastname" class="label">Last Name:</label>
			<input type="text" id="lastname" name="lastname" value ="<?php if(isset($_GET['lastname'])) echo htmlspecialchars($_GET['lastname']); ?>"/>
			<br/>
			<p class=error id="lastnameError"></p>
			<br/>
		
			<label for="email" class="label">E-mail:</label>
			<input type="email" id="email" name="email" value ="<?php if(isset($_GET['email'])) echo htmlspecialchars($_GET['email']); ?>"/> <br/>
			<p class=error id="emailError"></p>
			<br/>
		
			<label for="password" class="label">Password:</label>
			<input type="password" id="password" name="password"/>
			<br/>
			<p class=error id="passwordError"></p>
			<br/>
		
			<label for="confirmPassword" class="label">Confirm Password:</label>
			<input type="password" id="confirmpassword" name="confirmpassword"/>
			<br/>
			<p class=error id="confirmpasswordError"></p>
			<br/>
		
			<label for="address" class="label">Address:</label>
			<textarea id = "address" name ="address" rows="3"><?php if(isset($_GET['address'])) echo htmlspecialchars($_GET['address']); ?></textarea><br/><br/><br/><br/>
		
			<label for="mobile" class="label">Mobile Number:</label>
			<input type="tel" id="mobile" name="mobile" value ="<?php if(isset($_GET['mobile'])) echo htmlspecialchars($_GET['mobile']); ?>" />
			<br/>
			<p class=error id="mobileError"></p>
			<br/>
		
			<input type="submit" id="submit" value="Register" style= "font-size: 15px; background: #f5f5f5;
			 width: 30%; margin-right: 20%"/>
		 
		 </form>
	</div>
<script src = "email_submission.js"></script>
</body>
</html>








