<?php
namespace Problems\P7;
use Library\PrimeNumbers;
class The10001stPrime extends \Library\Timer{

    public function getPositionedPrimeNumber($position)
    {
        $primeCount = 0;
        for($i=1; ; $i++) {
            if(PrimeNumbers::isPrime($i)) {
                $primeCount++;
                if ($primeCount === $position) {
                    return $i;
                }
            }
        }
        return;
    }
}