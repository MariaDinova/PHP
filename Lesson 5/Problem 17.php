<?php
/*
 Една редица от естествени числа ще наричаме зигзагообразна нагоре,
ако за елементите и са изпълняват условията:
N1 < N2 > N3 < N4 > N5 <..
Съставете програма, която проверява дали въведени в едномерен
масив редица от числа изпълняват горните изисквания.
Пример: 1 3 2 4 3 7
Изход: изпълнява изискванията за зигзагообразна нагоре редица
 */
echo "Please enter an array of numbers, separated by comma: ";
$inputArray = explode(',', trim(fgets(STDIN)));
$isZigzagged = true;

for ($i = 1; $i < count($inputArray) - 1; $i += 2) {
    if (!($inputArray[$i] > $inputArray[$i - 1] && $inputArray[$i] > $inputArray[$i + 1])) {
        $isZigzagged = false;
        break;
    }
}
if ($isZigzagged){
    echo "The array is zigzagged";
}
else {
    echo "The array is not zigzagged";
}