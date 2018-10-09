<?php
/**
Въведете 3 числа от конзолата - а1, а2 и а3. Разменете стойностите им
така, че а1 да има стойността на а2, а2 да има стойността на а3, а а3
да има старата стойност на а1.
 */
echo "Please enter the first number: ";
$a1 = trim(fgets(STDIN));
echo "Please enter the second number: ";
$a2 = trim(fgets(STDIN));
echo "Please enter the third number: ";
$a3 = trim(fgets(STDIN));

$temp = $a1;
$a1 = $a2;
$a2 = $a3;
$a3 = $temp;

echo "$a1 $a2 $a3";
