<?php include "events.php";
	  include_once "session.php";
	  
	$db = mysqli_connect("localhost", "root", "", "opera_house");
  $result = mysqli_query($db, "SELECT image FROM requested_event");
?>

<!DOCTYPE html>
<head>
  <title>Request to Host</title>
  <link href="layout.css" rel="stylesheet" type="text/css"/>


  <style>
      .entry, textarea, select {
    	float: right;
    	width: 500px;
    	resize: none;
    	padding: 1px;
    	margin-right: 200px;
    }
    .label {
    float: left;
  
}
.checkbox-grid li {
    display: block;
    float: left;
    width: 25%;
}
#content {
height: 700px;
}
#upload {
float: right;
display: block;
margin-right: 30%;
}

  </style>
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
					<li><a href="index.html" class="links">Events</a>
					<li><a href="DVD_Rental_Page.html" class="links">Locations</a>
					<li><a href="request_event_page.php" class="links">Request an Event</a>
					<li><a href="DVD_Returns.html" class="links">Contact Us</a>
				</ul>
			</nav>
		</header>
		<input type="submit" value="Go" id="go"/>
		<input type="text" id="search" class="search"/>
		<label for="search" id="label">Search:</label>
	</div>
	<div id="columnRight">
	Welcome, <?php echo " $login_session"; ?> </br>
	<a href="myEvent.php">My Events</a></br>
	<a href="settings_page.php">Settings</a></br>
	<a href="logout.php"><button type="button">Logout</button></a>
	</div>
	<div id="content">
	<div class="innercontent">
	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data" >
            <h2 align="center">Request to Host</h2>
            <br />
            <div>
                <label for="event_name" class="label"><b>Event Name:</b></label>
                <div>
                    <input class="entry" type="text" id="firstname" placeholder="Full Name" id="event_name" name="event_name" required>
                </div>
            </div>
            <br />
            <br />
            <div>
                <label class="label"><b>Event Category:</b></label>
                <br />
               
                
                <ul class="checkbox-grid">
    <li><input type="radio" name="category_id" value="1" id="text1"/><label for="text1">Indoor Concert</label></li>
    <li><input type="radio" name="category_id" value="2" id="text2"/><label for="text2">Outdoor Concert</label></li>
    <li><input type="radio" name="category_id" value="3" id="text3"/><label for="text3">Ballet</label></li>
    <li><input type="radio" name="category_id" value="4" id="text4"/><label for="text4">Theater</label></li>
    <li><input type="radio" name="category_id" value="5" id="text5"/><label for="text5">Intrumental Performance</label></li>
    <li><input type="radio" name="category_id" value="6" id="text6"/><label for="text6">Opera</label></li>
    <li><input type="radio" name="category_id" value="7" id="text7"/><label for="text7">Children's Event</label></li>
    <li><input type="radio" name="category_id" value="8" id="text8"/><label for="text8">Comedy</label></li>
</ul>

     
            </div>
            <br />  
            <br />
            <br />
            <div>
                <label for="room" class="label"><b>Select Room:</b></label>
                <div>
                    <select id="room" name="room">\
                      <option selected="selected">Please Select</option>
					  <option value="1">Grand Theater Room</option>
					  <option value="2">Outdoor Courtyard</option>
					  <option value="3">Stage 1</option>
					  <option value="4">Stage 2</option>
					</select>
                </div>
            </div>
            <br />
            <br />
			<div>
                <label for="location" class="label"><b>Select Location:</b></label>
                <div>
                    <select id="location" name="location" >
                      <option selected="selected">Please Select</option>
					  <option value="1">Operahouse 1</option>
					  <option value="2">Operahouse 2</option>
					  <option value="3">Operahouse 3</option>
					</select>
                </div>
            </div>
            <br />
            <br />
            
            <div>
                <label for="event_capacity" class="label"><b>Event Capacity:</b></label>
                <div>
                    <input class="entry" type="text" id="event_capacity" placeholder="Capacity of event" name="event_capacity" required>
                </div>
            </div>
            <br />
            <br />

            
            <div>
                <label for="ticket_price" class="label"><b>Ticket Price:</b></label>
                <div>
                    <input class="entry" type="text" id="ticket_price" placeholder="Price of 1 ticket" name="ticket_price" required>
                </div>
            </div>    
            <br />  
            <br />
            <div >
                <label class="label"><b>Event Date:</b></label>
                <br />
               
                <label for="event_start_date_time" class="label">From:</label>
                    <input class="entry" type="datetime-local" name="event_start_date_time" id="event_start_date_time"/>
                <br />
                
                <label for="event_end_date_time" class="label">To:</label>
                    <input class="entry" type="datetime-local" name="event_end_date_time" id="event_start_date_time"/>
                         
            </div>
            <br />
            <br />

            <div>
                <label for="description" class="label"><b>Event Description:</b></label>
                <div>
                    
                    <textarea id = "description" placeholder="Describe your event as in much detail as possible" name ="description" rows="3" required><?php if(isset($_POST['description'])) echo htmlspecialchars($_POST['description']); ?></textarea><br/><br/><br/><br/>
                </div>
            </div>
            <br />
            <div>
                <label for="description" class="label"><b>Upload Image</b></label>
                <div>
                	<input type="hidden" name="size" value="1000000000">
 					<input type="file" class="entry" name="image">
                </div>
            </div>
            <br/><br/>
			<?php
			
			while ($row = mysqli_fetch_assoc($result)) {
			echo "<img src='images/".$row['image']."' >";
			}
			?>
            <br/>
             <div class="label">
                <div>
                    <input style= "font-size: 15px; background: #f5f5f5;"
		  			class="entry" type="submit"  value="Add Event" name="submit">
                    <input type="hidden" name="action" value="add">
                </div>
            </div>
            
        </form>
<script type="text/javascript" src = "checker.js"></script>
</body>
</html>
