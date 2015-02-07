<?php
require_once "Helper/PrimeStuff.php";
class The10001stPrime extends PrimeStuff{

    public function getPositionedPrimeNumber($position)
    {
        $primeCount = 0;
        for($i=1; ; $i++) {
            if(PrimeStuff::isPrime($i)) {
                $primeCount++;
                if ($primeCount === $position) {
                    return $i;
                }
            }
        }
        return;
    }
}