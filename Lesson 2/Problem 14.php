<?php
/**
Да се състави програма, която по въведени координати на 2 позиции
от шахматната дъска извежда отговор дали са оцветени в еднакъв или
различен цвят.
Шахматната дъска е квадратна.
Въвеждат се две двойки числа от интервала [1..8].
 */
echo "Enter x coordinate (integer in range 1 to 8): ";
$x = trim(fgets(STDIN));
while ($x < 1 || $x > 8 || intval($x) != floatval($x)){
    echo "This is not a valid coordinate. Enter x coordinate (integer in range 1 to 8): ";
    $x = trim(fgets(STDIN));
}

echo "Enter y coordinate (in range 1 to 8): ";
$y = rtrim(fgets(STDIN));
while ($y < 1 || $y > 8|| intval($y) != floatval($y)){
    echo "This is not a valid coordinate. Enter y coordinate (integer in range 1 to 8): ";
    $y = trim(fgets(STDIN));
}

echo "Enter x1 coordinate (integer in range 1 to 8): ";
$x1 = trim(fgets(STDIN));
while ($x1 < 1 || $x1 > 8|| intval($x1) != floatval($x1)){
    echo "This is not a valid coordinate. Enter x1 coordinate (integer in range 1 to 8): ";
    $x1 = trim(fgets(STDIN));
}

echo "Enter y1 coordinate (integer in range 1 to 8): ";
$y1 = trim(fgets(STDIN));
while ($y1 < 1 || $y1 > 8|| intval($y1) != floatval($y1)){
    echo "This is not a valid coordinate. Enter y1 coordinate (in range 1 to 8): ";
    $y1 = trim(fgets(STDIN));
}

if (($x + $y) % 2 == 0 && ($x1 + $y1) % 2 == 0){
    echo "The positions are of the same color";
}
else {
    echo "The positions are not of the same color";
}