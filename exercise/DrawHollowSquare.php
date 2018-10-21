<?php
/**
Draw square from stars by given side N
input: 4
output:
 ****
 *  *
 *  *
 ****
 */
echo "Enter a positive integer number: ";
$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++){
    for ($j = 0; $j < $n; $j++){
        if ($i == 0 || $i == $n-1 || ($i != 0 && $j == 0) || ($i != 0 && $j == $n -1)){
            echo "*";
        }
        else {
            echo " ";
        }
    }
    echo PHP_EOL;
}