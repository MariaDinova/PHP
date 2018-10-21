<?php
/*
 Да се състави програма, при която предварително са въведени
естествени числа в двумерен масив 4*4 елемента.
Програмата да извежда резултат от проверката какво е съотношението
на най-голямата сума по редове спрямо най-голямата сума по колони.
Пример:
1,2,3,4
5,6,7,8
9,10,11,12
13,14,15,16
Изход:
най-голяма сума по редове 58
най-голяма сума по колони 40
Максималната сума по редове е > от максималната сума по колони
 */
$matrix = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12],
    [13,14,15,16]
];
$maxSumRows = 0;
$sumRow = 0;
$maxSumCols = 0;
$sumCol = 0;

for ($row = 0; $row < 4; $row++){
    $sumRow = array_sum($matrix[$row]);
    if ($sumRow > $maxSumRows){
        $maxSumRows = $sumRow;
    }
}

for ($col = 0; $col < 4; $col++){
    $sumCol = 0;
    for ($i = 0; $i < 4; $i++){
        $sumCol += $matrix[$i][$col];
    }
    if ($sumCol > $maxSumCols){
        $maxSumCols = $sumCol;
    }
}
echo "The biggest sum by rows is $maxSumRows\nThe biggest sum by columns is $maxSumCols\n";

echo $maxSumRows > $maxSumCols ?  "The biggest sum by rows is > than the biggest sum by columns" :
    "The biggest sum by columns is > than the biggest sum by rows";
