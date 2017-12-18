<?php

/*<p>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'.
С помощью цикла foreach выведите эти слова в столбик.</p>*/

$a = [
    'html',
    'css',
    'php',
    'js',
    'jq'
];
foreach ($a as $val){
    echo "$val <br />";
}

