<?php
/**
Да се състави програма, която чрез цикъл while извежда
таблицата за умножение, но без повторение.
Т.е. ако е изведено 4*5 не се извежда 5*4.
Пример:
1-ви ред: 1*1; 1*2; 1*3; 1*4; 1*5; 1*6; 1*7; 1*8; 1*9;
2-ри рeд: 2*2; 2*3; 2*4; 2*5; 2*6; 2*7; 2*8; 2*9;
9-ти ред: 9*9;
 */

$row = 1;
$col = $row;

while ($row <= 9){
    $col = $row;
    while ($col <= 9){
        echo " $row * $col";
        $col++;
    }
    echo PHP_EOL;
    $row++;
}