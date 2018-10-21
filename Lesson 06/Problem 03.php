<?php
/*
 Имате двумерен масив от числа, чийто стойности са въведени
предварително. Да се отпечатат сумата на елементите на масива,
както и средноаритметичното на тези числа.
 */
$input = [
    [1,2,3,4,5,1,2],
    [6,7,8,9,10],
    [11,12,13,14,15]
];
$sum = 0;
$counter = 0;
for ($rows = 0; $rows < 3; $rows++){
    for ($cols = 0; $cols < count($input[$rows]); $cols++){
        $sum += $input[$rows][$cols];
        $counter ++;
    }
}
$average = $sum / $counter;

echo "The sum of numbers is $sum and the average is $average";