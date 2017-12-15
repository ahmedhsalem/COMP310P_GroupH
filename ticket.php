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
.button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 5px 10px 5px 10px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
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

                <p1>Event Name: </p1>
                <?php echo $eventName;?>
                <br/><p2>Ticket Price: </p2>
                <?php echo $ticketPrice;?>
                <br/><p3>Available Tickets: </p3>
                <?php echo $totalTicket-$soldTicket;?>
<!-- Number of Tickets is Limited to 10 tickets at a time and limited to the amount of tickets available --!>     
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">           
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
                <br/><h4>Time Left to Buy Tickets: </h4>
                <h3><?php require_once ('countDownTimer.php'); ?></h3>
                <?php
                if(date('Y-m-d h:i:s')>$ticketEndTime || $totalTicket-$soldTicket==0){
                   echo "<br/><br/><br/>Sorry these tickets are no longer available.";
                } else {
                    $SUBMIT = "SUBMIT";
                    echo "<input type='button' value='$SUBMIT'/></input>";
                    }
                ?>
               </form>

	</div>
	</div>
<script type="text/javascript">
function totalPrice (){ 
var selected = document.getElementById("purchase");
var number = selected.options[selected.selectedIndex].value;
document.getElementById("price").innerHTML = " ".concat(number*"<?php echo $ticketPrice;?>");
}
</script>
</body>
</html>