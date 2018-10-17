<?php
/*
 Напишете програма, която първо чете 2 масива и после извежда
съобщение дали са еднакви, и дали са с еднакъв размер.
Въведете елементите на първия масив:
13,2,7
Въведете елементите на втория масив:
13,5,7
Масивите са различни.
Масивите имат еднакъв размер.
 */
echo "Please enter the elements for First array: ";
$firstArray = explode(',', trim(fgets(STDIN)));
echo "Please enter the elements for Second array: ";
$secondArray = explode(',', trim(fgets(STDIN)));

if ($firstArray == $secondArray){
    echo "The arrays are equal.".PHP_EOL;
}
else {
    echo "The arrays are not equal.".PHP_EOL;
}

if (count($firstArray) == count($secondArray)){
    echo "The arrays have equal size.".PHP_EOL;
}
else {
    echo "The arrays don't have equal size.".PHP_EOL;
}