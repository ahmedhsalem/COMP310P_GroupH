<?php
      require_once('session.php');
      require_once('administratorIndex.php');

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
					<li><a href="eventList.php" class="links">Event List</a>
                                        <li><a href="search_event_page.php" class="links">Search Event</a>
					<li><a href="request_event_page.php" class="links">Request an Event</a>
                                        <?php if($userid_session == null) { ?>
                                                
                                        <li><a href="administrator.php" class="links">Administrator</a>
                                           
                                            
                                        <?php } ?>
                                        
                                        
				</ul>
			</nav>
		</header>
		
	</div>
	<div id="columnRight">
	Welcome, <?php echo " $welcomeName"; ?> </br>
	<a href="myEvent.php">My Events</a></br>
	<a href="settings_page.php">Settings</a></br>
	<a href="logout.php"><button type="button">Logout</button></a>
	</div>
	<div id="content">
	<div class="innercontent">
            <div id='columnHeading'>
                <h2>Administrator</h2>
            </div>
            <p1>Unapproved Events: </p1><br>
            <?php
            if ($result1->num_rows > 0) {
    echo "<table><tr><th>Event Name</th><th>Event Description</th><th>Ticket Price</th><th>Event Dates</th><th>Approve</th></tr>";
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {?>
    <form method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
       <?php echo "<tr><td>" . $row1['event_name']. "</td><td>" . $row1['description']. "</td><td>" . $row1['ticket_price']. "</td><td>" . $row1['event_start_date_time']."&nbsp"."to"."&nbsp".$row1['event_end_date_time']. "</td><td><input type='submit' value='Approve' name='submit'></td></tr>"; ?>
	</form>	
   <?php 
   }
    echo "</table>";
} else {
    echo "0 results";
} 

?>
            </div>
	</div>
	</div>
<script type="text/javascript" src="settings_checker.js">
</script>
</body>
</html>