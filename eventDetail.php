<?php
      require_once('session.php');
      ob_start();
      require_once ('eventList.php');
      ob_end_clean();
      require_once('eventDetailIndex.php');
      require ('eventListIndex.php');

?>
<!DOCTYPE html>
<head>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
</head>
<style>
    
.title {
	font-size: 1.2em;
	font-weight: bold;
}
table, th, td {
    border: 1px solid black;
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
                <h2><?php echo $eventName;?></h2>
            </div>
            <div id="contentColumn">
                <p1>Total Tickets: </p1>
                <?php echo $totalTicket; ?>
                <br><p2>Ticket Price: </p2>
                <?php echo "£$ticketPrice";?>
                <br><p3>Date and Time: </p3>
                <?php echo "$startDate&nbspto&nbsp$endDate" ?>
                <br><p4>Event Description: </p4>
                <?php echo "$eventDescription" ?>
                <br><p5>Tickets Available: </p5>
                <?php echo $totalTicket-$soldTicket?>
                <br><br><br>
                <?php
                
                $BUYTICKET = "BUY TICKET";
                echo "<a href='ticket.php?id={$rowid}'>".$BUYTICKET."</a></br>";
                ?>        
                
               
        </form> 
                <br><br><br><br><br>
                <p6>Rating & Comment</p6><br>
                
                <?php
            if ($result4->num_rows > 0) {
                
    echo "<table><tr><th>User</th><th>Rating</th><th>Title</th><th>Description</th></tr>";
    // output data of each row
    while($row4 = $result4->fetch_assoc()  ) {
        
        echo "<tr><td>" . $row4['first_name']. "</td><td>" . $rating= $row4['rating']. "</td><td>" . $row4['title_of_description']. "</td><td>" . $row4['description']. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
} ?>
                
                
                
            </div>
            
	</div>
	</div>
<script type="text/javascript" src="settings_checker.js">
</script>
</body>
</html>