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
                $row1 = mysqli_fetch_assoc($result1);
                $id=$row1['event_id'];
                $BUYTICKET = "BUY TICKET";
                echo "<a href='ticket.php?id={$id}'>".$BUYTICKET."</a></br>";
                ?>        
                
               
        </form> 
                <br><br><br><br><br>
                <p6>Rating & Comment</p6><br>
                
                <table>
                    <tr>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                                       
                    <?php //   while($row4 = mysqli_fetch_assoc($result3)) { ?>
                            <tr>
                                <td><?php echo $firstName."&nbsp".$lastName;?></td>
                                <td><?php echo $rating."/5";?></td>
                                <td><?php echo $reviewTitle;?></td>
                                <td><?php echo $reviewDescription;?></td>
                            </tr>
                    <?php// }?>                  
                </table>
                
            </div>
            
	</div>
	</div>
<script type="text/javascript" src="settings_checker.js">
</script>
</body>
</html>