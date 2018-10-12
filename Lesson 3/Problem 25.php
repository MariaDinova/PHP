<?php
/**
Да се направи програма, която по дадено число N, да изчислява
N!, т.е. 1*2*3*4...*N.
Пример: 5
Изход: 120
Използвайте цикъл do-while.
 */
echo "Please enter a positive integer number: ";
$n = trim(fgets(STDIN));
while (intval($n) != floatval($n) || $n < 1){
    echo "Invalid input. Please enter a positive integer number: ";
    $n = trim(fgets(STDIN));
}

$num = 1;
$result = 1;
do {
    $result *= $num;
    $num++;
}
while ($num <= $n);
echo $result;