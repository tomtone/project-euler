<?php
$x = 1;
$y = 2;
$sum = $y;
$start = microtime(true);
while(true) {

    $z = $x + $y;
    if($z > 4000000){
        break;
    }
    $x = $y;
    $y = $z;
    if($z%2==0) $sum =$sum+$z;
}
print_r($sum);
echo microtime(true) - $start.' Sekunden verbraucht';