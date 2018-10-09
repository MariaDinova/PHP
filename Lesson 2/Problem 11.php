<?php
/**
Съставете програма, която по дадено трицифренo число проверява
дали числото се дели на всяка своя цифра. Във въведеното число да
няма цифра 0.
 */
echo "Enter 3-digit number without digit 0 in it: ";
$number = trim(fgets(STDIN));
$digit1 = intval($number / 100);
$digit2 = ($number / 10) % 10;
$digit3 = $number % 10;

while ($number < 100 || $number > 999 || $digit1 == 0 || $digit2 == 0 || $digit3 == 0){
    echo "This is not a valid number. Enter 3-digit number without digit 0 in it: ";
    $number = trim(fgets(STDIN));
    $digit1 = intval($number / 100);
    $digit2 = ($number / 10) % 10;
    $digit3 = $number % 10;
}
if ($number % $digit1 == 0){
    echo "The number $number is divisible by $digit1.\n";
}
else {
    echo "The number $number is not divisible by $digit1.\n";
}
if ($number % $digit2 == 0){
    echo "The number $number is divisible by $digit2.\n";
}
else {
    echo "The number $number is not divisible by $digit2.\n";
}
if ($number % $digit3 == 0){
    echo "The number $number is divisible by $digit3.\n";
}
else {
    echo "The number $number is not divisible by $digit3.\n";
}