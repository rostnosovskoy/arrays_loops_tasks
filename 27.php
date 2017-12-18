<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <title>27.php</title>
</head>
<body>

<?php

/*<p>27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице,
$cols - кол-во столбцов в таблице. Есть список цветов, в массиве:
$colors =
array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт,
 который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки
будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно
 находиться случайное число. <br><br>
 */

$colors =
    array('red','yellow','blue','gray','maroon','brown','green');

$row = 5;
$cols = 5;

$tb = "<table> ";
for ($i = 0; $i < $row; $i ++) {
    $tb .= " <tr> ";
    for ($j = 0; $j < $cols; $j ++)
    {
        $rc = array_rand($colors);
        $rn = rand(-50000, 50000);
        $tb .= " <td style ='background-color: ".$colors[$rc].";'> ".$rn." </td> ";
    }
    $tb .= " </tr> ";
}
$tb .= " </table>";
echo $tb."<br />";
?>

</body>
</html>






