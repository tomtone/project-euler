<?php

$number = 600851475143;
$start = microtime(true);
for ($i = 2; $i <= sqrt($number); $i++) {
    if (($number / $i) === ceil($number / $i)) {
        if (is_prim($i)) {
            echo $i . "<br>\n";
        }
    }
}
function is_prim($primetest)
{
    for ($i = $primetest - 1; $i >= 2; $i--) {
        if ($primetest % $i === 0) {
            return false;
        }
    }
    return true;
}
echo "\n\n\n".microtime(true)-$start.' Sekunden verbraucht';