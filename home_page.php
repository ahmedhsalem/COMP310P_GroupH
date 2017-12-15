<?php require_once "session.php";
      require_once "home_page_index.php";
      require_once "initialise.php";
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

	<div id="content">
		<?php $src = "images/" . $image; ?>
                <?php $id = $row8['event_id']; ?>
		<a href="eventDetail.php?id=<?php echo $id; ?>"><img style="height:100%; width: 60%;" src="<?php echo $src;?>"/></a>
	<div class="innercontent">
	</div>
	</div>
<div id="heading">
    <h1>Coming Events</h1>
    
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