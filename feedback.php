<?php
require_once ('dbconnect.php');
require_once ('testinput.php');
include_once ('session.php');
include_once ('eventDetailIndex.php');
require_once ('eventListIndex.php');
$username = $message = $error = "";
$rowid = $_GET['id'];
if(isset($_POST['submit'])) {
	$sql = "SELECT DISTINCT * FROM ticket WHERE user_id='$userid_session' AND event_id='$rowid'";
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_array($result);
	$ticketid = $row['ticket_id'];
	
	$connection = connect();
	$rating = $_POST['rating'];
	$title = test_input($_POST['title']);
	$description = test_input($_POST['description']);

	$sql = "INSERT INTO feedback ( ticket_id, title_of_description, description, rating) VALUES 
	( '$ticketid', '$title', '$description', '$rating')";
	mysqli_query($connection, $sql);

mysqli_free_result($result);
mysqli_close($connection);
} 

?>