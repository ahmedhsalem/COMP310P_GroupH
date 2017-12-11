<!DOCTYPE html>
<head>
  <title>Settings</title>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
  <?php require_once "session.php";
  		include "settings.php" ;?>

  <style>
      .entry, textarea {
    	float: right;
    	width: 500px;
    	resize: none;
    	padding: 1px;
    	margin-right: 200px;
    }
  </style>
  </head>
  <body>
		<div id="wrapper">
	<div id="banner">
	<a href="home_page.php">
	<img src="logo.png"
	width="20%" height="70px"
	align="left"></a> 
	</div>
	<div id="menuTop">
		<header id="page_header">
			<nav>
				<ul>
					<li><a href="index.html" class="links">Events</a>
					<li><a href="DVD_Rental_Page.html" class="links">Locations</a>
					<li><a href="DVD_Returns.html" class="links">Request an Event</a>
					<li><a href="DVD_Returns.html" class="links">Contact Us</a>
				</ul>
			</nav>
		</header>
		<input type="submit" value="Go" id="go"/>
		<input type="text" id="search" class="search"/>
		<label for="search" id="label">Search:</label>
	</div>
	<div id="columnRight">
	Welcome, <?php echo " $login_session"; ?> </br>
	<a href="logout.php"><button type="button">Logout</button></a>
	</div>
	<div id="content">
	<div class="innercontent">
	<h1 style="margin-top: 0px">Settings</h1>
	
	<form onSubmit="return checkForm(this)">
		<label for="username" class="label"> Change Username:</label>
		<input type="text" id="username" class="entry"/></br>
		<p class=error id="usernameError"><?php echo $error;?></p>
		<br/>
		
		<label for="email" class="label"> Change E-mail:</label>
		<input type="email" id="email" class="entry"/> <br/>
		<p class=error id="firstnameError"></p>
		<br/>
		
		<label for="password" class="label">Change Password:</label>
		<input type="password" id="password" class="entry"/> <br/>
		<p class=error id="passwordError"></p>
		<br/>
		
		<label for="confirmPassword" class="label">Confirm Password:</label>
		<input type="password" id="confirmpassword" class = "entry"/>
		<br/>
		<p class=error id="confirmpasswordError"></p>
		<br/>
				
		<label for="address" class="label">Change Address:</label>
		<textarea id = "address" rows="3" class="entry"></textarea><br/><br/><br/><br/>
		
		<label for="mobile" class="label">Change Mobile Number:</label>
		<input type="tel" id="mobile" class="entry"/> <br/><br/><br/>
		<br/>
		
		<input type="submit" id="submit" value="Confirm Changes" style= "font-size: 15px; background: #f5f5f5;
		 width: 20%; margin-right: 20%" class="entry" />
	</form>
	
	</div>
	</div>
<script type="text/javascript" src = "checker.js"></script>
</body>
</html>