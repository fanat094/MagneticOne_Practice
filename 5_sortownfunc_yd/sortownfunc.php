<?php

$a = array(
    0 => 7,
    1 => 1,
    2 => 4,
    3 => 2,
    4 => 5
);

for ($i = 0; $i<sizeof($a); $i++){
    for ($j = 0; $j< sizeof($a); $j++){
        if ($a[$i] < $a[$j]){
            $x = $a[$i];
            $a[$i] = $a[$j];
            $a[$j] = $x;
        }

    }
}
print_r($a);