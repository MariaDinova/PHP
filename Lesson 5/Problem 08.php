<?php
/*
 Напишете програма, която намира и извежда най-дългата редица от
еднакви поредни елементи в даден масив.
Въведете елементите на масива:
2,1,1,2,3,3,2,2,2,1
Максималната редица е: 2 2 2
 */
echo "Please enter the elements for array: ";
$inputArray = explode(',', trim(fgets(STDIN)));

$bestNum = $inputArray [0];
$maxLength = 1;
$currentLength = 1;

for ($i = 0; $i < count($inputArray) - 1; $i++){
    if ($inputArray[$i] == $inputArray[$i + 1]){
        $currentLength ++;
        if ($currentLength > $maxLength){
            $maxLength = $currentLength;
            $bestNum = $inputArray[$i];
        }
    }
    else{
        $currentLength = 1;
    }
}
echo str_repeat("$bestNum ", $maxLength);
