<?php
/*
 Draw heart with stars by given n > 5.
  *****     *****
 *******   *******
********* *********
*******************
 *****************
  ***************
   *************
    ***********
     *********
      *******
       *****
        ***
         *
 */
echo "Please enter an integer number, bigger than 5: ";
$n = trim(fgets(STDIN));
while (intval($n) != floatval($n) || $n < 5){
    echo "Invalid input. Please enter integer number, bigger than 5: ";
    $n = trim(fgets(STDIN));
};

for($i=$n/2; $i<=$n; $i+=2)
{
    //first spaces
    for($j=1; $j<$n-$i; $j+=2)
    {
        echo " ";
    }
    //first stars
    for($j=1; $j<=$i; $j++)
    {
        echo "*";
    }
    // second spaces
    for($j=1; $j<=$n-$i; $j++)
    {
        echo " ";
    }
    //second stars
    for($j=1; $j<=$i; $j++)
    {
        echo "*";
    }
    echo PHP_EOL;
}

for($i=$n; $i>=1; $i--)
{
    for($j=$i; $j<$n; $j++)
    {
        echo " ";
    }
    for($j=1; $j<=($i*2)-1; $j++)
    {
        echo "*";
    }
    echo PHP_EOL;
}
