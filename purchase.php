<?php
require_once ('dbconnect.php');
require_once ('testinput.php');
include_once ('session.php');
include_once ('eventDetailIndex.php');
require_once ('eventListIndex.php');
$username = $message = $error = "";
$rowid = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['purchase'])) { 
$numberoftickets = $_POST['purchase'];
							for ($i = 1;$i <=$numberoftickets;$i++)
							{
							$sql = "INSERT INTO ticket (user_id, event_id) VALUES
							($userid_session, $rowid)";
							mysqli_query($connection, $sql);
							$message="Tickets Successfully Bought";
							}
							}
}
       
?>
