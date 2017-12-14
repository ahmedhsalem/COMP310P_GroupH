<?php
      require_once('session.php');
      require_once ('eventDetailIndex.php');
      ob_start();
      require_once ('eventList.php');
      ob_end_clean();
      
?>
<!DOCTYPE html>
<head>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
  <title>Buy Tickets</title>
</head>
<style>
   
.title {
	font-size: 1.2em;
	font-weight: bold;
}
</style>
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
            <div id='columnHeading'>
                <h2>Ticket</h2>
            </div>
            <div id="contentColumn">
                <p1>Event Name: </p1>
                <?php echo $eventName;?>
                <br/><p2>Ticket Price: </p2>
                <?php echo $ticketPrice;?>
                <br/><p3>Available Tickets: </p3>
                <?php echo $totalTicket-$soldTicket;?>
                <br/><p4>Number of Tickets you would like to purchase:</p4>
					<select id="purchase" name="purchase">\
								  <option selected="selected">Please Select</option>
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4">4</option>
								  <option value="5">5</option>
					</select>
                <br/><h4>Time Left to Buy Tickets: </h4>
                <?php require_once ('countDownTimer.php'); ?>
                
                <?php
               
                if(date('Y-m-d h:i:s')>$ticketEndTime || $totalTicket-$soldTicket==0){
                   echo "<br/><br/><br/>Sorry the ticket is unavailable.";
                } else {
                    
                    $SUBMIT = "SUBMIT";
                    echo "<br/><br/><a href='ticketConfirmation.php'>".$SUBMIT."</a></br>";
                    
                }
                
                ?>
               
            </div>
	</div>
	</div>
<script type="text/javascript" src="settings_checker.js">
</script>
</body>
</html>