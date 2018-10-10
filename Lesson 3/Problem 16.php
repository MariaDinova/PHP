<?php
/*
Да се състави програма, чрез която се въвеждат 2 естествени
числа N, M от интервала [10..5555].
Програмата, чрез цикъл for, да извежда всички числа от
интервала, които са кратни на 50 в низходящ ред.
Пример: 25,249
Изход: 200,150,100, 50.
 */
echo "Please enter first integer number between 10 and 5555: ";
$N = trim(fgets(STDIN));
while (intval($N) != floatval($N) || $N < 10 || $N > 5555){
    echo "Invalid input. Please enter integer number between 10 and 5555: ";
    $N = trim(fgets(STDIN));
}
echo "Please enter second integer number between 10 and 5555: ";
$M = trim(fgets(STDIN));
while (intval($M) != floatval($M) || $M < 10 || $M > 5555){
    echo "Invalid input. Please enter integer number between 10 and 5555: ";
    $M = trim(fgets(STDIN));
}
for ($i = max($N, $M); $i >= min($N, $M); $i--){
    if ($i % 50 == 0){
        echo $i.PHP_EOL;
    }
}