<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 06.02.2015
 * Time: 18:59
 */
$start = microtime(true);
$maxPalindrome = 0;
$min = 100;
$max = 999;
for ($a = $max; $a >= $min; $a--) {
    for ($b = $max; $b >= $min; $b--) {
        $value = $a * $b;
        if($value <= $maxPalindrome){
            break;
        }
        if($value == strrev($value)) {
            $maxPalindrome = $value;
            echo $value . "\n";
        }
    }
}
echo "\n\n\n".microtime(true)-$start.' Sekunden verbraucht';