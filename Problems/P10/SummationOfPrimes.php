<?php
namespace Problems\P10;
use Library\PrimeNumbers;
class SummationOfPrimes extends \Library\Timer{

    public function sumPrimesBelowValue($maxValue)
    {
        $result = PrimeNumbers::sieveOfE($maxValue, true);
        return $result;
    }
}