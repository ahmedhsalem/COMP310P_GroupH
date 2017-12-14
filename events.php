<?php
require_once 'dbconnect.php';
require_once 'testinput.php';
require_once 'session.php';
$eventname = $capacity = $ticketprice = $starttime = $endtime = $description = $image = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['submit'])) { 
		$eventname = test_input($_POST['event_name']);
		$capacity= test_input($_POST['event_capacity']);
		$categoryid = $_POST['category_id'];
		$roomid = $_POST['room'];
		$locationid = $_POST['location'];
		$ticketprice = test_input($_POST['ticket_price']);
		$starttime = test_input($_POST['event_start_date_time']);
		$endtime = test_input($_POST['event_end_date_time']);
		$description = test_input($_POST['description']);

		// POST image name
		$image = $_FILES['image']['name'];
		// image file directory
		$target = "images/".basename($image);


		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
		}else{
		$msg = "Failed to upload image";
		}
		
		$sql = "INSERT INTO `requested_event` (`description`, `event_name`, `category_id`, `event_capacity`, `location_id`, `ticket_price`, `user_id`, `event_start_date_time`, `event_end_date_time`, `ticket_start_date_time`, `ticket_end_date_time`, `room_id`, `approved`, image) VALUES
		('$description', '$eventname', '$categoryid', '$capacity', '$locationid', '$ticketprice', '$userid_session', '2017-11-22 22:00:00', '2017-11-23 00:00:00', '2017-10-22 22:00:00', '2017-11-22 21:00:00','$roomid', 0, '$image')";
		mysqli_query($connection, $sql);
		
		  $msg = "";
		
		
		mysqli_free_result($result);
		mysqli_close($connection);
		}}


       ?>
