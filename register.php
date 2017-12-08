<?php

require 'dbconnect.php';
session_start();
$username = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
if(isset($_GET['username'])) { 
$username = test_input($_GET['username']);

// Connect to the database
$connection = connect();

//SQL to find the username
$sql = "SELECT * FROM user WHERE username='$username'";

//Execute query and get the result
$result = mysqli_query($connection, $sql);

//Get the first row of the result as an array
$row = mysqli_fetch_array($result);

//If the user doesn't exist there will be no rows in the $result
if (mysqli_num_rows($result) > 0) {
    $message = "Please select a different username, username is already taken";
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
		header("Location: home_page.php");
		}
mysqli_free_result($result);
mysqli_close($connection);
}
}    

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>