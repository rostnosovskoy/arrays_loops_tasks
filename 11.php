<?php
/**<p>11. Выведите столбец четных чисел в промежутке от нуля до 100.</p>
 */

for ($i = 0; $i < 101; $i++){
    if (($i % 2) == 0)
    {
        echo "$i <br />";
    }
}