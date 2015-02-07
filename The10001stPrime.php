<?php
require_once "Helper/PrimeStuff.php";
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
}