<!DOCTYPE html>
<head>
  <title>Opening Page</title>
  	<link href="opening_page.css" rel="stylesheet" type="text/css"/>
    <?php require_once 'login.php';?>
</head>
<body>
<img src="logo.png" width="20%" height="70px" id="logo">
<?php echo $message;?>
<div id="wrapper">
	<div id="signinBox">
		<label for="username"><h3 align="center">Sign In</h3>
		<form name="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET" onSubmit="return checkForm(this)">
		<label for="username" class="label">Username:</label>
		<input type="text" id="username" name="username"/> 
		<br/>
		<p class=error id="usernameError"><?php echo $error;?></p>
		
		<label for="password" class="label">Password:</label>
		<input type="password" id="password" name="password"/> <br/><br/>
				
		<input type="submit" id="submit" value="Sign In" style= "font-size: 15px; background: #f5f5f5;
		width: 30%; margin-right: 20%" />
		</form>
	</div>
	
	<div id="registerBox">
		<a href="registration_page.php"/>
		<label for="register"><h3 align="center">Register</h3></label><br/>
		<input type="submit" value="Click Here To Register" id="register" style= "font-size: 15px; background: #f5f5f5;
		 width: 70%; margin-right: 13%"/>
	</div>
</div>
<script src = "email_submission.js"></script>
</body>
</html>