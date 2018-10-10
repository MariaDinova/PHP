<?php
/*Да се състави програма, която извежда всички
естествени трицифрени числа, които нямат еднакви цифри т.е.
100,101, 606 и т.н. не се извеждат
 */
for ($i = 100; $i <= 999; $i++){
    $digit1 = intval($i / 100);
    $digit2 = ($i / 10) % 10;
    $digit3 = $i % 10;

    if ($digit1 != $digit2 && $digit2 != $digit3 && $digit1 != $digit3){
        echo $i.PHP_EOL;
    }
}