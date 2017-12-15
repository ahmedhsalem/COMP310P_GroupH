<?php
      require_once('session.php');
      require ('myEventIndex.php');
      require_once "initialise.php";
?>
<!DOCTYPE html>
<head>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
</head>
<style>
    #columnEventAttended {
    width:40%;
    height: 389px;
    border-style: solid;
    float: right;
    border-width: 1px 1px 1px 1px;
    float: top;
}
#columnEventHost {
    width: 60%;
    height: 194px;
    border-style: solid;
    border-width: 1px 0px 1px 1px;
    float: top;
    
}
#columnEventAttending {
    width: 60%;
    height: 194px;
    border-style: solid;
    border-width: 0px 0px 1px 1px;
    float: top;
}
.title {
	font-size: 1.2em;
	font-weight: bold;
}
</style>
<body>
	
	<div id="content">
	<div class="innercontent">
            <div id='columnHeading'>
                <h2>My Events</h2>
            </div>
            <div id="columnEventAttended">
                <p1 class="title"> Events I've Attended:</p1></br>
                <?php  
                    echo $attendedList;
                ?>
            </div>
            <div id="columnEventHost">
                <p1 class="title">Events I'm Hosting:</p1></br>
                
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
                <p1 class="title">Events I'm Attending:</p1></br>
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