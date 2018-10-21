<?php
/*
 Въведете число N чрез конзолата и изкарайте
следната фигура, чиято големина да съответства на N.
#######
 #   #
  # #
   #
  # #
 #   #
#######
 */
$n = intval(trim(fgets(STDIN)));
for ($row = 0; $row < $n; $row++){
    for ($col = 0; $col < $n; $col++){
        if ($row == 0 || $row == $n - 1 || $row == $col || $row + $col == $n - 1){
            echo "#";
        }
        else {
            echo " ";
        }
    }
    echo PHP_EOL;
}