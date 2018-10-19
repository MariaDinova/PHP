<?php
/*
 Напишете програма, която първо чете масив и после създава нов
масив със същия размер по следния начин: стойността на всеки
елемент от втория масив да е равна на сбора от предходния и
следващият елемент на съответния елемент от първия масив.
Да се изведе получения масив.
Въведете размер на масива: 4
Въведете елементите на масива:
2
3
-11
7
Полученият масив е: {3, -9, 10, -11}
 */
echo "Please enter a size for the aray: ";
$arrSize = intval(trim(fgets(STDIN)));
$inputArray = [];
for ($i = 0; $i < $arrSize; $i++){
    echo "Please enter the element " . ($i+1) . " of the array: ";
    $inputArray[$i] = intval(trim(fgets(STDIN)));
}

$resultArray = array();
for ($i = 0; $i < count($inputArray); $i++){
    if ($i - 1 < 0){
        $resultArray[$i] = $inputArray [$i + 1];
    }
    else if ($i + 1 > count($inputArray) - 1){
        $resultArray[$i] = $inputArray [$i - 1];
    }
    else {
        $resultArray[$i] = $inputArray [$i - 1] + $inputArray [$i + 1];
    }
}
foreach ($resultArray as $item) {
    echo $item . " ";
}