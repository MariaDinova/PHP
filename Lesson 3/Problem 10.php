<?php
//Въведете число от клавиатурата и определете дали е просто. Просто число е това което се дели САМО на 1 и на себе си.
echo "Please enter an integer number: ";
$num = trim(fgets(STDIN));
while (intval($num) != floatval($num)){
    echo "Invalid input. Please enter an integer number: ";
    $num = trim(fgets(STDIN));
}
$isPrime = true;
if ($num < 2){
    $isPrime = false;
}
for ($i = 2; $i <= $num / 2; $i++){
    if($num % $i == 0){
        $isPrime = false;
    }
}
if ($isPrime){
    echo "The number is prime";
}
else {
    echo "The number is not prime";
}
