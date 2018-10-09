<?php
/**
Въведете 2 различни целочислени числа от конзолата. Запишете
тяхната сума, разлика, произведение, остатък от деление и
целочислено деление в отделни променливи и разпечатайте тези
резултати.
 */
echo "Please enter the first number (positive integer number): ";
$firstNum = trim(fgets(STDIN));

while ($firstNum < 0 || intval($firstNum) != floatval($firstNum)){
    echo "This is not a valid input. Please enter positive integer number: ";
    $firstNum = trim(fgets(STDIN));
}

echo "Please enter the second number (positive integer number): ";
$secondNum = trim(fgets(STDIN));
while ($secondNum < 0 || intval($secondNum) != floatval($secondNum)){
    echo "This is not a valid input. Please enter positive integer number: ";
    $secondNum = trim(fgets(STDIN));
}

$sum = $firstNum + $secondNum;
$diff = abs($firstNum - $secondNum);
$product = $firstNum * $secondNum;

if ($firstNum > $secondNum){
    $divided = intval($firstNum / $secondNum);
    $mod = $firstNum % $secondNum;
}
else {
    $divided = intval($secondNum / $firstNum);
    $mod = $secondNum % $firstNum;
}


echo "The result of addition is $sum. 
The result of subtraction is $diff. 
The result of multiplication is $product. 
The result of modulus is $mod. 
The result of division is $divided.";
