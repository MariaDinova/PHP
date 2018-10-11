<?php
echo "Enter odd positive number: ";
$n = trim(fgets(STDIN));
while (intval($n) != floatval($n) || $n < 1 || ($n % 2 == 0)){
    echo "Invalid input. Enter odd positive number: ";
    $n = trim(fgets(STDIN));
}

for ($row=0; $row<$n; $row++)
{
    for ($column=0; $column<=$n; $column++)
    {
        if ($row == $column || ($row+$column == $n-1)           )
            echo "*";
        else
            echo " ";
    }

    for ($column=0; $column<$n; $column++)
    {
        if ($row == (($n - 1)/ 2) || $column == (($n - 1)/ 2))
            echo "*";
        else
            echo " ";
    }

    for ($column=0; $column<=$n; $column++)
    {
        if ($row == $column || ($row+$column == $n-1)           )
            echo "*";
        else
            echo " ";
    }

    echo "\n";
}