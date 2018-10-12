<?php
/**
Едно число X е палиндром, aко се чете еднакво отпред назад и
отзад напред.
Да се състави програма, която проверява дали въведено число е
палиндром.
Входни данни: N - естествено число от интервала [10 .. 30000].
Пример: 17571
Изход: числото е палиндром
Използвайте цикъл do-while.
 */
echo "Please enter an integer number between 10 and 30000: ";
$n = trim(fgets(STDIN));
while (intval($n) != floatval($n) || $n < 10 || $n > 30000){
    echo "Invalid input. Please enter an integer number between 10 and 30000: ";
    $n = trim(fgets(STDIN));
}

$number = $n;
do {
    $temp = $number % 10;
    $result = $result * 10 + $temp;
    $number = ($number - $temp) / 10;
}
while ($number > 0);

if ($n == $result){
    echo "The number is palindrome";
}
else {
    echo "The number is not palindrome";
}