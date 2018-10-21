<?php
/**
 Draw square from stars by given side N
 input: 4
 output:
 ****
 ****
 ****
 ****

 */
echo "Enter a positive integer number: ";
$n = intval(trim(fgets(STDIN)));
for ($i = 0; $i < $n; $i++){
    for ($j = 0; $j < $n; $j++){
        echo "*";
    }
    echo PHP_EOL;
}