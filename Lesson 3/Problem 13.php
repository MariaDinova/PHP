<?php
/*Да се състави програма, която извежда всички
естествени трицифрени числа, които имат сбор на цифрите равен
на дадено число.
Дадено : sum, където 2>=sum<=27.
Пример: 26
Изход: 899, 989, 998.
 */
echo "Please enter integer number between 2 and 27: ";
$sum = trim(fgets(STDIN));
while (intval($sum) != floatval($sum) || $sum < 2 || $sum > 27){
    echo "Invalid input. Please enter integer number between 2 and 27: ";
    $sum = trim(fgets(STDIN));
}
for ($i = 100; $i <= 999; $i++){
    $digit1 = intval($i / 100);
    $digit2 = ($i / 10) % 10;
    $digit3 = $i % 10;
    if ($digit1 + $digit2 + $digit3 == $sum){
        echo $i.PHP_EOL;
    }
}