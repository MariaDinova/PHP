<?php
// Да се въведат от потребителя 2 числа. И да се изведат на екрана всички числа от по-малкото до по-голямото.
echo "Please enter the first integer number: ";
$num1 = trim(fgets(STDIN));
while (intval($num1) != floatval($num1)){
    echo "Invalid input. Please enter an integer number: ";
    $num1 = trim(fgets(STDIN));
}
echo "Please enter the second integer number: ";
$num2 = trim(fgets(STDIN));
while (intval($num2) != floatval($num2)){
    echo "Invalid input. Please enter an integer number: ";
    $num2 = trim(fgets(STDIN));
}
for ($i = min($num1, $num2); $i <= max($num1, $num2); $i++){
    echo "$i ";
}