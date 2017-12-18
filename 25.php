<?php
/*


<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.</p>
 */

$arr = [];
for ($i = 0; $i < 20; $i++){
    $arr[$i] = rand(-100, 100);
    echo "$arr[$i] ";
}

echo "<br />";

$max = $arr[0];
$max_key = 0;
$arr_count = count($arr);
for ($i = 0; $i < $arr_count; $i ++){
    if ($arr[$i] > $max)
    {
        $max = $arr[$i];
        $max_key = $i;
    }
}
$min = $arr[0];
$min_key = 0;

for ($i = 0; $i < $arr_count; $i ++){
    if ($arr[$i] < $min)
    {
        $min = $arr[$i];
        $min_key = $i;
    }
}
echo "$max index is $max_key <br />";
echo "$min index is $min_key <br />";

$temp = $arr[$max_key];
$arr[$max_key] = $arr[$min_key];
$arr[$min_key] = $temp;

foreach ($arr as $value){
    echo "$value ";
}


