<?php
/*Да се прочетат 2 числа от клавиатурата А и В.
Да се изведат всички числа от А до В на степен 2(разделени с
запетая).Ако някое число е кратно на 3, да се изведе съобщение че
числото се пропуска „skip 3“.Ако сумата от всички изведени числа (без
пропуснатите) стане по-голяма от 200, да се прекрати извеждането.
input: 1   107
output: 1, 4, skip 3, 16, 25, skip 6, 49, 64, skip 9, 100
 */
echo "Please enter the first integer number: ";
$A = trim(fgets(STDIN));
while (intval($A) != floatval($A)){
    echo "Invalid input. Please enter an integer number: ";
    $A = trim(fgets(STDIN));
}
echo "Please enter the second integer number: ";
$B = trim(fgets(STDIN));
while (intval($B) != floatval($B)){
    echo "Invalid input. Please enter an integer number: ";
    $B = trim(fgets(STDIN));
}
$sum = 0;
for ($i = $A; $i <= $B; $i++){
    $res = $i * $i;
    if ($i != $A){
        echo ", ";
    }
    if ($res % 3 == 0){
        echo "skip $i";
    }
    else {
        echo $res;
        $sum += $res;
    }
    if ($sum > 200){
        break;
    }
}