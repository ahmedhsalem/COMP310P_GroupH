<?php

require 'dbconnect.php';
session_start();
$username = $error = $message = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
if(isset($_GET['username'])) { 
$username = test_input($_GET['username']);
$password = test_input($_GET['password']);
// Connect to the database
$connection = connect();
//SQL to find the email
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password' ";

//Execute query and get the result
$result = mysqli_query($connection, $sql);

//Get the first row of the result as an array
$row = mysqli_fetch_array($result);

//If the user doesn't exist there will be no rows in the $result
if (mysqli_num_rows($result) == 0) {
    $error = "Username and password combination not valid";
}  else {	
		$_SESSION['username']=$username;
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