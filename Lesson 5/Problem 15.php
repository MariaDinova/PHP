<?php
/*
 Да се състави програма, която въвежда в едномерен масив реални
числа.
Като изход: програма извежда онези 3 различни числа, чиято
абсолютна стойност формира максималната обща сума.
Пример: 7.13; 0.2; 4.9; 5.1; 6.34; 1.12
Изход: 5.1; 6.34; 7.13
 */
echo "Please enter an array of numbers, separated by comma: ";
$inputArray = explode(',', trim(fgets(STDIN)));
$copy = $inputArray;

$maxNum = $copy[0];
$pos = 0;
for ($j = 0; $j < 3; $j++){
    foreach ($copy as $key => $item) {
        if (abs($item) > $maxNum){
            $maxNum = $item;
            $pos = $key;
        }
    }
    echo $inputArray[$pos]."; ";
    unset($copy[$pos]);
    $maxNum = 0;
}
