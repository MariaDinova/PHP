<?php
/**
Да се състави програма, която получава от конзолата 4-цифренo
естествено число от интервала [1000.. 9999]. От това число се
формират 2 нови 2-цифрени числа. Първото число се формира от 1-та
и 4-та цифра на въведеното число. Второто число се формира от 2-рa -
3-та цифра на въведеното число. Като резултат да се изведе дали 1-то
ново число e по-малко <, равно = или по-голямо от 2-то число.
 */
echo "Please enter 4-digit number (integer in range 1000 to 9999): ";
$number = trim(fgets(STDIN));
while ($number < 1000 || $number > 9999 || intval($number) != floatval($number)){
    echo "This is not a valid number. Please enter 4-digit number (integer in range 1000 to 9999): ";
    $number = trim(fgets(STDIN));
}
$digit1 = intval($number / 1000);
$digit2 = ($number / 100) % 10;
$digit3 = ($number / 10) % 10;
$digit4 = $number  % 10;

$firstNum = $digit1.$digit4;
$secondNum = $digit2.$digit3;

if ($firstNum < $secondNum){
    echo "smaller ($firstNum < $secondNum)";
}
else if ($firstNum == $secondNum){
    echo "equal ($firstNum = $secondNum)";
}
else {
    echo "bigger ($firstNum > $secondNum)";
}
