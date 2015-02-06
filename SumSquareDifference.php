<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 06.02.2015
 * Time: 19:47
 */
$start = microtime(true);
for($i = 1; $i <= 100; $i++){
    $squareSum += pow($i, 2);
    $sumSquare += $i;
}

print_r((pow($sumSquare,2) - $squareSum) . "\n");
echo "\n\n\n".microtime(true) - $start.' Sekunden verbraucht';