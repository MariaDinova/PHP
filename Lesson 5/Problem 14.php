<?php
/*
 Имате предварително въведен едномерен масив, съдържащ реални
числа.
Да се състави програма, чрез която се избират само елементи със
стойности от интервала [-2.99..2.99] и новата редица се извежда на
екрана.
Пример: 7.1,8.5,0.2,3.7,0.99,1.4,-3.5,-110,212,341,1.2
Изход: 0.2; 0.99; 1.4; 1.2
 */
$inputArray = [7.1,8.5,0.2,3.7,0.99,1.4,-3.5,-110,212,341,1.2];
$resultArray = array();

for ($i = 0; $i < count($inputArray); $i++){
    if ($inputArray[$i] > -2.99 && $inputArray[$i] < 2.99){
        $resultArray[] = $inputArray[$i];
    }
}
echo implode(',', $resultArray);