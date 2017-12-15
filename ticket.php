<?php
      require_once('session.php');
      require_once('eventDetailIndex.php');
      require_once ('eventListIndex.php');
      require_once ('purchase.php');
      require_once 'initialise.php';
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
                   echo "<br/><br/><br/>Sorry, tickets are no longer for selling.";
                } else if(date('Y-m-d h:i:s')<$ticketStartTime) {
                    
                    }
                  else if ($totalTicket-$soldTicket==0) {
                    echo "<br/><br/><br/>Tickets Sold Out";
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