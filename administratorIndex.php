<?php
include_once ('dbconnect.php');
include_once ('administrator.php');
      $query1=("SELECT * FROM requested_event WHERE approved = 0");
      $result1 = mysqli_query($connection, $query1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST["submit"]))
            {
      $row = mysqli_fetch_array($result1);
      $eventid=$row['event_id'];
	  $sql = "UPDATE requested_event SET approved = 1 WHERE event_id = '$eventid' ";
	  $result = mysqli_query($connection, $sql);
	  echo $eventid;}
}
  
?>