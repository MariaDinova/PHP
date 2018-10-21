<?php
/*
 Draw rhombus from stars by given N.
input: 5
    *****
   *****
  *****
 *****
*****
 */
echo "Enter a positive integer number: ";
$n = intval(trim(fgets(STDIN)));
$cS1 = $n - 1;

for ($rows = 1; $rows <= $n; $rows++){
        echo str_repeat(" ", $cS1).str_repeat("*", $n);
        $cS1 --;
    echo PHP_EOL;
}