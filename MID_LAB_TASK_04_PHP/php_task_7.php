<?php

//1

for($i=0; $i<3;$i++)
{
    for($j=0;$j<=$i;$j++)
    {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
//2

for($i=3; $i>=1; $i--)
{
    for($j=1;$j<=$i;$j++)
    {
        echo $j;
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
//3

$ch='A';

for($i=0; $i<3;$i++)
{
    for($j=0;$j<=$i;$j++)
    {
        echo $ch++;
    }
    echo "<br>";
}


?>