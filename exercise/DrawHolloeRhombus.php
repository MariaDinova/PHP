<?php
/*
 Draw rhombus from stars by given N.
input: 5
    *****
   *   *
  *   *
 *   *
*****
 */
echo "Enter a positive integer number: ";
$n = intval(trim(fgets(STDIN)));

for ($rows = 1; $rows <= $n; $rows++){
    for ($cols = 1; $cols <= $n + ($n - 1); $cols++){
        if (($rows == 1 && $cols >= $n) || ($rows == $n && $cols <= $n) || ($rows + $cols == $n + 1) || ($rows + $cols == $n * 2)){
            echo "*";
        }
        else {
            echo " ";
        }
    }
    echo PHP_EOL;
}