<?php
      require_once('session.php');
      ob_start();
      require_once ('eventList.php');
      ob_end_clean();
      require_once('eventDetailIndex.php');
      require ('eventListIndex.php');
      require_once ('feedback.php');
?>
<!DOCTYPE html>
<head>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
  <link href="eventdetail.css" rel="stylesheet" type="text/css"/>
  <script>
  $(function() {
    $('form').submit(function() {
        $.ajax({
            type: 'POST',
            url: 'feedback.php',
            data: data,
        });
        return false;
    }); 
})
  </script>
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
                <h2><?php echo $eventName;?></h2>
            </div>
            <div id="contentColumn">
            	<?php echo "<img src='images/".$image."'width='600px' height='400px'>"; ?><br/>
                <p6>Event Category: </p6>
                <?php echo $eventCategory; ?>
                <br><p7>Location: </p7>
                <?php echo $eventLocation; ?>
                <br><p1>Total Tickets: </p1>
                <?php echo $totalTicket; ?>
                <br/><p2>Ticket Price: </p2>
                <?php
				echo "&pound; "; //preferred for HTML
				echo $ticketPrice;?>
                <br><p3>Date and Time: </p3>
                <?php echo "$startDate&nbspto&nbsp$endDate" ?>
                <br><p4>Event Description: </p4>
                <?php echo "$eventDescription" ?>
                <br/><p5>Tickets Available: </p5>
                <?php echo $totalTicket-$soldTicket?>
                <br/><br/><br/>
                <?php
                $BUYTICKET = "BUY TICKET"; ?>
                <label class="button" id="buy" action=""><?php echo "<a href='ticket.php?id={$rowid}'>".$BUYTICKET."</a></br>";
                ?> </label>
               
        </form> 
                <br/><br/><br/><br/><br/>

            
            <?php
               
                if(date('Y-m-d h:i:s')>$startDate){
                ?>
                <h3>Rating & Comment</h3><br/>
                
                <?php
            if ($result4->num_rows > 0) {
                
                echo "<table><tr><th>User</th><th>Rating</th><th>Title</th><th>Description</th></tr>";
    // output data of each row
                while($row4 = $result4->fetch_assoc()) {
        
                    $row5 = $result5->fetch_assoc();
        
                    echo "<tr><td>" . $row5['first_name']. "</td><td>" . $rating= $row4['rating']. "</td><td>" . $row4['title_of_description']. "</td><td>" . $row4['description']. "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            } ?>
                
            </div>
            <br/>
            <h3>Leave Feedback</h3>
            <form method ="POST">		
			<table>
				<tr>
					<td>
						<label for="rating" class="label"> Rating:</label>
						<select id="rating" name="rating">\
							  <option selected="selected">Please Select</option>
							  <option value="1">1/5</option>
							  <option value="2">2/5</option>
							  <option value="3">3/5</option>
							  <option value="4">4/5</option>
							  <option value="5">5/5</option>
						</select>
					</td>
					<td>
						<label for="title" class="label"> Title:</label>
						<input type="title" id="title" name="title"/> <br/>
					</td>
					<td>
						<br/>
						<label for="description" class="label">Description:</label>
						<textarea id = "description" name="description" rows="3" class="entry"></textarea>
					</td>
					<td>
					<input style = "font-size: 15px; background: #f5f5f5;"
		  			type="submit"  value="Add Comment" name="submit" id="submit"/>
		  			</td>
			</table>
			</form>
            <?php }?>
	</div>
	</div>
<script type="text/javascript" src="settings_checker.js">
</script>
</body>
</html>