<?php
/*
 Дадени са два едномерни масива с естествени числа.
Да се състави програма, която сравнява всички числа с еднакви
индекси от двата масива и записва в трети масив, по-голямото от
двете числа.
Да се изведе съдържанието и на трите масива
Пример:
18,19,32,1,3, 4, 5, 6, 7, 8
1, 2, 3,4,5,16,17,18,27,11
Изход:
18,19,32 ,4,5,16,17,18,27,11
 */
$arr1 = [18,19,32,1,3,4,5,6,7,8];
$arr2 = [1, 2, 3,4,5,16,17,18,27,11,12,13,14];
$resultArr = [];

if (count($arr1) == count($arr2)){
    for ($i = 0; $i < count($arr2); $i++){
        $resultArr[] = max($arr1[$i], $arr2[$i]);
    }
}
else {
    for ($i = 0; $i < max(count($arr1), count($arr2)); $i++){
        $resultArr[] = max(isset($arr1[$i]) ? $arr1[$i] : 0, isset($arr2[$i]) ? $arr2[$i] : 0);
    }
}

echo "The first array is: " . implode(',', $arr1).PHP_EOL;
echo "The second array is: " . implode(',', $arr2).PHP_EOL;
echo "The result array is: " . implode(',', $resultArr);
