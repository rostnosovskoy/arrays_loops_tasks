<?php
/**

6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
русские — в массив $ru.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой')?
$en = array('green', 'red','blue')?
$ru = array('зеленый', 'красный', 'голубой')?
 */

$arr = [
    'green' => 'зеленый',
    'red' => 'красный',
    'blue' => 'голубой'
];
$count = count($arr);
$i = 0;
foreach ($arr as $value => $key){
        $en[$i++] = $key;
        $ru[$i++] = $value;
}
echo "<br />";
print_r($arr);
echo "<br />";
print_r($en);
echo "<br />";
print_r($ru);