<?php
/**
Дадено е наредено тесте карти.
Наредбата по тежест на карта е: 2,3,4,5,6,7,8,9,10, Вале, Дама,
Поп, Асо.
Наредбата по цвят на картите е: спатия, каро, купа, пика.
Да се създаде програма, чрез която се въвежда N - число от
интервала [1..51] и се извеждат въведения номер карта и
останалите по-големи карти от тестето.
Пример: 47.
Изход: Поп купа, Поп пика, Асо спатия, Асо каро, Асо купа, Асо
пика
 */
echo "Please enter an integer number between 1 and 51: ";
$n = trim(fgets(STDIN));
while (intval($n) != floatval($n) || $n < 1 || $n > 51){
    echo "Invalid input. Please enter an integer number between 1 and 51: ";
    $n = trim(fgets(STDIN));
}

for($i = $n; $i <= 52; $i++){
    switch ($i%4){
        case 0: $cardType = "Spade";
        break;
        case 1: $cardType = "Club";
        break;
        case 2: $cardType = "Diamond";
        break;
        case 3: $cardType = "Hearth";
        break;
    }

    if($i <=4){
        $cardValue = 2;
    }
    else{
        $cardValue = intval(($i-1) / 4) + 2;
    }
    if($cardValue == 11){
        $cardValue = "Jack";
    }
    if($cardValue == 12){
        $cardValue = "Queen";
    }
    if($cardValue == 13){
        $cardValue = "King";
    }
    if($cardValue == 14){
        $cardValue = "Ace";
    }

    echo "$cardValue  $cardType\n";
}