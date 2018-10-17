<?php
/*
 Нека по въведен масив да се конструира нов, като половината му
елементи са точно като на оригиналния, а другите да са тези
елементи, но в обратен ред. Последно, да се изведе новия масив
на екрана.
input:
5,2,5,8,3
output:
5 2 5 8 3 3 8 5 2 5
 */
$input = trim(fgets(STDIN));
$arr1 = explode(',', $input);
$arrRev = array_reverse($arr1);
$result = array_merge($arr1, $arrRev);
foreach ($result as $item) {
    echo $item . " ";
}
