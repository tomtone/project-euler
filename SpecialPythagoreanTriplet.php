<?php
$sum = 1000;
$start = microtime(true);
for($a = 1; $a < $sum/3; $a++){
    for($b = $a; $b <= $sum/2; $b++){
        $c = $sum - $a - $b;
        if ( ($a*$a + $b*$b) == ($c*$c) ){
            print_r($a*$b*$c . "\n");
        }
    }
}
echo microtime(true) - $start.' Sekunden verbraucht';