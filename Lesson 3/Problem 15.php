<?php
/*
 Да се състави програма, която да изчисли сумата на всички
числа от 1 до въведено число N.
 */
echo "Please enter integer number bigger than 1: ";
$N = trim(fgets(STDIN));
while (intval($N) != floatval($N) || $N < 1){
    echo "Invalid input. Please enter integer number bigger than 1: ";
    $N = trim(fgets(STDIN));
}
$sum = 0;
$numbers = 1;

do {
    $sum += $numbers;
    $numbers ++;
}
while ($numbers <= $N);

echo $sum;