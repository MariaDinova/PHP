<?php
/*
Да се състави програма, чрез която по въведено
естествено число от интервала [10..99] се извежда поредица
числа, при спазване на следните изисквания:
1) ако предходното число е нeчетно се извежда 0.5*числото;
2) ако предходното число е четно се извежда 3*числото +1.
Извеждането продължава докато не се получи стойност 1.
Пример: 11
Изход: 34 17 52 26 13 40 20 10 5 16 8 4 2 1.
 */
echo "Please enter an integer number between 10 and 99: ";
$num = trim(fgets(STDIN));
while (intval($num) != floatval($num) || $num < 10 || $num > 99){
    echo "Invalid input. Please enter integer number between 10 and 99: ";
    $num = trim(fgets(STDIN));
}

if ($num % 2 == 0){
    $res = 0.5 * $num;
}
else
    $res = 3 * $num + 1;

while ($res != 1) {

    if (($res - 1) % 2 == 0){
        $res = (3 * $res) + 1;
    }
    else {
        $res = 0.5 * $res;
    }
    echo "$res ";
}
