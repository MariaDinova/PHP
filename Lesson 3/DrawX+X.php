<?php
echo "Enter odd positive number: ";
$n = trim(fgets(STDIN));
while (intval($n) != floatval($n) || $n < 1 || ($n % 2 == 0)){
    echo "Invalid input. Enter odd positive number: ";
    $n = trim(fgets(STDIN));
}

//part 1
for ($row = 1; $row <= ($n - 1)/2; $row++){
    for ($i = 1; $i <= $row - 1; $i++){
        echo " ";
    }
    echo "*";
//mid space
    /*for ($j = $n - 2; $j >= 1; $j--){
        echo " ";
    }
    echo "*";
//space 2
    for ($i = ($n - 1)/2; $i >= 1; $i--){
        echo " ";
    }
    echo "*";
//space 2
    for ($i = ($n - 1)/2; $i >= 1; $i--){
        echo " ";
    }
    echo "*";
//mid space
    for ($i = $n - 2; $i >= 1; $i--){
        echo " ";
    }
    echo "*";
   */
    echo PHP_EOL;
}

//middle row
for ($i = 1; $i <= ($n - 1)/2; $i++){
    echo " ";
}
echo "*";
for ($i = 1; $i <= ($n - 1)/2; $i++){
    echo " ";
}
for ($i = 1; $i <= $n; $i++){
    echo "*";
}
for ($i = 1; $i <= ($n - 1)/2; $i++){
    echo " ";
}
echo "*";
echo PHP_EOL;

//part 2
