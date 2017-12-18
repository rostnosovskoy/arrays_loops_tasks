<?php


$mon_arr = [
    'Sunday',
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
];

$day1 = 'Saturday';
$day2 = 'Sunday';

foreach ($mon_arr as $value){
    if (($value === $day1) || ($value === $day2))
        echo "<b>$value</b><br />";
    else
        echo $value. "<br>";
}