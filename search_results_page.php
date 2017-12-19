<?php include_once "session.php";
	include "search.php"; ?>
<!DOCTYPE html>
<head>
  <title>Search Results</title>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
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
					<li><a href="index.html" class="links">Events</a>
					<li><a href="DVD_Rental_Page.html" class="links">Locations</a>
					<li><a href="request_event_page.php" class="links">Request an Event</a>
					<li><a href="DVD_Returns.html" class="links">Contact Us</a>
				</ul>
			</nav>
		</header>
		<form action="search_results_page.php" method="GET">
		<input type="submit" value="Go" id="go"/>
		<input type="text" id="search" class="search" name="search"/>
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
		<h2>Search Results:</h2>
		</div>
	</div>
<script type="text/javascript" src="settings_checker.js">
</script>
</body>
</html>