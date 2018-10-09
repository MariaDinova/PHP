<?php
/**
Въведено е трицифрено естествено число от вида abc.
Трябва да се провери дали:

ако a = b = c - Изход: цифрите са равни;
ако a>b>c - Изход: цифрите са във възходящ ред;
ако a<b<c цифрите са в низходящ ред;
и изход: цифрите са ненаредени, за неописаните случаи.
Да се състави програма, която извежда резултата от проверката за
наредба на цифрите в числото.
 */
echo "Enter 3-digit integer number (in range 100 to 999): ";
$number = trim(fgets(STDIN));

while ($number < 100 || $number > 999 || intval($number) != floatval($number)){
    echo "This is not a valid number. Enter 3-digit integer number (in range 100 to 999): ";
    $number = trim(fgets(STDIN));
}
$digit1 = intval($number / 100);
$digit2 = ($number / 10) % 10;
$digit3 = $number % 10;

if ($digit1 == $digit2 && $digit2 == $digit3){
    echo "Equal";
}
else if ($digit1 > $digit2 && $digit2 > $digit3){
    echo "Descending order";
}
else if ($digit1 < $digit2 && $digit2 < $digit3){
    echo "Ascending order";
}
else {
    echo "Unordered";
}