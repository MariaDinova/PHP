<?php
/*
Да се състави програма, която по въведено
естествено число N от интервала [10..200] извежда в обратен
ред всички числа, които са кратни на 7 и са по-малки от N.
 */
echo "Please enter integer number between 10 and 200: ";
$N = trim(fgets(STDIN));
while (intval($N) != floatval($N) || $N < 10 || $N > 200){
    echo "Invalid input. Please enter integer number between 10 and 200: ";
    $N = trim(fgets(STDIN));
}
for ($i = $N; $i >= 7; $i--){
    if ($i % 7 == 0 && $i < $N){
        echo $i.PHP_EOL;
    }
}