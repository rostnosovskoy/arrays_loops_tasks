<?php
/*<p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
индекс.</p>*/

$arr = [];
for ($i = 0; $i < 20; $i++){
    $arr[$i] = rand(1, 100);
    echo "$arr[$i] ";
}
echo "<br /> ";

$pro = 1;
echo "Elements that > 0 and have even indexes: <br />";
for ($i = 0; $i < 20; $i++){
    if (($arr[$i] > 0) && ($i % 2 == 0)) {
        echo "$arr[$i] ";
        $pro *= $arr[$i];
    }
}
echo " <br /> Composotion is: $pro ";
echo "<br /> ";
echo "Elements that > 0 and have odd indexes: <br /> ";

for ($i = 0; $i < 20; $i++){
    if (($arr[$i] > 0) && ($i % 2 !== 0))
    {
        echo "$arr[$i] ";
    }
}




