<?php
      require_once('session.php');
      require_once ('hostingEventIndex.php');
      require_once "initialise.php";
      ob_start();
      require_once ('myEvent.php');
      ob_end_clean();
?>
<!DOCTYPE html>
<head>
  <title>Events I'm Hosting</title>
  <link href="layout.css" rel="stylesheet" type="text/css"/>
  </head>
  <style>
    #leftContentColumn {
        width:55%;
        height: 389px;
        border-style: solid;
        float: left;
        border-width: 1px 1px 1px 1px;
        float: left;
    }
    
    #rightContentColumn {
        width:44%;
        height: 389px;
        border-style: solid;
        float: right;
        border-width: 1px 1px 1px 0px;
        float: left;
    }
    .title {
	font-size: 1.2em;
	font-weight: bold;
	text-decoration: underline;
}
	p2 {
	text-decoration: underline;
	font-weight: bold;
	}
   
</style>
  <body>
	
	<div id="content">
	<div class="innercontent">
	 <div id='columnHeading'>
                <h2><?php echo $eventname; ?></h2>
            </div>
            
          	<div id="leftContentColumn">
                <p1 class="title">List of Participants:</p1><br/><br/>
                <?php 
                 
                    if ($result4->num_rows > 0) {
                        while($row4 = $result4->fetch_assoc()) {
                            echo $row4['first_name']."&nbsp".$row4['last_name']."<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                
                ?>
                
                
              
            </div>
            <div id='rightContentColumn'>
                <p2>Total Tickets:</p2>
                <?php echo $totalTicket; ?>
                <br><br><br><br><br><br><p2>Tickets Sold:</p2>
                <?php echo $soldTicket; ?>
                <br><br><br><br><br><br><p2>Tickets Available:</p2>
                <?php echo $totalTicket-$soldTicket; ?>
                
                <br><br><br><br><br><br>
                <?php echo "<a href='trigger.php?id={$rowid}'>"."Trigger"."</a></br>";
                ?>
            </div>

            
	</div>
	</div>
<script type="text/javascript" src="settings_checker.js">
</script>
</body>
</html>