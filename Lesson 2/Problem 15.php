<?php
/**
Да се състави програма, която въвежда естествено число от интервала
[0..24].
Програма да изведе съответстващо съобщение съобразно въведения
час.
Периодите са:
[18..4] - Добър вечер;
[4..9] - Добро утро;
[9..18] - Добър ден
 */
echo "Enter a number for hour (integer in range 0 to 24): ";
$hour = trim(fgets(STDIN));

while ($hour < 0 || $hour > 24 || intval($hour) != floatval($hour)){
    echo "This is not valid input. Enter a number for hour (integer in range 0 to 24): ";
    $hour = trim(fgets(STDIN));
}
if ($hour > 4 && $hour <= 9){
    echo "Good morning";
}
else if ($hour > 9 && $hour <= 18){
    echo "Good afternoon";
}
else {
    echo "Good evening";
}