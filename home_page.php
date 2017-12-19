<?php require_once "session.php";
      require_once "home_page_index.php";
  ?>

<!DOCTYPE html>
<head>
  <title>Operahouse Project</title>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
  <link href="home.css" rel="stylesheet" type="text/css"/>
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