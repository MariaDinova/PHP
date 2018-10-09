<?php
/**
Въведете 3 различни числа от конзолата и ги разпечатайте в низходящ
ред.
 */
echo "Please enter the first number: ";
$num1 = trim(fgets(STDIN));
echo "Please enter the second number: ";
$num2 = rtrim(fgets(STDIN));
echo "Please enter the third number: ";
$num3 = trim(fgets(STDIN));

if ($num1 > $num2 && $num2 > $num3){
    echo "$num1 $num2 $num3";
}
else if ($num1 > $num3 && $num3 > $num2){
    echo "$num1 $num3 $num2";
}
else if ($num2 > $num1 && $num1 > $num3){
    echo "$num2 $num1 $num3";
}
else if ($num2 > $num3 && $num3 > $num1){
    echo "$num2 $num3 $num1";
}
else if ($num3 > $num1 && $num1 > $num2){
    echo "$num3 $num1 $num2";
}
else if ($num3 > $num2 && $num2 > $num1){
    echo "$num3 $num2 $num1";
}