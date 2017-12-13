<?php

include_once "dbconnect.php";
$connection = connect();
session_start();
$user_check = $_SESSION['username'];

$sql = "SELECT * FROM user WHERE username='$user_check'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result);
$login_session=$row['first_name'];
$userid_session=$row['user_id'];
$email_session=$row['email'];
$username_session=$row['username'];
$address_session=$row['address'];
$mobile_session=$row['mobile_number'];
echo $userid_session;
if (!isset($login_session)){
	mysqli_close($connection);
	echo "Failed to Make Session";
}
?>