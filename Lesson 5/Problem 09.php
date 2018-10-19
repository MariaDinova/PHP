<?php
/*
 Напишете програма, в която потребителя въвежда масив, след което
елементите на масива се обръщат в обратен ред (Целта не е масива да
се отпечата в обратен ред, ами първо да се обърне, след което да се
отпечата в нормален ред). Пробвайте да решите задачата първо с един
допълнителен масив и после без да използвате друг масив.
Пример:
Въведете елементите на масива:
2,3,7,-5
-5 7 3 2
 */
echo "Please enter the elements for array: ";
$inputArray = explode(',', trim(fgets(STDIN)));
$revArray = [];
//reverse with another array
//for ($i = count($inputArray) - 1; $i >= 0; $i--){
//   $revArray[] = $inputArray [$i];
//}
//echo implode(',',$revArray);

//reverse without another array
$temp = $inputArray[0];
$inputArray[0] = $inputArray[count($inputArray)- 1];
$inputArray[count($inputArray)- 1] = $temp;

for ($i = 1; $i < (count($inputArray)- 1) / 2; $i++){
    $temp = $inputArray[$i];
    $inputArray[$i] = $inputArray[(count($inputArray)- 1) - $i];
    $inputArray[(count($inputArray)- 1) - $i] = $temp;
}

echo implode(',',$inputArray);