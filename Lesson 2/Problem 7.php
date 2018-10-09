<?php
/**
Въведете 3 променливи от конзолата – час, сума пари, дали съм здрав
– число със стойност да или не.
Съставете програма, която взема решения на базата на тези данни по
следния начин:
- ако съм болен няма да излизам
- ако имам пари ще си купя лекарства
- ако нямам – ще стоя вкъщи и ще пия чай
- ако съм здрав ще изляза на кино с приятели
- ако имам по-малко от 10 лв ще отида на кафе
 */
echo "Please enter the time: ";
$time = trim(fgets(STDIN));
echo "Please enter the count of money: ";
$money = trim(fgets(STDIN));
echo "Am I healthy (yes or no): ";
$healthy = trim(fgets(STDIN));
while (true){
    if ($healthy == "yes" || $healthy == "no"){
        break;
    }
    else {
        echo "This is not a correct input. Please enter 'yes' or 'no': ";
        $healthy = trim(fgets(STDIN));
    }
}
if ($healthy == "yes"){
    if ($money < 10){
        echo "I am healthy and I will go to coffee";
    }
    else {
        echo "I am healthy and I will go to cinema with friends";
    }
}
else {
    if ($money > 0){
        echo "I am sick and will buy medications";
    }
    else {
        echo "I am sick and will stay at home and drink tea";
    }
}
