<?php
      require_once('session.php');
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
                <h2>Event List</h2>
            </div>
            <div id="contentColumn">
                <?php  
                    if (mysqli_num_rows($result1) > 0) {
                    // output data of each row
                        while($row1 = mysqli_fetch_assoc($result1)) {
                            $id=$row1['event_id'];
                            echo "<a href='eventDetail.php?id={$id}'>" . $row1['event_name'] . "</a></br>";
//                            $hostingList = "<a href='hostingEvent.php'>" . $row3['event_name'] . "</a></br>";
//                            echo $hostingList;
                        }
                    } else {
                        echo "0 results";
//                        $hostingList = "0 results";
                    }
                ?>
            </div>
            
	</div>
	</div>
<script type="text/javascript" src="settings_checker.js">
</script>
</body>
</html>