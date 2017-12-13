<?php include_once "events.php";
	  include_once "session.php"; ?>

<!DOCTYPE html>
<head>
  <title>Request to Host</title>
  <link href="layout.css" rel="stylesheet" type="text/css"/>


  <style>
      .entry, textarea {
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
	
	<form action="events.php" method="post" enctype="multipart/form-data">
            <h2 align="center" class="loginform">Request to Host</h2>
                <?php if(isset($_REQUEST['msg']) && $_REQUEST['msg']=="suc"){?>
	  			<h5 style="color:green;">Event Added Successfully!</h5><?php }?>
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
                <label class="label"><b>Event Categories:</b></label>
                <br />
               
                
                <ul class="checkbox-grid">
    <li><input type="checkbox" name="category_check_list[]" value="Outdoor Space" /><label for="text1">Outdoor Space</label></li>
    <li><input type="checkbox" name="category_check_list[]" value="Indoor Space" /><label for="text2">Indoor Space</label></li>
    <li><input type="checkbox" name="category_check_list[]" value="Ballet stage" /><label for="text3">Text 3</label></li>
    <li><input type="checkbox" name="category_check_list[]" value="Cinema" /><label for="text4">Text 4</label></li>
    <li><input type="checkbox" name="category_check_list[]" value="Catering" /><label for="text5">Text 5</label></li>
    <li><input type="checkbox" name="category_check_list[]" value="Stairs" /><label for="text6">Text 6</label></li>
    <li><input type="checkbox" name="category_check_list[]" value="value7" /><label for="text7">Text 7</label></li>
    <li><input type="checkbox" name="category_check_list[]" value="value8" /><label for="text8">Text 8</label></li>
</ul>

     
            </div>
            <br />  
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
                    <input class="entry" type="datetime" name="event_start_date_time" id="event_start_date_time"/>
                <br />
                
                <label for="event_end_date_time" class="label">To:</label>
                    <input class="entry" type="datetime" name="event_end_date_time" id="event_start_date_time"/>
                         
            </div>
            <br />
            <br />

            <div>
                <label for="description" class="label"><b>Event Description:</b></label>
                <div>
                    
                    <textarea id = "description" placeholder="Describe your event as in much detail as possible" name ="description" rows="3" required><?php if(isset($_GET['description'])) echo htmlspecialchars($_GET['description']); ?></textarea><br/><br/><br/><br/>
                </div>
            </div>
            <br />
            <div>
                <label for="image" class="label"><b>Event Image:</b></label>
                <div>
                    <input class="entry" type="file" name="image" id="image" required>
                </div>          
            </div>
            <br />
            <br />
    
            <div class="label">
                <div>
                    <input style= "font-size: 15px; background: #f5f5f5;
		  class="entry" type="submit"  value="Add Event">
                    <input type="hidden" name="action" value="add">
                </div>
            </div>
            
        </form>
	</div>
	</div>
<script type="text/javascript" src = "checker.js"></script>
</body>
</html>
