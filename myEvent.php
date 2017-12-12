<?php
      require_once('session.php');
      require ('myEventIndex.php');
?>
<!DOCTYPE html>
<head>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
</head>
<style>
    #columnEventAttended {
    width:25%;
    height: 389px;
    border-style: solid;
    float: right;
    border-width: 0px 0px 0px 1px;
    float: top;

}

#columnEventHost {
    width: 50%;
    height: 194px;
    border-style: none;
    border-width: 0px 0px 1px 1px;
    float: top;
    
}

#columnEventAttending {
    width: 50%;
    height: 194px;
    border-style: none;
    border-width: 0px 0px 1px 1px;
    float: top;
}
#innercontent {
    padding: 0px;
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
					<li><a href="DVD_Returns.html" class="links">Request an Event</a>
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
	<a href="logout.php"><button type="button">Logout</button></a>
	</div>
	<div id="content">
	<div class="innercontent">
            <div id='columnHeading'>
                <h2>My Events</h2>
            </div>
            <div id="columnEventAttended">
                <p2>Events I've Attended:<br></p2>
                <?php  
                    echo $attendedList;
                ?>
            </div>
            <div id="columnEventHost">
                <p3>Events I'm Hosting:<br></p3>
                
                <?php  
                    if (mysqli_num_rows($result3) > 0) {
                    // output data of each row
                        while($row3 = mysqli_fetch_assoc($result3)) {
                            $id=$row3['event_id'];
                            echo "<a href='hostingEvent.php?id={$id}'>" . $row3['event_name'] . "</a></br>";
//                            $hostingList = "<a href='hostingEvent.php'>" . $row3['event_name'] . "</a></br>";
//                            echo $hostingList;
                        }
                    } else {
                        echo "0 results";
//                        $hostingList = "0 results";
                    }
                ?>
            </div>

            <div id="columnEventAttending">
                <p4>Events I'm Attending:<br></p4>
                <?php  
                    echo $attendingList;
                ?>
            </div>
	</div>
	</div>
<script type="text/javascript" src="settings_checker.js">
</script>
</body>
</html>
             





    

          
        
     

