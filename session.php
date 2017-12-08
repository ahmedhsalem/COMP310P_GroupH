<?php

include "dbconnect.php";
$connection = connect();
session_start();
$user_check = $_SESSION['username'];

$sql = "SELECT first_name FROM user WHERE username='$user_check'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result);
$login_session=$row['first_name'];

if (!isset($login_session)){
	mysqli_close($connection);
	echo "Failed";
}
?>