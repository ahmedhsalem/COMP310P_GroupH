<?php
      require_once('session.php');
      require ('search_event.php');

?>
<!DOCTYPE html>
	
<head>
  <event_name>Search for Events</event_name>
  <link href="layout.css" rel="stylesheet" type="text/css"/>


  <style>
      .entry, textarea, select {
    	float: right;
    	width: 500px;
    	resize: none;
    	padding: 1px;
    	margin-right: 200px;
    }
    .label {
    float: left;
  
}
.checkbox-grid li {
    display: block;
    float: left;
    width: 25%;
}
#content {
height: 700px;
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
					<li><a href="search_event_page.html" class="links">Events</a>
					<li><a href="DVD_Rental_Page.html" class="links">Locations</a>
					<li><a href="request_event_page.php" class="links">Request an Event</a>
					<li><a href="DVD_Returns.html" class="links">Contact Us</a>
				</ul>
			</nav>
		</header>
		<input type="submit" value="Go" id="go"/>
		<input type="text" id="search1" class="search"/>
		<label for="search1" id="label">Search:</label>
	</div>
	<div id="columnRight">
	Welcome, <?php echo " $login_session"; ?> </br>
	<a href="myEvent.php">My Events</a></br>
	<a href="settings_page.php">Settings</a></br>
	<a href="logout.php"><button type="button">Logout</button></a>
	</div>
	<div id="content">
	<div class="innercontent">
	
	
	
	
	 
	 <div>      
			<form name="frmSearch" method="post" action="search_event_page.php">
			<input type="hidden" id="advance_search_submit" name="advance_search_submit" value="<?php echo $advance_search_submit; ?>">
			<div class="search-box">
				

				<h2>Search for Events:</h2>
				<div>
					
					
					<label class="search-label">Use Keywords and filters to find the event you're looking for:</label>
					<br />
					<br />
					<div style="float:left">
						<!--Filter search box -->
						<select name="search[search_in]" id="search_in" class="demoInputBox">
							<option value="">Filters</option>
							<option value="event_name" <?php if($search_in=="event_name") { echo "selected"; } ?>>Name of Event</option>
							<option value="description" <?php if($search_in=="description") { echo "selected"; } ?>>Description</option>
							<option value="category_id" <?php if($search_in=="category_id") { echo "selected"; } ?>>Category</option>
						</select>
					</div>	
					<br />
					<br />
					<input type="text" name="search[with_any_one_of]" id="with_any_one_of" class="demoInputBox" value="<?php echo $with_any_one_of; ?>"	/>
	
				</div>
				
				<br />	
				
				<div>
					<input type="submit" name="go" class="btnSearch" value="Search">
				</div>
			</div>
			</form>	
			<?php while($row = mysqli_fetch_assoc($result)) { ?>
		 	<!--Shows results -->
			<div>
				<div><strong><?php echo $row["event_name"]; ?></strong></div>
				<div class="result-description"><?php echo $row["description"]; ?></div>
				<div class="result-description">Category: <?php echo $row["category_name"]; ?></div>
				<br /> 
			</div>
			<?php } ?>
		</div>
		
		
		
			
<script type="text/javascript" src = "checker.js"></script>
</body>
</html>


