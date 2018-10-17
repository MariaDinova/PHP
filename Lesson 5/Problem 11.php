<?php
/*
 Да се състави програма, която въвежда от клавиатурата 7 цели числа
в едномерен масив
Програмата да изведе всички числа кратни на 5, но по големи от 5.
Пример: -23, -55, 17, 75, 56, 105, 134
Изход: 75,105 2 числа
 */
echo "Please enter an array of 7 integer numbers, separated by comma: ";
$inputArray = explode(',', trim(fgets(STDIN)));
while (count($inputArray) > 7){
    echo "Please enter an array of 7 integer numbers, separated by comma: ";
    $inputArray = explode(',', trim(fgets(STDIN)));
}

$result = [];
for ($i = 0; $i < count($inputArray); $i++){
    if ($inputArray[$i] > 5 && $inputArray[$i] % 5 == 0){
        $result[] = $inputArray[$i];
    }
}
echo implode(',', $result) . ". " . count($result) ." numbers";