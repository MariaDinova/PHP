<?php
//Да се прочете число от екрана(конзолата) и да се изведе сбора на всички числа между 1 и въведеното число.
echo "Please enter a positive integer number: ";
$num = trim(fgets(STDIN));
while (intval($num) != floatval($num) || $num < 1){
    echo "Invalid input. Please enter a positive integer number: ";
    $num = trim(fgets(STDIN));
}
$sum = 0;
for ($i = 1; $i <= $num; $i++){
    $sum += $i;
}
echo $sum;