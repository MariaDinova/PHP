<?php
/*
 Да се прочете масив и да се намери най-малкото число кратно на
3 от масива.
 */
$input = trim(fgets(STDIN));
$numbers = explode(',', $input);
asort($numbers);
foreach ($numbers as $number) {
    if ($number % 3 == 0){
        echo $number;
    }
    break;
}