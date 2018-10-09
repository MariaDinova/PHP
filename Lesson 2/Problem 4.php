<?php
/**
Въведете 2 различни числа от конзолата и ги разпечатайте в
нарастващ ред.
 */
echo "Please enter the first number: ";
$num1 = trim(fgets(STDIN));
echo "Please enter the second number: ";
$num2 = trim(fgets(STDIN));

if ($num1 < $num2){
    echo "$num1 $num2";
}
else {
    echo "$num2 $num1";
}