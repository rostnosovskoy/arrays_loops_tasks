<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 15.12.2017
 * Time: 14:52
 */

//<p>28. Вывести таблицу умножения с помощью двух циклов for.</p>

for ($i = 2; $i < 11; $i++){
    for ($j = 2; $j < 11; $j++){
        $res = $i * $j;
        echo "$i * $j = $res <br/>";
    }
    echo "<br />";
}