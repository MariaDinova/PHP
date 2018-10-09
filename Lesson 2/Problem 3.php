<?php
/**
Създайте 2 променливи с различни стойности в даден PHP скрипт.
Измислете начин програмно да размените стойностите им.
Разпечатайте новите стойности.
 */
echo "Please enter the first variable: ";
$firstVar = trim(fgets(STDIN));
echo "Please enter the second variable: ";
$secondVar2 = trim(fgets(STDIN));

$temp = $firstVar;
$firstVar = $secondVar2;
$secondVar2 = $temp;

echo "After exchange variables are:
    fist variable = $firstVar
    second variable = $secondVar2";