<?php
/**
Да се поиска от потребителя да въведе 3 числа A, В и С (може да са с
плаваща запетая) от конзолата.
Да се изведе подходящо съобщение за това дали C е между A и B.
 */
echo "Please enter the first number: ";
$a = trim(fgets(STDIN));
echo "Please enter the second number: ";
$b = trim(fgets(STDIN));
echo "Please enter the third number: ";
$c = trim(fgets(STDIN));


if ($c > $a && $c < $b) {
    echo "The number $c is between $a and $b.";
}
else if ($c < $a && $c > $b) {
    echo "The number $c is between $b and $a.";
}
else {
    echo "The number $c is not between $a and $b.";
}
