<?php
/**
Трябва да се напълни цистерна с вода. Имате 2 кофи с вместимост 2 и
3 литра и ги ползвате едновременно.
Да се състави програма, която по даден обем извежда как ще прелеете
течността с тези кофи, т.е. по-колко пъти ще се пълни всяка от
кофите.
Входни данни: естествено число от интервала [10..9999].
 */
echo "Enter the capacity of the cistern (integer in range 10 to 9999): ";
$capacity = trim(fgets(STDIN));

while ($capacity < 10 || $capacity > 9999 || intval($capacity) != floatval($capacity)){
    echo "This is not a valid capacity (The capacity must be integer in range from 10 to 9999). Enter the capacity of the cistern:  ";
    $capacity = trim(fgets(STDIN));
}

$buckets2Need = intval($capacity / 5);
$buckets3Need = intval($capacity / 5);
$remain = $capacity - ($buckets2Need * 5);

if ($remain == 1){
    $buckets2Need --;
    $buckets3Need ++;
}
else if ($remain == 2){
    $buckets2Need ++;
}
else if ($remain == 3){
    $buckets3Need ++;
}
else if ($remain == 4){
    $buckets2Need += 2;
}
echo "$buckets2Need buckets of 2 liters and $buckets3Need buckets of 3 liters";