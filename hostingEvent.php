<?php
      require_once('session.php');
      ob_start();
      require_once ('myEvent.php');
      ob_end_clean();
      require_once ('hostingEventIndex.php');
?>
<!DOCTYPE html>
<head>
  <title>Events I'm Hosting</title>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
  </head>
  <style>
    #leftContentColumn {
        width:55%;
        height: 389px;
        border-style: solid;
        float: left;
        border-width: 1px 1px 1px 1px;
        float: left;
    }
    
    #rightContentColumn {
        width:44%;
        height: 389px;
        border-style: solid;
        float: right;
        border-width: 1px 1px 1px 0px;
        float: left;
    }
    .title {
	font-size: 1.2em;
	font-weight: bold;
	text-decoration: underline;
}
	p2 {
	text-decoration: underline;
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
	 <div id='columnHeading'>
                <h2><?php echo $eventname; ?></h2>
            </div>
            
          	<div id="leftContentColumn">
                <p1 class="title">List of Participants:</p1><br/><br/>
                <?php 
                 
                    if ($result4->num_rows > 0) {
                        while($row4 = $result4->fetch_assoc()) {
                            echo $row4['first_name']."&nbsp".$row4['last_name']."<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                
                ?>
                
                
              
            </div>
            <div id='rightContentColumn'>
                <p2>Total Tickets:</p2>
                <?php echo $totalTicket; ?>
                <br><br><br><br><br><br><p2>Tickets Sold:</p2>
                <?php echo $soldTicket; ?>
                <br><br><br><br><br><br><p2>Tickets Available:</p2>
                <?php echo $totalTicket-$soldTicket; ?>
                
                <br><br><br><br><br><br>
                <?php echo "<a href='trigger.php?id={$rowid}'>"."Trigger"."</a></br>";
                ?>
            </div>

            
	</div>
	</div>
<script type="text/javascript" src="settings_checker.js">
</script>
</body>
</html>