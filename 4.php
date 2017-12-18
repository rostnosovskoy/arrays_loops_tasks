<?php

/*<p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
помощью второго — столбец элементов.</p>*/

$arr = [
    '11' => 111,
    '12' => 222,
    '13' => 333,
    '14' => 444,
    '15' => 555,
];
echo "Ключи:<br />";
foreach ($arr as $value => $key){
    echo "$key <br />";
}
echo "Значения:<br />";
foreach ($arr as $value => $key){
    echo "$value <br />";
}
print_r($arr);