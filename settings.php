<?php
require_once 'session.php';
require_once 'dbconnect.php';
require 'testinput.php';
$username = $message = $error = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
if(isset($_GET['username'])) { 
$username = test_input($_GET['username']);
$connection = connect();
$sql = "SELECT * FROM user WHERE username='$username'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result);

if (mysqli_num_rows($result) > 0) {
    $error = "Please select a different username, username is already taken";
}  else {		
		$password = test_input($_GET['password']);
		$firstname = test_input($_GET['firstname']);
		$lastname = test_input($_GET['lastname']);
		$email = test_input($_GET['email']);
		$address = test_input($_GET['address']);
		$mobile = test_input($_GET['mobile']);
		
		$sql = "INSERT INTO user ( first_name, last_name, username, password, email, address, mobile_number ) VALUES 
		( '$firstname', '$lastname', '$username', '$password', '$email', '$address', '$mobile' )";
		mysqli_query($connection, $sql);
		header("Location: opening_page.php");
		}
mysqli_free_result($result);
mysqli_close($connection);
}
}       

?>