<?php

/*<p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>*/

$mon_arr = [
    'Sunday',
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
];

$day = date('l');

foreach ($mon_arr as $value){
    if ($value === $day)
        echo "<i>$value</i><br />";
    else
        echo $value. "<br>";
}