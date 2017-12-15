<?php require_once "session.php";
      require_once "home_page_index.php";
  ?>

<!DOCTYPE html>
<head>
  <title>Operahouse Project</title>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
</head>
<style>
	.box {
		width:24.94%;
		height: 150px;
		background-color: white;
		float: left;
		border-right:1px solid black;
		border-bottom: 1px solid black;
}
	#rightbox {
		border: none;
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
					<li><a href="DVD_Rental_Page.html" class="links">Locations</a>
					<li><a href="request_event_page.php" class="links">Request an Event</a>
					<li><a href="DVD_Returns.html" class="links">Contact Us</a>
				</ul>
			</nav>
		</header>
		<form action="search_results_page.php" method="GET">
		<input type="submit" value="Go" id="go"/>
		<input type="text" id="search" class="search" name="search"/>
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
		<?php $src = "images/" . $image; ?>
		<a href="eventDetail.php?id={$id}"><img style="height:100%; width: 60%;" src="<?php echo $src;?>"/></a>
	<div class="innercontent">
	</div>
	</div>
	<div class="box">
            <?php 
                if($eventNameBox1 == null) {
                echo("No coming event recently");
            } else {
               
                $id=$row8["event_id"];
                echo "Event Name:<br><a href='eventDetail.php?id={$id}'>" . $eventNameBox1 . "</a><br><br>"; 
                echo "Event Description:<br> $eventDescriptionBox1";
            }
            ?>
	</div>
	<div class="box">
            <?php 
                if($eventNameBox2 == null) {
                echo("No coming event recently");
            } else {
                $id=$row9["event_id"];
                echo "Event Name:<br><a href='eventDetail.php?id={$id}'>" . $eventNameBox2 . "</a><br><br>"; 
                echo "Event Description:<br> $eventDescriptionBox2";
            }
            
            ?>
	</div>
	<div class="box">
            <?php 
            if($eventNameBox3 == null) {
                echo("No coming event recently");
            } else {
                $id=$row10["event_id"];
                echo "Event Name:<br><a href='eventDetail.php?id={$id}'>" . $eventNameBox3 . "</a><br><br>"; 
                echo "Event Description:<br> $eventDescriptionBox3";
            }
            ?>
	</div>
	<div class="box" id="rightbox">
	</div>
	</div>
</body>
</html>