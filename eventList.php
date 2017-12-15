<?php
      require_once('session.php');
      require ('eventListIndex.php');
      require_once "initialise.php";

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
	
	<div id="content">
	<div class="innercontent">
            <div id='columnHeading'>
                <h2>Event List</h2>
            </div>
            <div id="contentColumn">
                <?php  
                    if (mysqli_num_rows($result1) > 0) {
                    // output data of each row
                        while($row1 = mysqli_fetch_assoc($result1)) {
                            $id=$row1['event_id'];
                            echo "<a href='eventDetail.php?id={$id}'>" . $row1['event_name'] . "</a></br>";
//                            $hostingList = "<a href='hostingEvent.php'>" . $row3['event_name'] . "</a></br>";
//                            echo $hostingList;
                        }
                    } else {
                        echo "0 results";
//                        $hostingList = "0 results";
                    }
                ?>
            </div>
            
	</div>
	</div>
<script type="text/javascript" src="settings_checker.js">
</script>
</body>
</html>