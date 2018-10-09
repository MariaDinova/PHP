<?php
/**
Високосни години са всички години кратни на 4 с изключения
столетията, но без столетия кратни на 400, т.е. 1900 не е високосна,
но 1600 и 2000 са високосни.
Съставете програма, която по дадени ден, месец, година отпечатва
следващата дата.
Входни данни: три числа за ден, месец, година.
 */
echo "Enter number for day: ";
$day = trim(fgets(STDIN));
echo "Enter number for month: ";
$month = trim(fgets(STDIN));
echo "Enter number for year: ";
$year = trim(fgets(STDIN));

while (
(intval($day) != floatval($day) || intval($month) != floatval($month) || intval($year) != floatval($year)) ||
($day < 1 || $day > 31 || $month < 1 || $month > 12 || $year < 0) ||
(($month == 4 || $month == 6 || $month == 9 || $month == 11) && $day > 30) ||
((($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) && $month == 2 && $day > 29) ||
($month == 2 && $day > 28)){
    echo "This is not valid date.";
    echo "Enter number for day: ";
    $day = trim(fgets(STDIN));
    echo "Enter number for month: ";
    $month = trim(fgets(STDIN));
    echo "Enter number for year: ";
    $year = trim(fgets(STDIN));
}

if ((($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) && $month == 2 && $day == 29) {
    $day = 1;
    $month++;
} else if (($year % 4 != 0 || $year % 400 != 0) && $month == 2 && $day == 28) {
    $day = 1;
    $month++;
} else if (($month == 4 || $month == 6 || $month == 9 || $month == 11) && $day == 30) {
    $day = 1;
    $month++;
} else if ($month == 12 && $day == 31) {
    $day = 1;
    $month = 1;
    $year++;
} else if ($day == 31) {
    $day = 1;
    $month++;
} else {
    $day++;
}
echo "The next date is $day-$month-$year.";