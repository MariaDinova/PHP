<?php
/*Въведете число N  и изкарайте като
резултат следния триъгълник с височина N:
        *
       ***
      *****
.................
Кaто допълнително упражнение – нарисувайте същия
триъгълник, но незапълнен.
 */

echo "Please enter an integer number, bigger than 1: ";
$n = trim(fgets(STDIN));
while (intval($n) != floatval($n) || $n < 2){
    echo "Invalid input. Please enter an integer number, bigger than 1: ";
    $n = trim(fgets(STDIN));
}

//triangle 1
/*
for ($row = 1; $row <= $n; $row++){
    if ($row == $n){
        for ($i=1; $i <= $n * 4 + 1; $i++){
            echo ".";
        }
        break;
    }
        for($i = 1; $i <= (($n - $row) + ($n + 1)); $i++) {
            echo " ";
        }
        for($i = 1; $i <= 2*$row-1; $i++) {
            echo "*";
        }
        echo PHP_EOL;
}
*/

// triangle 2
for($row = 1; $row <= $n; $row++){
    if ($row == $n) {
        for ($i = 1; $i <= $n * 4 + 1; $i++) {
            echo ".";
        }
        break;
    }
    else {
        for ($i = 1; $i <= (($n - $row) + ($n + 1)); $i++) {
            echo " ";
        }
        if($row == $n - 1){
            for($i = 1; $i <= 2*$row-1; $i++) {
                echo "*";
            }
            echo PHP_EOL;
        }
        else {
            echo "*";
            for ($i = 1; $i <= 2 * $row - 3; $i++) {
                echo " ";
            }
            if ($row != 1) {
                echo "*";
            }
            echo PHP_EOL;
        }
    }
}
