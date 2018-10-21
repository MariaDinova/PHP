<?php
/*
 Една квадратна таблица от числа се нарича магически квадрат, когато е изпълнено следното условие:
всички суми, получени поотделно от сбора на елементите по всеки ред/всеки стълб/всеки от двата диагонала са равни.
Да се състави програма, която въвежда естествени числа от интервала [1..20] в дадена квадратна таблица и
определя дали те образуват магически квадрат.
Пример:
16,3,2,13
5,10,11,8
9,6,7,12
4,15,14,1
Изход: магически квадрат, сума по редове и колони 34
 */
$matrix = [
    [2,7,6],
    [9,5,1],
    [4,3,8]
];
$sum = array_sum($matrix[0]);
$sumDiagonal1 = 0;
$sumDiagonal2 = 0;
$isMagic = true;

for ($cols = 0; $cols < count($matrix); $cols++){
    $sumCols = 0;
    for ($rows = 0; $rows < count($matrix); $rows++){
        $sumCols += $matrix[$rows][$cols];
//rows
        if (array_sum($matrix[$rows]) != $sum){
            $isMagic = false;
        }
//diagonals
        if ($rows == $cols){
            $sumDiagonal1 += $matrix[$rows][$cols];
        }
        else if ($rows + $cols == count($matrix) - 1){
            $sumDiagonal2 += $matrix[$rows][$cols];
        }
    }
    //check cols
    if ($sumCols != $sum){
        $isMagic = false;
    }
}


if ($sumDiagonal1 != $sum || $sumDiagonal2 != $sum){
    $isMagic = false;
}
if ($isMagic){
    echo "The square is magic. Sum by rows, columns and diagonal is $sum.";
}
else {
    echo "The square is not magic.";
}
