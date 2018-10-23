<?php
/*
 Имате квадратен двумерен масив от естествени числа, чийто стойности
се въвеждат от конзолата. Да се отпечатат диагоналите на масива....
Пример:
1,4,6,3
5,9,7,2
4,8,1,9
2,3,4,5
Изход:
1 9 1 5
3 7 8 2
 */
echo "Enter the size of matrix: ";
$matrixSize = intval(trim(fgets(STDIN)));
$matrix = [];
$firstDiagonal = [];
$secondDiagonal = [];
for ($i = 0; $i < $matrixSize; $i++){
    echo "Enter the numbers for the row ".($i + 1).", separated by comma: ";
    $matrix [$i] = explode(',', trim(fgets(STDIN)));
}
for ($row = 0; $row < $matrixSize; $row++){
    for ($col = 0; $col < $matrixSize; $col++){
        if ($row == $col){
            $firstDiagonal[] = $matrix[$row][$col];
        }
        if ($row + $col == $matrixSize - 1){
            $secondDiagonal [] = $matrix[$row][$col];
        }
    }
}
echo implode(' ', $firstDiagonal).PHP_EOL;
echo implode(' ', $secondDiagonal).PHP_EOL;