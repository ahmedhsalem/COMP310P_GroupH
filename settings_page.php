<?php require_once "session.php";
	  include "settings.php" ;?>
<!DOCTYPE html>
<head>
  <title>Settings</title>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
  <style>
      .entry, #address {
    	float: right;
    	width: 500px;
    	resize: none;
    	padding: 1px;
    	margin-right: 200px;
    }
    
      .error {
    float: center;
    color: red;
    }
    
    #changed {
    color: green;
    float: center;
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
					<li><a href="home_page.php" class="links">Home</a>
					<li><a href="eventList.php" class="links">Event List</a>
                                        <li><a href="search_event_page.php" class="links">Search Event</a>
					<li><a href="request_event_page.php" class="links">Request an Event</a>
				</ul>
			</nav>
		</header>
		<form action="search_results_page.php">
		<input type="submit" value="Go" id="go"/>
		<input type="text" id="search" class="search"/>
		<label for="search" id="label">Search:</label>
		</form>
	</div>
	<div id="columnRight">
	Welcome, <?php echo " $login_session"; ?> </br>
	<a href="myEvent.php">My Events</a></br>
	<a href="settings_page.php">Settings</a></br>
	<a href="logout.php"><button type="button">Logout</button></a>
	</div>
	<div id="content">
	<div class="innercontent">
	<h1 style="margin-top: 0px">Settings</h1>
	<p> Please fill out the values that you would like to change. If you leave it blank, it will remain the same. Refresh Page to Confirm.</p>
	<p id="changed"><?php echo $changed; ?>
	<form onSubmit="return checkForm(this)" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method ="GET">		
			<label for="email" class="label"> Change E-mail:</label>
			<input type="email" id="email" name="email" class="entry" placeholder="<?php echo $email_session ?>"/> <br/>
			<p class=error id="emailError"></p>
			<br/>
		
			<label for="password" class="label">Change Password:</label>
			<input type="password" name="password" id="password" class="entry"/> <br/>
			<p class=error id="passwordError"></p>
			<br/>
		
			<label for="confirmPassword" class="label">Confirm Password:</label>
			<input type="password" name="password" id="confirmpassword" class = "entry"/>
			<br/>
			<p class=error id="confirmpasswordError"></p>
			<br/>
				
			<label for="address" class="label">Change Address:</label>
			<textarea id = "address" name="address" rows="3" class="entry" placeholder="<?php echo $address_session ?>"></textarea><br/><br/><br/><br/>
		
			<label for="mobile" class="label">Change Mobile Number:</label>
			<input type="tel" id="mobile" name="mobile" class="entry" placeholder="<?php echo $mobile_session ?>"/> <br/>
			<p class=error id="mobileError"></p>
			<br/><br/>
			<br/>
		
			<input type="submit" id="confirm" name="confirm" value="Confirm Changes" style= "font-size: 15px; background: #f5f5f5;
			 width: 20%; margin-right: 20%" class="entry" />
		</form>
	</div>
	</div>
<script type="text/javascript" src="settings_checker.js">
</script>
</body>
</html>