<?php
require_once 'dbconnect.php';
require_once 'testinput.php';
include_once 'session.php';
include_once 'eventDetailIndex.php';
require_once ('eventListIndex.php');
$username = $message = $error = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
if(isset($_GET['submit'])) { 
$connection = connect();
// Wayne I need the event_id that you used to go from event list to the event details page. I need that variable in place of $row_id. 
$sql = "SELECT ticket_id FROM ticket WHERE user_id='$userid_session' AND event_id='$rowid'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result);
	if (mysqli_num_rows($result) == 0) {
		$error = "You didn't buy a ticket for this event, you are not allowed to give feedback on an event you didn't attend.";
	}  
	else {		
	$rating = $_GET['rating'];
	$title = test_input($_GET['title']);
	$description = test_input($_GET['description']);

	$sql = "INSERT INTO feedback ( ticket_id, title_of_description, description, rating) VALUES 
	( '$row', '$title', '$description', '$rating')";
	mysqli_query($connection, $sql);
	header("Location: eventDetail.php");
	}

mysqli_free_result($result);
mysqli_close($connection);
}
}       

?>