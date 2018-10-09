<?php
/**
Да се състави програма, която получва от конзола 2 естествени
двуцифрени числа a,b.
Програмата да изведе съобщение дали последната цифра от
произведението на двете числа е четна, както и самата цифра.
Входни данни: a,b - естествени числа от интервала [10..99].
 */
echo "Please enter first 2-digit number (integer in range 10 to 99): ";
$num1 = trim(fgets(STDIN));
while ($num1 < 10 || $num1 > 99 || intval($num1) != floatval($num1)){
    echo "This is not a valid number. Please enter 2-digit number (integer in range 10 to 99): ";
    $num1 = trim(fgets(STDIN));
}

echo "Please enter second 2-digit number (integer in range 10 to 99): ";
$num2 = rtrim(fgets(STDIN));
while ($num2 < 10 || $num2 > 99 || intval($num1) != floatval($num1)){
    echo "This is not a valid number. Please enter 2-digit number (integer in range 10 to 99): ";
    $num2 = trim(fgets(STDIN));
}

$product = $num1 * $num2;
$checkNum = $product % 10;
if ($checkNum % 2 == 0){
    echo " $product, $checkNum even";
}
else {
    echo " $product, $checkNum odd";
}
