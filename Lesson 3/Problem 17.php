<?php
/*
 Да се състави програма, която извежда квадрат, чийто страни са
оформени със знака *, а вътрешността е запълнена със въведен
знак.
Входни данни b - дължина на страната число от интервала
[3..20], c - желан знак.
Програмата да използва цикъл for.
Пример: 4 +
Изход:
****
*++*
*++*
****
 */
echo "Please enter a number for square side (integer between 3 and 20): ";
$squareSide = trim(fgets(STDIN));
while (intval($squareSide) != floatval($squareSide) || $squareSide < 3 || $squareSide > 5555){
    echo "Invalid input. Please enter a number for square side (integer between 3 and 20): ";
    $squareSide = trim(fgets(STDIN));
}
echo "Please enter some sign: ";
$sign = trim(fgetc(STDIN));

$counterStars = 1;
$signCounter = 1;
while ($counterStars <= $squareSide){
    echo "*";
    $counterStars ++;
}
$counterStars = 1;
echo PHP_EOL;

for ($i = 1; $i <= $squareSide - 2; $i++){
    echo "*";
    while ($signCounter <= $squareSide -2){
        echo $sign;
        $signCounter ++;
    }
    $signCounter = 1;
    echo "*";
    echo PHP_EOL;
}

while ($counterStars <= $squareSide){
    echo "*";
    $counterStars ++;
}
$counterStars = 1;