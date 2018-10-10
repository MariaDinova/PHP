<?php
/*По зададено число n, да се изведе на екрана таблица по
следния начин:
input : 3
output:
222
444
666
 */
echo "Please enter a positive integer number: ";
$n = trim(fgets(STDIN));
while (intval($n) != floatval($n) || $n < 1){
    echo "Invalid input. Please enter a positive integer number: ";
    $n = trim(fgets(STDIN));
}
$num = $n - 1;
for ($row = 1; $row <= $n; $row++){
    for ($col = 1; $col <= $n; $col++){
        echo $num;
    }
    echo PHP_EOL;
    $num += 2;
}