<?php
/*Въведете число N  и изкарайте като
резултат следния триъгълник с височина N:
        *
       ***
      *****
.................
Кaто допълнително упражнение – нарисувайте същия
триъгълник, но незапълнен.
 */

echo "Please enter an integer number, bigger than 1: ";
$n = trim(fgets(STDIN));
while (intval($n) != floatval($n) || $n < 2){
    echo "Invalid input. Please enter an integer number, bigger than 1: ";
    $n = trim(fgets(STDIN));
}


$rows = $n - 1;
$countSpace = $n * 2 + 1;
$countStars = 1;
$countDots = $n * 4 + 1;
$counterSpace = 2;
$counterStars = 1;
$counterDots = 1;
$midSpaces = 1;
$countMid = 1;
//triangle 1
/*
for ($j = 1; $j <=$rows ; $j++){
        while ($counterSpace <= $countSpace){
            echo " ";
            $counterSpace ++;
        }
        $counterSpace = 2;
        while ($counterStars <= $countStars){
            echo "*";
            $counterStars ++;
        }
        $counterStars = 1;
        while ($counterSpace <= $countSpace){
            echo " ";
            $counterSpace ++;
        }
        $counterSpace = 2;

    echo PHP_EOL;
    $countSpace --;
    $countStars += 2;
}
while ($counterDots <= $countDots){
    echo ".";
    $counterDots ++;
}
*/

// triangle 2
while ($counterSpace <= $countSpace){
    echo " ";
    $counterSpace ++;
}
$counterSpace = 2;

echo "*";

while ($counterSpace <= $countSpace){
    echo " ";
    $counterSpace ++;
}
$counterSpace = 2;
echo PHP_EOL;

for ($j = 1; $j <=$rows - 1; $j++){
    while ($counterSpace < $countSpace){
        echo " ";
        $counterSpace ++;
    }
    $counterSpace = 2;

    echo "*";

    while ($countMid <= $midSpaces){
        echo " ";
        $countMid ++;
    }
    $countMid = 1;

    echo "*";

    while ($counterSpace < $countSpace){
        echo " ";
        $counterSpace ++;
    }
    $counterSpace = 2;

    echo PHP_EOL;
    $countSpace --;
    $midSpaces += 2;
}
while ($counterDots <= $countDots){
    echo ".";
    $counterDots ++;
}
