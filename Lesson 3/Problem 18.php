<?php
/*
 Да се състави програма, чрез която се въвежда две числа от
интервала [1..9].
Програмата да извежда таблицата за умножение.
Максималната стойност на множителите е определена от 2-те
числа.
Пример: 2 2
Изход:
1*1= 1;
1*2= 2;
2*1= 2;
2*2= 4;
 */
echo "Please enter integer number between 1 and 9: ";
$num1 = trim(fgets(STDIN));
while (intval($num1) != floatval($num1) || $num1 < 1 || $num1 > 9){
    echo "Invalid input. Please enter integer number between 1 and 9: ";
    $num1 = trim(fgets(STDIN));
}
echo "Please enter integer number between 1 and 9: ";
$num2 = trim(fgets(STDIN));
while (intval($num2) != floatval($num2) || $num2 < 1 || $num2 > 9){
    echo "Invalid input. Please enter integer number between 1 and 9: ";
    $num2 = trim(fgets(STDIN));
}
for ($i = 1; $i <= $num1; $i++){
    for ($j = 1; $j <= $num2; $j++){
        $res = $i * $j;
        echo "$i*$j = $res\n";
    }
}