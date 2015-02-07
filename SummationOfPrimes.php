<?php
require_once "Helper/PrimeStuff.php";
class SummationOfPrimes extends PrimeStuff{

    public function sumPrimesBelowValue($maxValue)
    {
        $result = $this->getPrimeNumberArray($maxValue, true);
        return $result;
    }
}