<?php


/*<p>3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите
сумму квадратов элементов этого массива. Результат запишите переменную $result.</p>*/

$arr = [
    26,
    17,
    136,
    12,
    15
];
$resalt = 0;
foreach ($arr as $value){
    $resalt += pow($value, 2);
}
echo "$resalt";