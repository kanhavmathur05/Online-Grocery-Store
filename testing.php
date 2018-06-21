<?php
date_default_timezone_set("Asia/Calcutta");
//$date=date('l jS F H:i');
//echo $date;
$date= date("Y-m-d");
$time=date("H:m");
$datetime=$date."T".$time;
echo $date;
echo $time;
?>