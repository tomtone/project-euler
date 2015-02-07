<?php
$start = microtime(true);
$sum = 0;
for($i=0;$i<1000; $i++){
    if($i%3 ==0 || $i%5==0){
        $sum+=$i;
    }
}
echo $sum . "\n";
echo microtime(true) - $start.' Sekunden verbraucht';