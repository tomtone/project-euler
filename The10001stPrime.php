<?php
require "Helper/PrimeStuff.php";
class The10001stPrime extends PrimeStuff{

    public function getPositionedPrimeNumber($position)
    {
        $i = 1;
        $prim = 3;
        $result = 0;
        while ($i <= $position) {
            if (self::isPrime($prim)) {
                echo $i ."\n";
                $i++;
                $result = $prim;
            }
            $prim++;
        }
        return $result;
    }
}/*
$start = microtime(true);
function is_prim($primetest)
{
    for ($i = $primetest - 1; $i >= 2; $i--) {
        if ($primetest % $i === 0) {
            return false;
        }
    }
    return true;
}
$i = 1;
$prim = 3;
$result = 0;
while ($i < 10001) {
    if (is_prim($prim)) {
        $i++;
        $result = $prim;
    }
    $prim++;
}

print_r($result . "\n");
echo "\n\n\n".microtime(true) - $start.' Sekunden verbraucht';*/