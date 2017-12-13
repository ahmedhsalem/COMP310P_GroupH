<?php
require_once 'session.php';
require_once 'dbconnect.php';
require_once 'testinput.php';
$email = $changed = $email = $password = $address = $mobile = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
if(!empty($_GET['email'])) { 
$email = test_input($_GET['email']);
$connection = connect();		
$sql = "UPDATE user
		SET email = '$email'
		WHERE user_id = '$userid_session' ";
mysqli_query($connection, $sql);
$changed = "Changed successfully!"; }

if(!empty($_GET['password'])) { 
$password = test_input($_GET['password']);
$connection = connect();		
$sql = "UPDATE user
		SET password = '$password'
		WHERE user_id = '$userid_session' ";
mysqli_query($connection, $sql);
$changed = "Changed successfully!";}

if(!empty($_GET['address'])) { 
$address = test_input($_GET['address']);
$connection = connect();		
$sql = "UPDATE user
		SET address = '$address'
		WHERE user_id = '$userid_session' ";
mysqli_query($connection, $sql);
$changed = "Changed successfully!";}

if(!empty($_GET['mobile'])) { 
$mobile = test_input($_GET['mobile']);
$connection = connect();		
$sql = "UPDATE user
		SET mobile_number = '$mobile'
		WHERE user_id = '$userid_session' ";
mysqli_query($connection, $sql);
$changed = "Changed successfully!";
}
mysqli_free_result($result);
mysqli_close($connection);
}
     

?>