<?php
/*
 Да се прочете масив и да се отпечата дали е огледален.
Следните масиви са огледални:
[3 7 7 3]
[4]
[1 55 1]
[6 27 -1 5 7 7 5 -1 27 6]
Въведете размер за масива: 5
Въведете 1-я елемент:
10
Въведете 2-я елемент:
66
Въведете 3-я елемент:
1
Въведете 4-я елемент:
66
Въведете 5-я елемент:
10
Масива е огледален
 */
echo "Enter the array size: ";
$arrCount = intval(trim(fgets(STDIN)));
for ($i = 1; $i <= $arrCount; $i++){
    echo "Enter array's element for position $i: ";
    $array [$i - 1] = trim(fgets(STDIN));
}
if ($arrCount % 2 == 0){
    $array1 = array_slice($array, 0, $arrCount / 2);
    $revArr = array_reverse(array_slice($array, (($arrCount - 1) / 2) + 1));
}
 else {
    $array1 = array_slice($array, 0, ($arrCount - 1) / 2);
    $revArr = array_reverse(array_slice($array, $arrCount / 2 + 1));
 }

 if ($array1 == $revArr){
    echo "The array is mirrored";
 }
 else {
     echo "The array is not mirrored";
 }