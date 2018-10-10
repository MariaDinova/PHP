<?php
//Започвайки от 3, да се изведат на екрана първите n числа които се делят на 3. Числата да са разделени със запетая.
echo "Please enter a positive integer number: ";
$n = trim(fgets(STDIN));
while (intval($n) != floatval($n) || $n < 1){
    echo "Invalid input. Please enter a positive integer number: ";
    $n = trim(fgets(STDIN));
}
for ($i = 3; $i <= $n * 3; $i+=3){
    if ($i != 3){
        echo ", ";
    }
    echo $i;
}