<?php

require_once 'dbconnect.php';
require_once 'testinput.php';
$search = $message = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
if(isset($_GET['search'])) { 
$search = test_input($_GET['search']);

// Connect to the database
$connection = connect();

//SQL to find the username
$sql = "SELECT DISTINCT event_name FROM requested_event
WHERE 
MATCH(requested_event.event_name) AGAINST ('$search') OR
MATCH(requested_event.description) AGAINST ('$search')";

//Execute query and get the result
$result = mysqli_query($connection, $sql);

//Get the first row of the result as an array
$row = mysqli_fetch_array($result);
		if (mysqli_num_rows($result) > 0) {
		;
		if (mysqli_num_rows($result) == 1){
			$id=$row['event_name'];
			echo $id;
			} else if (mysqli_num_rows($result) > 1){
    	// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			$id=$row['event_name'];
			echo $row['event_name'] . "</br>";}
		} else {				           
		$message = "No results Found! Please try to decrease the 
    	search terms, or try a different spelling.";
    	echo $message;
		}}

mysqli_free_result($result);
mysqli_close($connection);
}
}       

?>