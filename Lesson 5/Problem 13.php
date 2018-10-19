<?php
/*
 Да се състави програма, чрез която се въвежда число и се представя
като число в двоична бройна система.
Програмата, чрез масив, да изчислява последователно всички цифри
на въведеното естествено число в 2-ична бройна система.
Пример: 99
Изход: 1100011
 */
echo "Please enter a number: ";
$num = intval(trim(fgets(STDIN)));
$binNum =[];

do {
    $binNum[] = $num % 2;
    $num = intval($num / 2);
}
while ($num > 0);
$binNum = array_reverse($binNum);
echo implode('', $binNum);
