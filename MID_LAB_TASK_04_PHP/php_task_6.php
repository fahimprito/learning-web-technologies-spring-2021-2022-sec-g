<?php

$array=[5,6,8,1,9,3,4,7,2];

for($i=0; $i<9; $i++)
{
    if($array[$i] == 3){
        $found = 1; 
        $index = $i; 
    }
}

if($found == 1){
    echo "Number is found at ".$index;
}

?>