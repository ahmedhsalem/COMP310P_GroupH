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
$user_check2 = $_SESSION['administrator.username'];
$sql2 = "SELECT * FROM administrator WHERE username='$user_check2'";
$result2 = mysqli_query($connection, $sql2);
$row2 = mysqli_fetch_array($result2);
$login_session2=$row2['first_name'];
$userid_session2=$row2['administrator_id'];
$username_session2=$row2['username'];
echo $userid_session2;

if($userid_session == null) {
    $welcomeName = $login_session2;
} else {
    $welcomeName = $login_session;
}


if (!isset($login_session2) && !isset($login_session)){
	mysqli_close($connection);
	echo "Failed to Make Session";
}
?>