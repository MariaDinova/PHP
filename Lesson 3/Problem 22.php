<?php
/*
 Да се състави програма, която извежда първите 10 най-малки
числа, които се делят на 2, 3 или на 5 и които са по-големи от
въведено естествено число.
Числата се извеждат, заедно с техния пореден номер.
Входни данни: число от интервала [1..999]
Пример: 1
Изход: 1:2; 2:3, 3:4, 4:5, 5:6, 6:8, 7:9, 8:10, 9:12, 10:14
 */
echo "Please enter integer number bigger than 1: ";
$n = trim(fgets(STDIN));
while (intval($n) != floatval($n) || $n < 1){
    echo "Invalid input. Please enter integer number bigger than 1: ";
    $n = trim(fgets(STDIN));
}

$i = 1;
while ($i <= 10){

    if ($n % 2 == 0 || $n % 3 == 0 ||$n % 5 == 0) {

        echo "$i:$n ";
        $i++;
    }
    $n++;
}