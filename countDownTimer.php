<?php require ('eventDetailIndex.php'); ?>
<!doctype html>
<html>
<head>
<title>PHP Countdown Timer</title>
<style>
 
h1{
font-size:30px;
font-weight:bold;
font-family:Arial, Helvetica, sans-serif;
}
 
</style>
</head>
<body>
<?php
$date = strtotime("$ticketEndTime");
$remaining = $date - time();
$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
?>
 
<h1> <?php echo $days_remaining?></span> days and <?php echo $hours_remaining?></span> hours</h1>
</body>
</html>