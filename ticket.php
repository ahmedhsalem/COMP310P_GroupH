<?php
      require_once('session.php');
      ob_start();
      require_once ('eventList.php');
      ob_end_clean();
      require_once('eventDetailIndex.php');
      require_once ('eventListIndex.php');
      require_once ('purchase.php');

     

    
      
?>
<!DOCTYPE html>
<head>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
  <link href="ticket.css" rel="stylesheet" type="text/css"/>
  <title>Buy Tickets</title>

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
                <h2>Ticket</h2>
            </div>

                <p1>Event Name: </p1>
                <?php echo $eventName;?>
                <br><p7>Location: </p7>
                <?php echo $eventLocation; ?>
                <br/><p2>Ticket Price: </p2>
                <?php echo $ticketPrice;?>
                <br/><p3>Available Tickets: </p3>
                <?php echo $totalTicket-$soldTicket;?>
<!-- Number of Tickets is Limited to 10 tickets at a time and limited to the amount of tickets available --!>     
				<form method = "POST" id="form">           
                <br/><p4>Number of Tickets you would like to purchase:</p4>
                 
					<select id="purchase" name="purchase" onChange="totalPrice()">
							<option selected="selected" value="0">Please Select</option>
							<?php
							for ($i = 1;$i <=($totalTicket-$soldTicket);$i++)
							{
								echo "<option value='$i'>$i</option>";
								if ($i==10){
								break;
								}
							}
							?>
								
					</select>
                <br/><p4>Total Price:</p4><p4 id="price"></p4>
                <?php
                    
                    if(date('Y-m-d h:i:s')>$ticketStartTime) {
                        echo "<br>Time Left to Buy Tickets:<br>";
                        require_once ('countDownTimer.php');
                    } else {
                        echo "<br>Tickets are avaialble on $ticketStartTime ";
                    }
                
                
                
                ?>
                
                
                
               
                
                <?php
               
                if(date('Y-m-d h:i:s')>$ticketEndTime){
                   echo "<br/><br/><br/>Sorry, tickets are no longer for sale.";
                   $SUBMIT = "";
                } else if(date('Y-m-d h:i:s')<$ticketStartTime) {
                    $SUBMIT = "";
                    }
                  else if ($totalTicket-$soldTicket==0) {
                    echo "<br/><br/><br/>Tickets Sold Out";
                    $SUBMIT = "";
                    } 
                
                else {
                    
                    $SUBMIT = "SUBMIT";
                    
                }
                
                ?>
                <br/><br/><label class="button" id="buy" onclick="submitForm()"><?php echo $SUBMIT ?></label>
               </form>
			   <h3 align="right"><?php echo $message; ?></h3>
	</div>
	</div>
<script type="text/javascript">
function totalPrice (){ 
var selected = document.getElementById("purchase");
var number = selected.options[selected.selectedIndex].value;
document.getElementById("price").innerHTML = " ".concat(number*"<?php echo $ticketPrice;?>");
}
function submitForm() {
    document.getElementById("form").submit();
}
</script>
</body>
</html>