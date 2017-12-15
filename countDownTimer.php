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
<?php if ($days_remaining<=0 && $hours_remaining <=0) { 
echo "<br>EXPIRED"; } else {
echo "<br>".$days_remaining." days and ".$hours_remaining." hours"; }?> 
</body>
</html>