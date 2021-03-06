<?php
/*
 Имате двумерен масив 6х5 от естествени числа, чийто стойности са
въведени предварително.
Да се състави програма, чрез която се извеждат елементите от масива
с най-малката и най-голямата стойност.
Пример:
48,72,13,14,15
21,22,53,24,75
31,57,33,34,35
41,95,43,44,45
59,52,53,54,55
61,69,63,64,65
Изход:
най-малко 13;
най-голямо 95
 */
$input = [
    [48,72,13,14,15],
    [21,22,53,24,75],
    [31,57,33,34,35],
    [41,95,43,44,45],
    [59,52,53,54,55],
    [61,69,63,64,65]
];
$maxNum = $input[0][0];
$minNum = $input[0][0];

for ($i = 0; $i < 6; $i++){
    for ($j = 0; $j < 5; $j++){
        if ($input[$i][$j] > $maxNum){
            $maxNum = $input[$i][$j];
        }
        if ($input[$i][$j] < $minNum){
            $minNum = $input[$i][$j];
        }
    }
}
echo "The smallest number is $minNum".PHP_EOL;
echo "The biggest number is $maxNum".PHP_EOL;
