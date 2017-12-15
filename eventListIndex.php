<?php

//query of selecting data from requested_events which are approved
$query1=("SELECT * FROM requested_event WHERE approved = '1'");
 $result1=mysqli_query($connection, $query1);
 
 ?>