<?php
/*
 Да се състави програма, чрез която по предварително въведени 7
числа в едномерен масив се разменят местата на елементи с индекси:
- 0 и 1 чрез трета променлива;
- 2 и 3 чрез събиране;
- 4 и 5 чрез умножение.
Пример: 1,2,3,4,5,6,7
Изход: 2,1,4,3,6,5,7
 */

$inputArray = [1,2,3,4,5,6,7];

$temp = $inputArray [0];
$inputArray[0]= $inputArray[1];
$inputArray[1] = $temp;

$inputArray[2] += $inputArray[3];
$inputArray[3] = $inputArray[2] - $inputArray[3];
$inputArray[2] -= $inputArray[3];

$inputArray[4] *= $inputArray[5];
$inputArray[5] = $inputArray[4] / $inputArray[5];
$inputArray[4] /= $inputArray[5];

echo implode(',', $inputArray);