<?php
/**
Да се състави програма, която да отгатне колко е студено/топло по
въведената температура t в градус Целзий.
Температурните интервали са:
под -20 ледено студено;
между 0 и -20 - студено;
между 15 и 0 - хладно;
между 25 и 15 - топло;
над 25 – горещо.
Входни данни: цяло число от интервала [-100..100].
 */
echo "Enter temperature in degrees Celsius (integer in range -100 to 100):  ";
$temperature = trim(fgets(STDIN));;

while ($temperature < -100 || $temperature > 100 || intval($temperature) != floatval($temperature)){
    echo "This is not valid temperature. Enter temperature in degrees Celsius (integer in range -100 to 100):  ";
    $temperature = trim(fgets(STDIN));;
}
if ($temperature <= -20){
    echo "Ice cold";
}
else if ($temperature > -20 && $temperature <= 0){
    echo "Cold";
}
else if ($temperature > 0 && $temperature <= 15){
    echo "Cool";
}
else if ($temperature > 15 && $temperature <= 25){
    echo "Warm";
}
else if ($temperature > 25){
    echo "Hot";
}