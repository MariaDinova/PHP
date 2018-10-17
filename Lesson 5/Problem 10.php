<?php
/*
 Да се състави програма, чрез която се въвеждат 7 цели числа в
едномерен масив.
Програмата да изведе числото, което е най-близко до средната
стойност на въведените числа.
Пример: 1,2,3,4,5,6,7
Изход: средна стойност 4, най-близка стойност 4
 */
echo "Please enter an array of 7 integer numbers, separated by comma: ";
$inputArray = explode(',', trim(fgets(STDIN)));
while (count($inputArray) > 7){
    echo "Invalid input. Please enter an array of 7 integer numbers, separated by comma: ";
    $inputArray = explode(',', trim(fgets(STDIN)));
}

$average = array_sum($inputArray) / count($inputArray);
$closerNum = $inputArray[0];
$currentDiff = 0;
$diff;

for ($i = 0; $i < count($inputArray); $i++){
    $currentDiff == abs($inputArray[$i] - $average);

    if ($inputArray[$i] == $average || !isset($diff) || $currentDiff < $diff){
        $diff = $currentDiff;
        $closerNum = $inputArray[$i];
    }
}
echo "The average is $average, the closer value is $closerNum";