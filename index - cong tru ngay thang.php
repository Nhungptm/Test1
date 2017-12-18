<?php
$today = date('Y/m/d');
$days=3;
//$date = new DateTime($today);
// >= php version 5.3
//date_sub($date, date_interval_create_from_date_string($days.' days'));
//echo $date_minus;
//echo "<br>";
// php version < 5.3
$date_minus2 = date("Y-m-d", strtotime("$today + $days day"));
echo $date_minus2;
?>